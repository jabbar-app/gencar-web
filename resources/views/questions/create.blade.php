@extends('template.dashboard.main')

@section('content')
  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        <h4>Tambah Pertanyaan</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('questions.store') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="question" class="form-label">Pertanyaan</label>
            <input type="text" class="form-control" id="question" name="question" required>
          </div>

          <div class="mb-3">
            <label for="answers" class="form-label">Jawaban</label>
            @for ($i = 0; $i < 5; $i++)
              <input type="text" class="form-control mb-2" name="answers[]" placeholder="Jawaban {{ $i + 1 }}"
                {{ $i < 2 ? 'required' : '' }}>
            @endfor
          </div>

          <div class="mb-3">
            <label for="correct_answer" class="form-label">Jawaban Benar</label>
            <select class="form-select" id="correct_answer" name="correct_answer" required>
              @for ($i = 0; $i < 5; $i++)
                <option value="{{ $i }}">Jawaban {{ $i + 1 }}</option>
              @endfor
            </select>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
@endsection
