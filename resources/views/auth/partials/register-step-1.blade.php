<div id="step-1" class="content">
  <div class="content-header mb-4">
    <h4 class="mb-0">Langkah 1: Informasi Akun</h4>
    <p>Isi informasi akun dasar untuk mendaftar.</p>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
      placeholder="Contoh: Budi Santoso" required value="{{ old('name') }}" />
    @error('name')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
      placeholder="Contoh: budi.santoso@gmail.com" required value="{{ old('email') }}" />
    @error('email')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password"
      placeholder="Buat password baru" required />
    @error('password')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
      placeholder="Ulangi password" required />
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Nomor Kontak (Whatsapp)</label>
    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
      placeholder="Contoh: 6281234567890" required value="{{ old('phone') }}" />
    @error('phone')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
</div>
