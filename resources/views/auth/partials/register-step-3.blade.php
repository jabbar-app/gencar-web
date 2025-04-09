<div id="step-3" class="content">
  <div class="content-header mb-4">
    <h4 class="mb-0">Langkah 3: Pendidikan & Aktivitas</h4>
    <p>Lengkapi informasi pendidikan terakhir dan aktivitas saat ini.</p>
  </div>

  <div class="mb-3">
    <label for="current_activity" class="form-label">Aktivitas/Pekerjaan Saat ini</label>
    <input type="text" class="form-control @error('current_activity') is-invalid @enderror" id="current_activity"
      name="current_activity" placeholder="Contoh: Mahasiswa / Karyawan Swasta" required
      value="{{ old('current_activity') }}" />
    @error('current_activity')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="last_education" class="form-label">Pendidikan Terakhir</label>
    <input type="text" class="form-control @error('last_education') is-invalid @enderror" id="last_education"
      name="last_education" placeholder="Contoh: SMA / S1" required value="{{ old('last_education') }}" />
    @error('last_education')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="major" class="form-label">Jurusan Kuliah/Bidang Pekerjaan</label>
    <input type="text" class="form-control @error('major') is-invalid @enderror" id="major" name="major"
      placeholder="Contoh: Teknik Informatika / Marketing" required value="{{ old('major') }}" />
    @error('major')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="social_media" class="form-label">Nama Pengguna Instagram/Twitter/Facebook/Website/Medsos lainnya</label>
    <input type="text" class="form-control @error('social_media') is-invalid @enderror" id="social_media"
      name="social_media" placeholder="Contoh: IG: @budisantoso, Twitter: @budi_s" value="{{ old('social_media') }}" />
    @error('social_media')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="photo" class="form-label">
      Unggah foto pribadi <em class="text-muted">(Maks. 2MB)</em>
    </label>
    <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo"
      required />
    @error('photo')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
</div>
