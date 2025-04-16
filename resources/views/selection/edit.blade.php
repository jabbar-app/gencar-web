{{-- resources/views/selections/create.blade.php --}}
@extends('template.auth.main')

@section('content')
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner py-4">
        <div class="card">
          <div class="card-body">
            <div class="app-brand justify-content-center mb-4 mt-2">
              <a href="/" class="app-brand-link gap-2">
                <img src="{{ asset('assets/img/logo_gencar.png') }}" alt="Gencar" height="48px">
              </a>
            </div>
            <form action="{{ route('selections.update', $user) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="mb-3">
                <label for="user_id" class="form-label">Nama Peserta</label>
                <input type="text" class="form-control" value="{{ $user->name }}" readonly>
              </div>

              <div class="mb-3">
                <label for="pj_name" class="form-label">Nama Penanggung Jawab</label>
                <input type="text" name="pj_name" id="pj_name"
                  class="form-control @error('pj_name') is-invalid @enderror" placeholder="Contoh: Kak Ayu Gencar"
                  value="{{ old('pj_name', $selection->pj_name) }}">
                @error('pj_name')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="pj_contact" class="form-label">Kontak PJ (Whatsapp)</label>
                <input type="text" name="pj_contact" id="pj_contact"
                  class="form-control @error('pj_contact') is-invalid @enderror" placeholder="Contoh: 6281234567890"
                  value="{{ old('pj_contact', $selection->pj_contact) }}">
                @error('pj_contact')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="dateline" class="form-label">Batas Waktu</label>
                <input type="date" name="dateline" id="dateline"
                  class="form-control @error('dateline') is-invalid @enderror" value="{{ old('dateline', $selection->dateline) }}">
                <small class="text-muted">Peserta diwajibkan melakukan konfirmasi ke Pewawancara selambatnya pada tanggal di atas.</small>
                @error('dateline')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <button class="btn btn-danger d-grid w-100" type="submit">Simpan Data Seleksi</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
