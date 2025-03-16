@extends('template.dashboard.main')

@section('content')
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="card" style="animation: fadeInUp 1s ease-in-out;">
          <div class="card-header">
            <h4 class="text-center" style="animation: fadeInDown 1s ease-in-out;">Selamat Datang di Babak Final</h4>
          </div>
          <div class="card-body">
            <p style="animation: fadeInLeft 1s ease-in-out;">
              Anda telah mencapai babak final! Ini adalah pencapaian luar biasa, dan kami sangat bangga pada Anda.
            </p>
            <p style="animation: fadeInRight 1s ease-in-out;">
              Sebelum memulai ujian, harap perhatikan beberapa syarat dan ketentuan berikut ini:
            </p>
            <ul style="animation: fadeIn 1.5s ease-in-out;">
              <li>Pastikan koneksi internet Anda stabil selama ujian berlangsung.</li>
              <li>Anda hanya dapat mengikuti ujian ini satu kali.</li>
              <li>Setiap soal memiliki batas waktu tertentu, jadi pastikan untuk menjawab dengan cepat dan tepat.</li>
              <li>Ujian ini terdiri dari 40 soal pilihan ganda yang akan diacak untuk setiap peserta.</li>
              <li>Hasil ujian akan diumumkan setelah Anda menyelesaikan semua soal.</li>
            </ul>
            <p style="animation: fadeInLeft 1s ease-in-out;">
              Dengan mengklik tombol "Mulai", Anda menyetujui syarat dan ketentuan di atas dan siap untuk memulai ujian.
            </p>

            <div class="d-flex justify-content-center my-4">
              <a href="{{ route('quiz.next_question', ['quiz_stage' => 'final', 'index' => 0]) }}" class="btn btn-lg btn-danger w-50" style="animation: pulse 2s infinite;">
                Mulai
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <style>
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

    @keyframes fadeInLeft {
      from {
        opacity: 0;
        transform: translateX(-20px);
      }

      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes fadeInRight {
      from {
        opacity: 0;
        transform: translateX(20px);
      }

      to {
        opacity: 1;
        transform: translateX(0);
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

    .card:hover {
      transform: scale(1.02);
      transition: transform 0.3s ease-in-out;
    }
  </style>
@endsection
