<div id="step-2" class="content">
  <div class="content-header mb-4">
    <h4 class="mb-0">Langkah 2: Data Pribadi</h4>
    <p>Isi informasi pribadi kamu secara lengkap.</p>
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
      <option value="" disabled selected>- Pilih Jenis Kelamin -</option>
      <option value="Laki-Laki" {{ old('gender') == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
      <option value="Perempuan" {{ old('gender') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
    </select>
    @error('gender')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="address" class="form-label">Alamat Domisili Sekarang</label>
    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address"
      placeholder="Contoh: Jl. Ahmad Yani No. 123, Medan" required value="{{ old('address') }}" />
    @error('address')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="religion" class="form-label">Agama</label>
    <select class="form-control @error('religion') is-invalid @enderror" id="religion" name="religion" required>
      <option value="" disabled selected>- Pilih Agama -</option>
      <option value="Islam" {{ old('religion') == 'Islam' ? 'selected' : '' }}>Islam</option>
      <option value="Kristen Protestan" {{ old('religion') == 'Kristen Protestan' ? 'selected' : '' }}>Kristen
        Protestan</option>
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
    <input type="text" class="form-control @error('emergency_contact') is-invalid @enderror" id="emergency_contact"
      name="emergency_contact" placeholder="Contoh: 6285678901234" required value="{{ old('emergency_contact') }}" />
    @error('emergency_contact')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
</div>
