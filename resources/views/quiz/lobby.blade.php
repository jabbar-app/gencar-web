@extends('template.dashboard.main')

@section('content')
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="card">
          <div class="card-header">
            <h4>Selamat Datang di Babak Penyisihan
                {{ Auth::user()->id }}
            </h4>
          </div>
          <div class="card-body">
            <p>
              Sebelum memulai ujian, harap perhatikan beberapa syarat dan ketentuan berikut ini:
            </p>
            <ul>
              <li>Pastikan koneksi internet Anda stabil selama ujian berlangsung.</li>
              <li>Anda hanya dapat mengikuti ujian ini satu kali.</li>
              <li>Setiap soal memiliki batas waktu tertentu, jadi pastikan untuk menjawab dengan cepat dan tepat.</li>
              <li>Ujian ini terdiri dari 60 soal pilihan ganda yang akan diacak untuk setiap peserta.</li>
              <li>Hasil ujian akan diumumkan setelah Anda menyelesaikan semua soal.</li>
            </ul>
            <p>
              Dengan mengklik tombol "Mulai", Anda menyetujui syarat dan ketentuan di atas dan siap untuk memulai ujian.
            </p>

            <a href="{{ route('quiz.results', 'penyisihan') }}" class="btn btn-info">Penyisihan Berakhir</a>

            {{-- @php
              // Set timezone to Asia/Jakarta (WIB)
              date_default_timezone_set('Asia/Jakarta');

              $currentTime = date('H:i');
              $startTime = '21:00';
              $endTime = '23:59';
            @endphp

            @if ($is_played)
              <a href="{{ route('quiz.results', $is_played->quiz_stage) }}" class="btn btn-info">Olimpiade Telah
                Dikerjakan</a>
            @else
              @if ($currentTime < $startTime)
                <div id="countdown"></div>
                <script>
                  // Countdown script
                  let startTime = new Date();
                  startTime.setHours(21, 0, 0); // Set to 21:00:00 WIB
                  let countdownTimer = setInterval(function() {
                    let now = new Date().getTime();
                    let distance = startTime - now;
                    if (distance < 0) {
                      clearInterval(countdownTimer);
                      location.reload(); // Refresh page when countdown ends
                    } else {
                      let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                      let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                      let seconds = Math.floor((distance % (1000 * 60)) / 1000);
                      document.getElementById("countdown").innerHTML = "Mulai dalam: " + hours + "j " + minutes + "m " +
                        seconds + "d";
                    }
                  }, 1000);
                </script>
              @elseif ($currentTime >= $startTime && $currentTime <= $endTime)
                <form method="GET" action="{{ route('quiz.penyisihan', ['index' => 0]) }}">
                  @csrf
                  <button type="submit" class="btn btn-primary">Mulai</button>
                </form>
              @else
                <div class="alert alert-danger">
                  Waktu pengerjaan ujian telah berakhir. Silakan hubungi panitia untuk informasi lebih lanjut.
                </div>
              @endif
            @endif --}}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
