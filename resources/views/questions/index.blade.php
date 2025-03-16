@extends('template.dashboard.main')

@section('content')
  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        <h4>Daftar Pertanyaan</h4>
        <a href="{{ route('questions.create') }}" class="btn btn-primary float-end">Tambah Pertanyaan</a>
      </div>
      <div class="card-body">
        @if (session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        @endif
        <table class="table table-bordered">
          <thead class="table-dark">
            <tr>
              <th>No</th>
              <th>Pertanyaan</th>
              <th>Kategori</th>
              <th>Tingkat</th>
              <th>Babak Final</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($questions as $index => $question)
              <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $question->question }}</td>
                <td>{{ $question->category }}</td>
                <td>{{ $question->difficulty }}</td>
                <td>
                  <input type="checkbox" class="final-stage-checkbox" data-id="{{ $question->id }}"
                    {{ $question->quiz_stage == 'final' ? 'checked' : '' }}>
                </td>
                <td>
                  <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-warning btn-sm">Edit</a>
                  <form action="{{ route('questions.destroy', $question->id) }}" method="POST"
                    style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      document.querySelectorAll('.final-stage-checkbox').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
          const questionId = this.getAttribute('data-id');
          const isFinal = this.checked ? 'final' : 'penyisihan';

          fetch(`/questions/${questionId}/update-stage`, {
              method: 'POST',
              headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
              },
              body: JSON.stringify({
                quiz_stage: isFinal
              })
            })
            .then(response => response.json())
            .then(data => {
              if (data.success) {
                alert('Quiz stage updated successfully');
              } else {
                alert('Failed to update quiz stage');
              }
            })
            .catch(error => {
              console.error('Error:', error);
            });
        });
      });
    });
  </script>
@endsection
