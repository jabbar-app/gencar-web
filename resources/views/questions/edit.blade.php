@extends('template.dashboard.main')

@section('content')
  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        <h4>Edit Pertanyaan</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('questions.update', $question->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label for="question" class="form-label">Pertanyaan</label>
            <input type="text" class="form-control" id="question" name="question" value="{{ $question->question }}"
              required>
          </div>

          <div class="mb-3">
            <label for="answers" class="form-label">Jawaban</label>
            @foreach ($question->answers as $index => $answer)
              <input type="text" class="form-control mb-2" name="answers[]" value="{{ $answer->answer }}" required>
            @endforeach
            @for ($i = $question->answers->count(); $i < 5; $i++)
              <input type="text" class="form-control mb-2" name="answers[]" placeholder="Jawaban {{ $i + 1 }}">
            @endfor
          </div>

          <div class="mb-3">
            <label for="correct_answer" class="form-label">Jawaban Benar</label>
            <select class="form-select" id="correct_answer" name="correct_answer" required>
              @foreach ($question->answers as $index => $answer)
                <option value="{{ $index }}" {{ $answer->is_correct ? 'selected' : '' }}>Jawaban
                  {{ $index + 1 }}</option>
              @endforeach
            </select>
          </div>

          <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
      </div>
    </div>
  </div>
@endsection
