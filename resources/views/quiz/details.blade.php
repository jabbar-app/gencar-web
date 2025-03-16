@extends('template.dashboard.main')

@section('content')
  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h4>Detail Jawaban - {{ $user->name }}</h4>
          <a href="{{ route('quiz.results', 'penyisihan') }}" class="btn btn-secondary">Kembali</a>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <thead class="table-dark">
            <tr>
              <th>No</th>
              <th>Pertanyaan</th>
              <th>Jawaban {{ $user->name }}</th>
              <th>Jawaban Benar</th>
              <th>Waktu Menjawab (s)</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($answers as $index => $answer)
              <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $answer->question->question }}</td>
                <td>{{ $answer->answer->answer }}</td>
                <td>
                  @foreach ($answer->question->answers as $correctAnswer)
                    @if ($correctAnswer->is_correct)
                      {{ $correctAnswer->answer }}
                    @endif
                  @endforeach
                </td>
                <td>{{ $answer->time_taken }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
