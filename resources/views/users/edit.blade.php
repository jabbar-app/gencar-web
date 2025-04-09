@extends('template.blank')

@section('content')
  <div class="container mt-5">
    <div class="row">
      <div class="col-12 col-xl-10 mx-auto">
        <img src="{{ asset('assets/img/logo_gencar.png') }}" alt="Generasi Cakrawala" style="height: 64px;" class="mb-4">

        <h4 class="text-danger mb-3">Edit Data Pendaftar</h4>

        <form action="{{ route('users.update', $user) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="card mb-4">
            <div class="card-body">
              <div class="row g-3">
                <div class="col-md-6">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}">
                </div>
                <div class="col-md-6">
                  <label>Link Twibbon</label>
                  <input type="text" class="form-control" name="link_twibbon" value="{{ old('link_twibbon', $user->link_twibbon) }}" placeholder="https://instagram.com/xxxxx" required>
                </div>
                <div class="col-md-6">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}">
                </div>
                <div class="col-md-6">
                  <label>Nomor HP</label>
                  <input type="text" class="form-control" name="phone" value="{{ old('phone', $user->phone) }}">
                </div>
                <div class="col-md-6">
                  <label>Tempat Lahir</label>
                  <input type="text" class="form-control" name="birth_place"
                    value="{{ old('birth_place', $user->birth_place) }}">
                </div>
                <div class="col-md-6">
                  <label>Tanggal Lahir</label>
                  <input type="date" class="form-control" name="birth_date"
                    value="{{ old('birth_date', $user->birth_date) }}">
                </div>
                <div class="col-md-6">
                  <label>Jenis Kelamin</label>
                  <select name="gender" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="laki-laki" {{ old('gender', $user->gender) == 'laki-laki' ? 'selected' : '' }}>
                      Laki-laki</option>
                    <option value="perempuan" {{ old('gender', $user->gender) == 'perempuan' ? 'selected' : '' }}>
                      Perempuan</option>
                  </select>
                </div>
                <div class="col-md-12">
                  <label>Alamat</label>
                  <textarea name="address" class="form-control">{{ old('address', $user->address) }}</textarea>
                </div>
                <div class="col-md-6">
                  <label>Agama</label>
                  <input type="text" class="form-control" name="religion"
                    value="{{ old('religion', $user->religion) }}">
                </div>
                <div class="col-md-6">
                  <label>Kontak Darurat</label>
                  <input type="text" class="form-control" name="emergency_contact"
                    value="{{ old('emergency_contact', $user->emergency_contact) }}">
                </div>
                <div class="col-md-12">
                  <label>Hobi / Minat</label>
                  <textarea name="hobbies" class="form-control">{{ old('hobbies', $user->hobbies) }}</textarea>
                </div>
                <div class="col-md-6">
                  <label>Aktivitas Saat Ini</label>
                  <input type="text" class="form-control" name="current_activity"
                    value="{{ old('current_activity', $user->current_activity) }}">
                </div>
                <div class="col-md-6">
                  <label>Pendidikan Terakhir</label>
                  <input type="text" class="form-control" name="last_education"
                    value="{{ old('last_education', $user->last_education) }}">
                </div>
                <div class="col-md-6">
                  <label>Jurusan / Bidang</label>
                  <input type="text" class="form-control" name="major" value="{{ old('major', $user->major) }}">
                </div>
                <div class="col-md-6">
                  <label>Sosial Media</label>
                  <input type="text" class="form-control" name="social_media"
                    value="{{ old('social_media', $user->social_media) }}">
                </div>
                <div class="col-md-6">
                  <label>Foto Pribadi</label>
                  <input type="file" class="form-control" name="photo">
                  @if ($user->photo)
                    <small class="text-muted">Foto saat ini: <a href="{{ asset('storage/' . $user->photo) }}"
                        target="_blank">Lihat</a></small>
                  @endif
                </div>
                <div class="col-md-12">
                  <label>Pengalaman Organisasi #1</label>
                  <textarea name="organization_experience_1" class="form-control">{{ old('organization_experience_1', $user->organization_experience_1) }}</textarea>
                </div>
                <div class="col-md-12">
                  <label>Pengalaman Organisasi #2</label>
                  <textarea name="organization_experience_2" class="form-control">{{ old('organization_experience_2', $user->organization_experience_2) }}</textarea>
                </div>
                <div class="col-md-12">
                  <label>Pengalaman Prestasi</label>
                  <textarea name="achievement_experience" class="form-control">{{ old('achievement_experience', $user->achievement_experience) }}</textarea>
                </div>
                <div class="col-md-12">
                  <label>Apa yang kamu ketahui tentang Generasi Cakrawala</label>
                  <textarea name="about_generasi_cakrawala" class="form-control">{{ old('about_generasi_cakrawala', $user->about_generasi_cakrawala) }}</textarea>
                </div>
                <div class="col-md-12">
                  <label>Motivasi mengikuti Gencar</label>
                  <textarea name="motivation" class="form-control">{{ old('motivation', $user->motivation) }}</textarea>
                </div>
                <div class="col-md-12">
                  <label>Rencana Kontribusi</label>
                  <textarea name="contribution_plan" class="form-control">{{ old('contribution_plan', $user->contribution_plan) }}</textarea>
                </div>
                <div class="col-md-6">
                  <label>Lokasi Kontribusi</label>
                  <input type="text" class="form-control" name="contribution_location"
                    value="{{ old('contribution_location', $user->contribution_location) }}">
                </div>
                <div class="col-md-6">
                  <label>Bidang Kontribusi</label>
                  <input type="text" class="form-control" name="contribution_field"
                    value="{{ old('contribution_field', $user->contribution_field) }}">
                </div>
                <div class="col-md-12">
                  <label>Keahlian / Skill</label>
                  <textarea name="skill" class="form-control">{{ old('skill', $user->skill) }}</textarea>
                </div>
                <div class="col-md-12">
                  <label>Riwayat Penyakit</label>
                  <textarea name="medical_history" class="form-control">{{ old('medical_history', $user->medical_history) }}</textarea>
                </div>
                <div class="col-md-12">
                  <label>Alergi Makanan</label>
                  <textarea name="food_allergy" class="form-control">{{ old('food_allergy', $user->food_allergy) }}</textarea>
                </div>
                <div class="col-md-6">
                  <label>Darimana tahu Gencar?</label>
                  <input type="text" class="form-control" name="source"
                    value="{{ old('source', $user->source) }}">
                </div>
                <div class="col-md-6">
                  <label>Upload Surat Komitmen</label>
                  <input type="file" class="form-control" name="commitment_letter">
                  @if ($user->commitment_letter)
                    <small class="text-muted">File saat ini: <a
                        href="{{ asset('storage/' . $user->commitment_letter) }}" target="_blank">Lihat</a></small>
                  @endif
                </div>
              </div>

              <div class="mt-4">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('users.show', $user) }}" class="btn btn-secondary">Kembali</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
