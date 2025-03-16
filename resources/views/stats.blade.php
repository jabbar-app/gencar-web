@extends('template.blank')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12 col-xl-12 col-sm-12 order-1 order-lg-2 mb-4 mb-lg-0">
        <img src="{{ asset('assets/img/logo_gencar.png') }}" alt="Generasi Cakrawala" style="height: 64px;" class="mt-5 mb-3">
        <div class="d-flex justify-content-between align-items-center my-3">
          <h4 class="text-danger">
            Statistik Pendaftar
          </h4>
          <a href="#" class="btn btn-md btn-danger mb-2 float-end">Export ke Excel</a>
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
