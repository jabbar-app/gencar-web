@extends('template.dashboard.main')

@section('content')
  @php
    $status = Auth::user()->status;
    if ($status == 'Seleksi Wawancara') {
        $stage = 2;
    } elseif ($status == 'Lulus' || $status == 'Waiting List') {
        $stage = 3;
    } else {
        $stage = 1;
    }
  @endphp
  <div class="container-xxl flex-grow-1 container-p-y">
    @include('components.session-message')
    @if ($status == 'Seleksi Berkas' || $status == 'Seleksi Wawancara')
      <div class="row">
        <div class="col-xl-4 mb-4 col-lg-5 col-12">
          <div class="card">
            <div class="d-flex align-items-end row">
              <div class="col-7">
                <div class="card-body text-nowrap">
                  <h5 class="card-title mb-0">Welcome! 🎉</h5>
                  <p class="mb-2">{{ Auth::user()->name }}</p>
                  <h5 class="text-danger mb-1">
                    <i class="menu-icon tf-icons ti ti-clock"></i>Tahap {{ $stage }} / 3
                  </h5>
                  @if ($user->status == 'Belum Diterima')
                    <div class="btn btn-sm btn-outline-danger mt-2">Selesai</div>
                  @else
                    <div class="btn btn-sm btn-outline-info mt-2">{{ $user->status }}</div>
                  @endif
                </div>
              </div>
              <div class="col-5 text-center text-sm-left">
                <div class="card-body pb-0 px-0 px-md-4">
                  <img src="../../assets/img/illustrations/card-advance-sale.png" height="140" alt="view sales" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 mb-4 col-lg-7 col-12">
          <div class="card h-100">
            <div class="card-header">
              <div class="d-flex justify-content-between mb-3">
                <h5 class="card-title mb-0">Timeline</h5>
              </div>
            </div>
            <div class="card-body">
              <div class="row gy-3">
                <div class="col-md-4 col-6">
                  <div class="d-flex align-items-center">
                    <div
                      class="badge rounded-pill @if ($stage == 1) bg-label-info @else bg-label-warning @endif me-3 p-2">
                      <i class="ti ti-clock ti-sm"></i>
                    </div>
                    <div class="card-info">
                      <h5 class="mb-0">Seleksi Berkas</h5>
                      @if ($stage == 1 && $user->status != 'Belum Diterima')
                        <small>In progress</small>
                      @else
                        <small>-</small>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6">
                  <div class="d-flex align-items-center">
                    <div
                      class="badge rounded-pill @if ($stage == 2) bg-label-info @else bg-label-warning @endif me-3 p-2">
                      <i class="ti ti-clock ti-sm"></i>
                    </div>
                    <div class="card-info">
                      <h5 class="mb-0">Wawancara</h5>
                      @if ($stage == 2 && $user->status != 'Belum Diterima')
                        <small>In progress</small>
                      @else
                        <small>-</small>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-6">
                  <div class="d-flex align-items-center">
                    <div
                      class="badge rounded-pill @if (!empty(Auth::user()->result)) bg-label-info @else bg-label-warning @endif me-3 p-2">
                      <i class="ti ti-clock ti-sm"></i>
                    </div>
                    <div class="card-info">
                      <h5 class="mb-0">Pengumuman</h5>
                      <small>{{ Auth::user()->result ?? '-' }}</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endif

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <div class="d-flex justify-content-between">
              <h5 class="card-title mb-0">Hi, {{ Auth::user()->name }}!</h5>
              <small class="text-muted"><em>Generasi Cakrawala 8</em></small>
            </div>
          </div>
          <div class="card-body" id="announcement">
            @if ($user->status == 'Seleksi Berkas')
              @if (empty($user->link_twibbon))
                <h4>Pendaftaran Hampir Berhasil!</h4>
                <p>
                  Silakan kirimkan link sosial media kamu yang sudah menggunakan Twibbon
                  <a href="{{ route('users.edit', $user) }}" class="fw-bold text-primary">di sini</a> ya.
                </p>
              @else
                <h4>Pendaftaran Berhasil!</h4>
                <p>
                  Selamat, proses pendaftaran kamu sudah berhasil. Silakan menunggu informasi selanjutnya, ya.
                </p>
              @endif
            @elseif ($user->status == 'Lulus')
              <h4>Selamat! Kamu Lulus Seleksi Wawancara 🎉</h4>
              <p>
                Kamu dinyatakan <strong>LULUS</strong> seleksi wawancara Generasi Cakrawala (GENCAR) 8.0 Forum Indonesia
                Muda (FIM) Regional Medan dan Deli Serdang. <br><br>

                Kamu berhak mengikuti Pelatihan GENCAR 8.0 yang akan dilaksanakan secara luring pada:
              </p>
              <ul>
                <li><strong>Sabtu–Senin, 10–12 Mei 2025</strong></li>
              </ul>
              <p>
                Pelatihan ini wajib diikuti agar dapat resmi bergabung menjadi bagian dari Generasi Cakrawala FIM.
                <br><br>

                Biaya kontribusi: <strong>Rp100.000</strong><br>
                Meliputi: Penginapan, konsumsi, training kit, dan pengalaman tak terlupakan. <br><br>

                Transfer ke: <strong>BRI 335301012866505 a.n Habibah Salsabila Addary</strong><br>
                Batas pembayaran: <strong>28 April – 3 Mei 2025 pukul 23.59 WIB</strong>.<br><br>

                Setelah membayar, segera konfirmasi ke Hotline Generasi Cakrawala (<strong>0851-8071-7644</strong>). Jika
                tidak melakukan konfirmasi hingga batas waktu, maka dianggap mengundurkan diri.<br><br>

                Kami tidak sabar bertemu kamu di Pelatihan GENCAR 8.0! 🚀
              </p>
            @elseif ($user->status == 'Belum Diterima')
              <div class="alert alert-light mb-0 alert-dismissible" role="alert">
                <h5 class="alert-heading mb-2">Terima kasih atas partisipasimu 🙏</h5>
                <p>Halo, Sobat Cakrawala!</p>
                <p>
                  Terima kasih banyak atas partisipasi dan antusiasme kamu dalam mengikuti proses seleksi Open
                  Recruitment Generasi Cakrawala (GENCAR) 8.0 Forum Indonesia Muda Regional Medan dan Deli
                  Serdang.
                </p>
                <p class="mb-0">
                  Dengan berat hati, kami sampaikan bahwa kamu <strong>TIDAK LULUS</strong> dalam tahap wawancara.<br><br>
                  Kami sangat menghargai semangat dan komitmenmu. Ini bukan akhir perjalananmu, melainkan awal untuk terus
                  tumbuh dan berkembang.<br><br>
                  Teruslah berkarya, belajar, dan memberikan dampak positif. Sampai jumpa di kesempatan lainnya! 🌱
                </p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @elseif ($user->status == 'Waiting List')
              <div class="alert alert-light mb-0 alert-dismissible" role="alert">
                <h5 class="alert-heading mb-2">Kamu Berada di Waiting List!</h5>
                <p>Halo, Sobat Cakrawala!</p>
                <p>
                  Terima kasih banyak atas partisipasi dan antusiasme kamu dalam mengikuti proses seleksi Open
                  Recruitment Generasi Cakrawala (GENCAR) 8.0 Forum Indonesia Muda Regional Medan dan Deli
                  Serdang.
                </p>
                <p class="mb-0">
                  Kamu masuk dalam daftar <strong>WAITING LIST</strong> peserta Pelatihan GENCAR 8.0.<br><br>
                  Artinya, kamu berpotensi mengikuti pelatihan jika ada peserta yang mengundurkan diri atau tidak memenuhi
                  kewajiban administrasi.<br><br>
                  Kami akan segera menghubungimu apabila ada kuota yang tersedia. Tetap semangat dan selalu siap, ya! ✨
                </p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @else
              <div class="alert alert-light mb-0 alert-dismissible" role="alert">
                <p class="mb-0">
                  Belum ada pengumuman.
                </p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>

    @if ($user->status == 'Seleksi Berkas')
      <div class="row mt-4">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header">
              <div class="d-flex justify-content-between align-items-center my-2">
                <h3 class="text-danger m-0">Detail Pendaftaran</h3>
                <a href="{{ route('users.edit', $user) }}" class="btn btn-outline-danger">Edit Data</a>
              </div>
            </div>
            <div class="card-body">
              <div class="row mb-3">
                <div class="col-md-4 text-center">
                  @if ($user->photo)
                    <img src="{{ asset($user->photo) }}" class="img-fluid rounded">
                  @else
                    <img src="{{ asset('assets/img/default-avatar.png') }}" class="img-fluid rounded"
                      style="max-height: 200px;" alt="Foto">
                  @endif
                </div>
                <div class="col-md-8">
                  <p><strong>Nama Peserta: </strong>{{ $user->name }}</p>
                  <p><strong>Email: </strong>{{ $user->email }}</p>
                  <p><strong>Telepon: </strong>{{ $user->phone }}</p>
                  <p><strong>Alamat: </strong>{{ $user->address }}</p>
                  <p><strong>Tempat, Tanggal Lahir: </strong>{{ $user->birth_place }},
                    {{ \Carbon\Carbon::parse($user->birth_date)->translatedFormat('d F Y') }}</p>
                  <p><strong>Jenis Kelamin: </strong>{{ ucfirst($user->gender) }}</p>
                  <p><strong>Agama: </strong>{{ $user->religion }}</p>
                </div>
              </div>

              <hr>

              <h4>Informasi Tambahan</h4>
              <p><strong>Hobi/Minat:</strong> {{ $user->hobbies }}</p>
              <p><strong>Kontak Darurat:</strong> {{ $user->emergency_contact }}</p>
              <p><strong>Pekerjaan Saat Ini:</strong> {{ $user->current_activity }}</p>
              <p><strong>Pendidikan Terakhir:</strong> {{ $user->last_education }} - {{ $user->major }}</p>
              <p><strong>Sosial Media:</strong> {{ $user->social_media }}</p>

              <hr>

              <h4>Pengalaman & Motivasi</h4>
              <p><strong>Pengalaman Organisasi #1:</strong><br>{{ $user->organization_experience_1 }}</p>
              <p><strong>Pengalaman Organisasi #2:</strong><br>{{ $user->organization_experience_2 }}</p>
              <p><strong>Prestasi:</strong><br>{{ $user->achievement_experience }}</p>
              <p><strong>Tentang Generasi Cakrawala:</strong><br>{{ $user->about_generasi_cakrawala }}</p>
              <p><strong>Motivasi Ikut:</strong><br>{{ $user->motivation }}</p>
              <p><strong>Rencana Kontribusi:</strong><br>{{ $user->contribution_plan }}</p>
              <p><strong>Lokasi Kontribusi:</strong> {{ $user->contribution_location }}</p>
              <p><strong>Bidang Kontribusi:</strong> {{ $user->contribution_field }}</p>
              <p><strong>Keahlian/Keterampilan:</strong> {{ $user->skill }}</p>

              <hr>

              <h4>Kesehatan</h4>
              <p><strong>Riwayat Penyakit:</strong><br>{{ $user->medical_history }}</p>
              <p><strong>Alergi Makanan:</strong><br>{{ $user->food_allergy }}</p>

              <hr>

              <h4>Lain-lain</h4>
              <p><strong>Mengetahui Gencar Dari:</strong> {{ $user->source }}</p>
              @if ($user->commitment_letter)
                <p><strong>Surat Komitmen:</strong> <a href="{{ asset($user->commitment_letter) }}" target="_blank">Lihat
                    File</a></p>
              @endif
            </div>
          </div>
        </div>
      </div>
    @endif
  </div>
@endsection
