@extends('template.dashboard.main')

@section('content')
  <div class="container mt-5">
    <div class="card">
      <div class="card-header text-center" style="animation: fadeInDown 1s ease-in-out;">
        <h4>Leaderboard Sementara</h4>
      </div>
      <div class="card-body" style="animation: fadeInUp 1s ease-in-out;">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Posisi</th>
              <th>Nama Peserta</th>
              <th>Skor</th>
              <th>Total Waktu</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($leaders as $leader)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $leader->user->name }}</td>
                <td>{{ $leader->correct_answers }}</td>
                <td>{{ gmdate('H:i:s', $leader->total_time) }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>

        <div class="text-center mt-4">
          @if ($next_button)
            <a href="{{ route('quiz.next_question', ['quiz_stage' => $quiz_stage, 'index' => $nextQuestionIndex]) }}"
              class="btn btn-primary" style="animation: pulse 2s infinite;">Lanjutkan ke Pertanyaan Berikutnya</a>
          @endif
        </div>
      </div>
    </div>
  </div>

  <script>
    // Refresh page every 3 seconds
    setInterval(function() {
      window.location.reload();
    }, 3000);
  </script>

  <style>
    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes pulse {
      0% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.05);
      }

      100% {
        transform: scale(1);
      }
    }
  </style>
@endsection
