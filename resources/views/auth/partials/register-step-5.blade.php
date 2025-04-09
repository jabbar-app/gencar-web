<div id="step-5" class="content">
  <div class="content-header mb-4">
    <h4 class="mb-0">Langkah 5: Kesehatan & Komitmen</h4>
    <p>Beberapa data terakhir sebelum kamu menyelesaikan pendaftaran.</p>
  </div>

  <div class="mb-3">
    <label for="contribution_location" class="form-label">Dimana rencana kontribusimu?</label>
    <select class="form-control @error('contribution_location') is-invalid @enderror" id="contribution_location"
      name="contribution_location" required>
      <option value="" disabled selected>- Pilih Lokasi -</option>
      <option value="Medan" {{ old('contribution_location') == 'Medan' ? 'selected' : '' }}>Medan</option>
      <option value="Deli Serdang" {{ old('contribution_location') == 'Deli Serdang' ? 'selected' : '' }}>Deli Serdang
      </option>
    </select>
    @error('contribution_location')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="contribution_field" class="form-label">Dibidang apa rencana kontribusimu?</label>
    <input type="text" class="form-control @error('contribution_field') is-invalid @enderror" id="contribution_field"
      name="contribution_field" placeholder="Contoh: Pendidikan, Kesehatan, Sosial"
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
    <select class="form-control @error('source') is-invalid @enderror" id="source" name="source" required>
      <option value="" disabled selected>- Pilih Sumber Informasi -</option>
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
      Upload surat komitmen diri <em class="text-muted">(Maks. 2MB)</em>
    </label>
    <input type="file" class="form-control @error('commitment_letter') is-invalid @enderror" id="commitment_letter"
      name="commitment_letter" required />
    <p class="mt-2">Unduh template
      <a href="https://drive.google.com/drive/folders/1pHRHdEhhKsQdbJazyU0PtwZZYtFKR4wW" target="_blank">Surat Komitmen
        Diri</a>
    </p>
    @error('commitment_letter')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>

  <hr class="my-4" />

  <div class="mb-3">
    <div class="form-check">
      <input class="form-check-input @error('terms') is-invalid @enderror" type="checkbox" id="terms-conditions"
        name="terms" required />
      <label class="form-check-label" for="terms-conditions">
        Saya menyetujui
        <a href="javascript:void(0);" class="text-danger">syarat & ketentuan</a> pendaftaran Gencar 8.
      </label>
      @error('terms')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
  </div>
</div>
