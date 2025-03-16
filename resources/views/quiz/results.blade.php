@extends('template.dashboard.main')

@section('content')
  <div class="container mt-5">
    <div class="card my-lg-4">
      <h5 class="card-header d-flex justify-content-between align-items-center">
        Peringkat Klasemen Akhir
        <a href="{{ route('results.export', $stage) }}" class="btn btn-success">Export to Excel</a>
      </h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th class="text-center">Rank</th>
              <th>Peserta</th>
              <th class="text-center">Skor</th>
              <th class="text-center">Waktu</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @php $count = 1 @endphp
            @foreach ($results as $result)
              <tr>
                <td class="text-center">{{ $count++ }}</td>
                <td>{{ $result->user->name }}</td>
                <td class="text-center">{{ $result->correct_answers }}</td>
                <td class="text-center">{{ gmdate('H:i:s', $result->total_time) }}</td>
                <td class="text-center">
                  <a href="{{ route('quiz.details', $result->user_id) }}" class="btn btn-outline-danger btn-sm">Detail</a>
                </td>
              </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th class="text-center">Rank</th>
              <th>Peserta</th>
              <th class="text-center">Skor</th>
              <th class="text-center">Waktu</th>
              <th class="text-center">Aksi</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
@endsection
