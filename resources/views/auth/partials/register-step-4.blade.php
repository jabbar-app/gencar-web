<div id="step-4" class="content">
  <div class="content-header mb-4">
    <h4 class="mb-0">Langkah 4: Motivasi & Rencana</h4>
    <p>Ceritakan pengalaman dan rencanamu untuk berkontribusi.</p>
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
    <label for="achievement_experience" class="form-label">Pengalaman Prestasi</label>
    <textarea rows="3" class="form-control @error('achievement_experience') is-invalid @enderror"
      id="achievement_experience" name="achievement_experience"
      placeholder="Contoh: Juara 1 Lomba Karya Tulis Ilmiah Tingkat Provinsi (2023), Finalis Hackathon Nasional (2022)"
      required>{{ old('achievement_experience') }}</textarea>
    @error('achievement_experience')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="about_generasi_cakrawala" class="form-label">Apa yang kamu ketahui tentang Generasi Cakrawala?</label>
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
    <label for="contribution_plan" class="form-label">
      Rencana program kontribusi yang akan kamu laksanakan <br>
      <small>
        <em>
          (Nama program, penerima manfaat, tim yang terlibat, indikator keberhasilan, jangka waktu pelaksanaan, bentuk
          kegiatan, dsb.)
        </em>
      </small>
    </label>
    <textarea rows="3" class="form-control @error('contribution_plan') is-invalid @enderror" id="contribution_plan"
      name="contribution_plan"
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
</div>
