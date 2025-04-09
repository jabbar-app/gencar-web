@extends('template.blank')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12 col-xl-12 col-sm-12 order-1 order-lg-2 mb-4 mb-lg-0">
        <div class="row mt-5 mb-4">
          <div class="col-md-6">
            <img src="{{ asset('assets/img/logo_gencar.png') }}" alt="Generasi Cakrawala" style="height: 64px;" class="mb-2">
          </div>
          <div class="col-md-6">
            <div class="card h-auto">
              <div class="card-body d-flex justify-content-between align-items-center">
                <div class="card-title mb-0">
                  <h3 class="mb-1 me-2">{{ number_format($users->count()) }}</h3>
                  <p class="mb-0">Total Pendaftar</p>
                </div>
                <div class="card-icon">
                  <span class="badge bg-label-danger rounded p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="icon icon-tabler icons-tabler-outline icon-tabler-user-square-rounded">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M12 13a3 3 0 1 0 0 -6a3 3 0 0 0 0 6z" />
                      <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
                      <path d="M6 20.05v-.05a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v.05" />
                    </svg>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-between align-items-center my-3">
          <h4 class="text-danger">
            Statistik Pendaftar
          </h4>
          <a href="{{ route('users.export') }}" class="btn btn-md btn-danger mb-2 float-end">Export ke Excel</a>
        </div>
        <div class="card">
          <div class="card-datatable table-responsive">
            <table id="usersTable" class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Calon Peserta</th>
                  <th>HP</th>
                  <th>Email</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          <i class="ti ti-dots-vertical"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a href="{{ route('users.show', $user) }}" class="dropdown-item waves-effect">
                            <i class="ti ti-file-dots ti-sm me-1"></i> View
                          </a>
                          <a href="{{ route('users.edit', $user) }}" class="dropdown-item waves-effect">
                            <i class="ti ti-pencil me-1"></i> Edit
                          </a>
                          <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="dropdown-item waves-effect text-danger"
                              onclick="return confirm('Are you sure?');">
                              <i class="ti ti-trash me-1"></i> Delete
                            </button>
                          </form>
                        </div>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  <script>
    $(document).ready(function() {
      $('#usersTable').DataTable();
    });
  </script>
@endpush
