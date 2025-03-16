@extends('template.dashboard.main')

@section('content')
  <div class="container mt-5">
    <div class="card">
      <h2 class="card-header">Terimakasih, Pejuang!</h2>
      <div class="card-body">
        <p>Silakan menunggu pengumuman untuk melihat hasil selengkapnya!</p>
      </div>

      {{-- <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th class="text-center">Rank</th>
              <th>Peserta</th>
            </tr>
          </thead>
          <tbody>
            @php $count = 1 @endphp
            @foreach ($results as $result)
              <tr>
                <td class="text-center">{{ $count++ }}</td>
                <td>
                  {{ $result->user->name }} <br>
                  Skor: {{ $result->correct_answers }} <br>
                  Waktu: {{ gmdate('H:i:s', $result->total_time) }} <br>
                  <a href="{{ route('quiz.details', $result->user_id) }}"
                    class="btn btn-outline-danger btn-sm mt-2">Detail</a>
                </td>
              </tr>
            @endforeach
          </tbody>
          <tfoot class="table-border-bottom-0">
            <tr>
              <th>Rank</th>
              <th>Peserta</th>
            </tr>
          </tfoot>
        </table>
      </div> --}}
    </div>
  </div>
@endsection

@section('js')
  <script></script>
@endsection
