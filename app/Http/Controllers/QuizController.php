<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\QuizResult;
use App\Models\Setting;
use App\Models\User;
use App\Models\UserAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class QuizController extends Controller
{
    public function dashboard()
    {
        $questions = Question::all();
        return view('dashboard', compact('questions'));
    }

    public function lobby()
    {
        $is_played = QuizResult::where('user_id', Auth::user()->id)->where('quiz_stage', 'penyisihan')->first();

        if (!empty($is_played) && $is_played->correct_answers > 42) {
            $is_played = QuizResult::where('user_id', Auth::user()->id)->first();
            return view('quiz.final', compact('is_played'));
        }

        return view('quiz.final', compact('is_played'));
    }

    public function indexQuestions()
    {
        $questions = Question::all();
        return view('questions.index', compact('questions'));
    }

    public function createQuestion()
    {
        return view('questions.create');
    }

    public function storeQuestion(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answers' => 'required|array|min:2|max:5',
            'answers.*' => 'required|string|max:255',
            'correct_answer' => 'required|in:0,1,2,3,4',
        ]);

        $question = Question::create(['question' => $request->question]);

        foreach ($request->answers as $index => $answer) {
            Answer::create([
                'question_id' => $question->id,
                'answer' => $answer,
                'is_correct' => $index == $request->correct_answer,
            ]);
        }

        return redirect()->route('questions.index')->with('success', 'Pertanyaan berhasil ditambahkan');
    }

    public function editQuestion(Question $question)
    {
        return view('questions.edit', compact('question'));
    }

    public function updateQuestion(Request $request, Question $question)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answers' => 'required|array|min:2|max:5',
            'answers.*' => 'required|string|max:255',
            'correct_answer' => 'required|in:0,1,2,3,4',
        ]);

        $question->update(['question' => $request->question]);

        // Hapus jawaban lama
        $question->answers()->delete();

        // Simpan jawaban baru
        foreach ($request->answers as $index => $answer) {
            Answer::create([
                'question_id' => $question->id,
                'answer' => $answer,
                'is_correct' => $index == $request->correct_answer,
            ]);
        }

        return redirect()->route('questions.index')->with('success', 'Pertanyaan berhasil diperbarui');
    }

    public function destroyQuestion(Question $question)
    {
        $question->delete();
        return redirect()->route('questions.index')->with('success', 'Pertanyaan berhasil dihapus');
    }

    public function updateStage(Request $request, $id)
    {
        $question = Question::find($id);

        if ($question) {
            $question->quiz_stage = $request->quiz_stage;
            $question->save();

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 404);
    }

    public function showQuestion($quiz_stage, $index)
    {
        $user = Auth::user();

        // Cek apakah hasil kuis sudah ada untuk tahap ini
        $is_played = QuizResult::where('user_id', $user->id)->where('quiz_stage', $quiz_stage)->first();
        if ($is_played) {
            // return 'hao';
            return redirect()->route('quiz.results', ['stage' => $quiz_stage]);
        }

        // dd($quiz_stage);
        // Ambil semua pertanyaan untuk tahap ini
        $questions = Question::where('quiz_stage', $quiz_stage)->get();

        // dd($questions->count());

        // Validasi: pastikan index dalam rentang yang valid
        if ($index >= $questions->count()) {
            // return 'haow';
            return redirect()->route('quiz.results', ['stage' => $quiz_stage]);
        }

        // Ambil pertanyaan berdasarkan index
        $question = $questions[$index];

        // Cek apakah pertanyaan ini sudah dijawab oleh user
        $answered = UserAnswer::where('user_id', $user->id)
            ->where('question_id', $question->id)
            ->where('quiz_stage', $quiz_stage)
            ->exists();

        if ($answered) {
            $nextIndex = $index + 1;
            if ($nextIndex < $questions->count()) {
                return redirect()->route('quiz.leaderboard', [
                    'nextQuestionIndex' => $nextIndex,
                    'quiz_stage' => $quiz_stage,
                ]);
            } else {
                // return 'haio';
                return redirect()->route('quiz.results', ['stage' => $quiz_stage]);
            }
        }

        return view('quiz.question', compact('question', 'index', 'quiz_stage'));
    }

    public function submitAnswer(Request $request)
    {
        // dd($request->all());
        $user = Auth::user();

        $existingAnswer = UserAnswer::where('user_id', $user->id)
            ->where('question_id', $request->question_id)
            ->where('quiz_stage', $request->quiz_stage)
            ->first();

        if ($existingAnswer) {
            $nextQuestionIndex = $request->index + 1;

            return redirect()->route('quiz.leaderboard', [
                'nextQuestionIndex' => $nextQuestionIndex,
                'quiz_stage' => $request->quiz_stage
            ]);
        }

        UserAnswer::create([
            'user_id' => $user->id,
            'question_id' => $request->question_id,
            'answer_id' => $request->answer_id,
            'time_taken' => $request->time_taken,
            'quiz_stage' => $request->quiz_stage,
        ]);

        $questionsCount = Question::where('quiz_stage', $request->quiz_stage)->count();

        if ($request->index + 1 >= $questionsCount) {
            $correctAnswers = UserAnswer::where('user_id', $user->id)
                ->where('quiz_stage', $request->quiz_stage)
                ->whereHas('answer', function ($query) {
                    $query->where('is_correct', true);
                })
                ->count();

            $totalTime = UserAnswer::where('user_id', $user->id)
                ->where('quiz_stage', $request->quiz_stage)
                ->sum('time_taken');

            QuizResult::updateOrCreate(
                ['user_id' => $user->id, 'quiz_stage' => $request->quiz_stage],
                ['correct_answers' => $correctAnswers, 'total_time' => $totalTime]
            );

            return redirect()->route('quiz.results', ['stage' => $request->quiz_stage]);
        }

        $nextQuestionIndex = $request->index + 1;

        return redirect()->route('quiz.leaderboard', [
            'nextQuestionIndex' => $nextQuestionIndex,
            'quiz_stage' => $request->quiz_stage
        ]);
    }


    public function showLeaderboard(Request $request)
    {
        $quiz_stage = $request->get('quiz_stage', 'final');
        $leaders = UserAnswer::select('user_id')
            ->selectRaw('SUM(CASE WHEN answers.is_correct = 1 THEN 1 ELSE 0 END) as correct_answers')
            ->selectRaw('SUM(time_taken) as total_time')
            ->join('answers', 'user_answers.answer_id', '=', 'answers.id')
            ->where('quiz_stage', $quiz_stage)
            ->groupBy('user_id')
            ->orderBy('correct_answers', 'desc')
            ->orderBy('total_time', 'asc')
            ->limit(10)
            ->with('user')
            ->get();

        $nextQuestionIndex = $request->get('nextQuestionIndex', 1);

        // Ambil setting dari tabel settings
        $setting = Setting::first();
        $next_button = $setting ? $setting->next_button : false;

        return view('quiz.leaderboard', compact('leaders', 'nextQuestionIndex', 'quiz_stage', 'next_button'));
    }



    public function showResults($stage)
    {
        $results = QuizResult::where('quiz_stage', $stage)
            ->orderBy('correct_answers', 'desc')
            ->orderBy('total_time', 'asc')
            ->with('user')
            ->get();

        if ($stage == 'final') {
            return view('quiz.pengumuman', compact('stage', 'results'));
        }

        return view('quiz.results', compact('stage', 'results'));
    }


    public function showDetails($user_id)
    {
        $user = User::where('id', $user_id)->first();
        $answers = UserAnswer::where('user_id', $user_id)
            ->with(['question', 'answer'])
            ->get();

        if ($answers->isEmpty()) {
            return redirect()->route('dashboard');
        }

        return view('quiz.details', compact('answers', 'user'));
    }
}
