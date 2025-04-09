@extends('template.blank')

@section('content')
  <div class="container my-5">
    @include('components.session-message')
    <div class="row">
      <div class="col-12 col-xl-10 mx-auto">
        <img src="{{ asset('assets/img/logo_gencar.png') }}" alt="Generasi Cakrawala" style="height: 64px;" class="mb-4">

        <h4 class="text-danger mb-3">Detail Pendaftar</h4>

        <div class="card mb-4">
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
                <h2>{{ $user->name }}</h2>
                <p>Email: {{ $user->email }}</p>
                <p>Telepon: {{ $user->phone }}</p>
                <p>Alamat: {{ $user->address }}</p>
                <p>Tempat, Tanggal Lahir: {{ $user->birth_place }},
                  {{ \Carbon\Carbon::parse($user->birth_date)->translatedFormat('d F Y') }}</p>
                <p>Jenis Kelamin: {{ ucfirst($user->gender) }}</p>
                <p>Agama: {{ $user->religion }}</p>
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

        <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
      </div>
    </div>
  </div>
@endsection
