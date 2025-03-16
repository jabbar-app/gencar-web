@extends('template.auth.main')

@section('content')
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner py-4">
        <!-- Register Card -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center mb-4 mt-2">
              <a href="/" class="app-brand-link gap-2">
                <img src="{{ asset('assets/img/logo_gencar.png') }}" alt="Gencar" height="48px">
              </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-1 pt-2">Adventure starts here 🚀</h4>
            <p class="mb-4">Pendaftaran Generasi Cakrawala 8, resmi dibuka!</p>

            <form id="formAuthentication" class="mb-3" action="{{ route('register') }}" method="POST"
              enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                  name="name" placeholder="Contoh: Budi Santoso" required value="{{ old('name') }}" />
                @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                  name="email" placeholder="Contoh: budi.santoso@gmail.com" required value="{{ old('email') }}" />
                @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                  name="password" placeholder="Masukkan password anda" required />
                @error('password')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Nomor Kontak (Whatsapp)</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone"
                  name="phone" placeholder="Contoh: 6281234567890" required value="{{ old('phone') }}" />
                @error('phone')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="birth_place" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control @error('birth_place') is-invalid @enderror" id="birth_place"
                  name="birth_place" placeholder="Contoh: Medan" required value="{{ old('birth_place') }}" />
                @error('birth_place')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="birth_date" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control @error('birth_date') is-invalid @enderror" id="birth_date"
                  name="birth_date" required value="{{ old('birth_date') }}" />
                @error('birth_date')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="gender" class="form-label">Jenis Kelamin</label>
                <select class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender" required>
                  <option value="Laki-Laki" {{ old('gender') == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                  <option value="Perempuan" {{ old('gender') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
                @error('gender')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="address" class="form-label">Alamat Domisili Sekarang</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                  name="address" placeholder="Contoh: Jl. Ahmad Yani No. 123, Medan" required
                  value="{{ old('address') }}" />
                @error('address')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="religion" class="form-label">Agama</label>
                <select class="form-control @error('religion') is-invalid @enderror" id="religion" name="religion"
                  required>
                  <option value="" selected disabled>- Pilih Agama -</option>
                  <option value="Islam" {{ old('religion') == 'Islam' ? 'selected' : '' }}>Islam</option>
                  <option value="Kristen Protestan" {{ old('religion') == 'Kristen Protestan' ? 'selected' : '' }}>
                    Kristen Protestan</option>
                  <option value="Katolik" {{ old('religion') == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                  <option value="Hindu" {{ old('religion') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                  <option value="Buddha" {{ old('religion') == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                  <option value="Konghucu" {{ old('religion') == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                </select>
                @error('religion')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="hobbies" class="form-label">Hobi/Minat/Ketertarikan</label>
                <textarea rows="3" class="form-control @error('hobbies') is-invalid @enderror" id="hobbies" name="hobbies"
                  placeholder="Contoh: Membaca, menulis, fotografi, traveling">{{ old('hobbies') }}</textarea>
                @error('hobbies')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="emergency_contact" class="form-label">Nomor Kontak Darurat</label>
                <input type="text" class="form-control @error('emergency_contact') is-invalid @enderror"
                  id="emergency_contact" name="emergency_contact" placeholder="Contoh: 6285678901234" required
                  value="{{ old('emergency_contact') }}" />
                @error('emergency_contact')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="current_activity" class="form-label">Aktivitas/Pekerjaan Saat ini</label>
                <input type="text" class="form-control @error('current_activity') is-invalid @enderror"
                  id="current_activity" name="current_activity" placeholder="Contoh: Mahasiswa / Karyawan Swasta"
                  required value="{{ old('current_activity') }}" />
                @error('current_activity')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="last_education" class="form-label">Pendidikan Terakhir</label>
                <input type="text" class="form-control @error('last_education') is-invalid @enderror"
                  id="last_education" name="last_education" placeholder="Contoh: SMA / S1" required
                  value="{{ old('last_education') }}" />
                @error('last_education')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="major" class="form-label">Jurusan Kuliah/Bidang Pekerjaan</label>
                <input type="text" class="form-control @error('major') is-invalid @enderror" id="major"
                  name="major" placeholder="Contoh: Teknik Informatika / Marketing" required
                  value="{{ old('major') }}" />
                @error('major')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="social_media" class="form-label">Nama Pengguna Instagram/Twitter/Facebook/Website/Medsos
                  lainnya</label>
                <input type="text" class="form-control @error('social_media') is-invalid @enderror"
                  id="social_media" name="social_media" placeholder="Contoh: IG: @budisantoso, Twitter: @budi_s"
                  value="{{ old('social_media') }}" />
                @error('social_media')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="photo" class="form-label">
                  Unggah foto pribadi
                  <em class="text-muted">(Maks. 2MB)</em>
                </label>
                <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo"
                  name="photo" required />
                @error('photo')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="organization_experience_1" class="form-label">Pengalaman Organisasi #1</label>
                <textarea rows="3" class="form-control @error('organization_experience_1') is-invalid @enderror"
                  id="organization_experience_1" name="organization_experience_1"
                  placeholder="Contoh: BEM Fakultas Teknik Universitas X (2022-2023) sebagai Ketua Divisi Pengabdian Masyarakat"
                  required>{{ old('organization_experience_1') }}</textarea>
                @error('organization_experience_1')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="organization_experience_2" class="form-label">Pengalaman Organisasi #2 (Opsional)</label>
                <textarea rows="3" class="form-control @error('organization_experience_2') is-invalid @enderror"
                  id="organization_experience_2" name="organization_experience_2"
                  placeholder="Contoh: Komunitas Relawan Peduli Lingkungan (2021-sekarang) sebagai anggota aktif">{{ old('organization_experience_2') }}</textarea>
                @error('organization_experience_2')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="achievement_experience" class="form-label">Ceritakan pengalaman prestasi yang pernah kamu
                  raih!</label>
                <textarea rows="3" class="form-control @error('achievement_experience') is-invalid @enderror"
                  id="achievement_experience" name="achievement_experience"
                  placeholder="Contoh: Juara 1 Lomba Karya Tulis Ilmiah Tingkat Provinsi (2023), Finalis Hackathon Nasional (2022)"
                  required>{{ old('achievement_experience') }}</textarea>
                @error('achievement_experience')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="about_generasi_cakrawala" class="form-label">Apa yang kamu ketahui tentang Generasi
                  Cakrawala?</label>
                <textarea rows="3" class="form-control @error('about_generasi_cakrawala') is-invalid @enderror"
                  id="about_generasi_cakrawala" name="about_generasi_cakrawala"
                  placeholder="Contoh: Generasi Cakrawala adalah program kepemimpinan untuk anak muda yang fokus pada pengembangan potensi dan kontribusi sosial di Medan"
                  required>{{ old('about_generasi_cakrawala') }}</textarea>
                @error('about_generasi_cakrawala')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="motivation" class="form-label">Kenapa kamu mau ikutan Generasi Cakrawala?</label>
                <textarea rows="3" class="form-control @error('motivation') is-invalid @enderror" id="motivation"
                  name="motivation"
                  placeholder="Contoh: Saya ingin mengembangkan keterampilan kepemimpinan dan berkontribusi nyata untuk masyarakat sekitar"
                  required>{{ old('motivation') }}</textarea>
                @error('motivation')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="contribution_plan" class="form-label">Rencana program kontribusi yang akan kamu
                  laksanakan</label>
                <textarea rows="3" class="form-control @error('contribution_plan') is-invalid @enderror"
                  id="contribution_plan" name="contribution_plan"
                  placeholder="Contoh: Program edukasi literasi digital untuk anak-anak di daerah pinggiran Medan" required>{{ old('contribution_plan') }}</textarea>
                @error('contribution_plan')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="skill" class="form-label">Keahlian/keterampilan diri yang telah diimplementasikan</label>
                <textarea rows="3" class="form-control @error('skill') is-invalid @enderror" id="skill" name="skill"
                  placeholder="Contoh: Kemampuan mengajar yang telah saya implementasikan dalam kegiatan bimbingan belajar untuk anak-anak kurang mampu"
                  required>{{ old('skill') }}</textarea>
                @error('skill')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="contribution_location" class="form-label">Dimana rencana kontribusimu? (Medan/Deli
                  Serdang)</label>
                <input type="text" class="form-control @error('contribution_location') is-invalid @enderror"
                  id="contribution_location" name="contribution_location" placeholder="Contoh: Deli Serdang"
                  value="{{ old('contribution_location') }}" />
                @error('contribution_location')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="contribution_field" class="form-label">Dibidang apa rencana kontribusimu?
                  (Lingkungan/Pendidikan/Sosial/Literasi)</label>
                <input type="text" class="form-control @error('contribution_field') is-invalid @enderror"
                  id="contribution_field" name="contribution_field" placeholder="Contoh: Pendidikan"
                  value="{{ old('contribution_field') }}" />
                @error('contribution_field')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="medical_history" class="form-label">Riwayat penyakit</label>
                <textarea rows="3" class="form-control @error('medical_history') is-invalid @enderror" id="medical_history"
                  name="medical_history" placeholder="Contoh: Asma ringan / Tidak ada">{{ old('medical_history') }}</textarea>
                @error('medical_history')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="food_allergy" class="form-label">Alergi makan</label>
                <textarea rows="3" class="form-control @error('food_allergy') is-invalid @enderror" id="food_allergy"
                  name="food_allergy" placeholder="Contoh: Seafood / Tidak ada">{{ old('food_allergy') }}</textarea>
                @error('food_allergy')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="source" class="form-label">Darimana kamu tahu Gencar?</label>
                <select class="form-control @error('source') is-invalid @enderror" id="source" name="source"
                  required>
                  <option value="" selected disabled>- Pilih Data -</option>
                  <option value="Teman" {{ old('source') == 'Teman' ? 'selected' : '' }}>Teman</option>
                  <option value="Instagram" {{ old('source') == 'Instagram' ? 'selected' : '' }}>Instagram</option>
                  <option value="Website" {{ old('source') == 'Website' ? 'selected' : '' }}>Website</option>
                  <option value="WA" {{ old('source') == 'WA' ? 'selected' : '' }}>WA</option>
                </select>
                @error('source')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="commitment_letter" class="form-label">
                  Upload surat komitmen diri
                  <em class="text-muted">(Maks. 2MB)</em>
                </label>
                <input type="file" class="form-control @error('commitment_letter') is-invalid @enderror"
                  id="commitment_letter" name="commitment_letter" required />
                <p class="mt-2">Unduh template
                  <a href="https://drive.google.com/drive/folders/1pHRHdEhhKsQdbJazyU0PtwZZYtFKR4wW"
                    target="_blank">Surat Komitmen Diri</a>
                </p>
                @error('commitment_letter')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <hr class="my-4">
              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input @error('terms') is-invalid @enderror" type="checkbox"
                    id="terms-conditions" name="terms" required />
                  <label class="form-check-label" for="terms-conditions">
                    Saya menyetujui
                    <a href="javascript:void(0);" class="text-danger">syarat & ketentuan</a> pendaftaran Gencar 8.
                  </label>
                  @error('terms')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <button class="btn btn-danger d-grid w-100">Daftar Gencar 8</button>
            </form>

            <p class="text-center">
              <span>Sudah terdaftar?</span>
              <a href="{{ route('login') }}">
                <span class="text-danger">Login di sini</span>
              </a>
            </p>
          </div>
        </div>
        <!-- Register Card -->
      </div>
    </div>
  </div>
@endsection
