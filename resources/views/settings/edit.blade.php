@extends('template.dashboard.main')

@section('content')
  <div class="container mt-5">
    <div class="card">
      <div class="card-header text-center">
        <h4>Edit Setting</h4>
      </div>
      <div class="card-body">
        @if (session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        @endif

        <form method="POST" action="{{ route('settings.update') }}">
          @csrf

          <div class="form-group mb-3">
            <label for="next_button">Next Button Status</label>
            <select name="next_button" id="next_button" class="form-control">
              <option value="1" {{ $setting->next_button ? 'selected' : '' }}>True</option>
              <option value="0" {{ !$setting->next_button ? 'selected' : '' }}>False</option>
            </select>
          </div>

          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
@endsection
