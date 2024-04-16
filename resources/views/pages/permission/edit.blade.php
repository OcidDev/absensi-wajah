@extends('layout.dashboard')

@section('content')

<div class="row">
    <div class="col-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
                <div class="d-block w-100 align-items-center justify-content-between mb-9">
                    <div class="mb-3 mb-sm-0">
                        {{-- if error show alerts --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <h5 class="card-title fw-semibold mb-3">Edit Data Penjualan</h5>
                        <form action="{{ route('user.update', $data->id) }}" method="POST" >
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="first_name" class="form-label">Nama Depan</label>
                                <input type="text" name="first_name" class="form-control" value="{{ $data->detail_user->first_name }}"/>
                            </div>

                            <div class="mb-3">
                                <label for="last_name" class="form-label">Nama Belakang</label>
                                <input type="text" name="last_name" class="form-control" value="{{ $data->detail_user->last_name }}"/>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $data->email }}"/>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control"/>
                            </div>

                            <div class="mb-3">
                                <label for="birthday" class="form-label">Tanggal Lahir</label>
                                <input type="date" style="width: 200px !important" name="birthday" class="form-control" value="{{ $data->detail_user->birthday }}"/>
                            </div>

                            <div class="mb-3">
                                <label for="gender" class="form-label">Jenis Kelamin</label>
                                <select class="form-select form-select-lg" name="gender" id="gender" >
                                    <option value="Laki-laki" {{ $data->detail_user->gender == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="Perempuan" {{ $data->detail_user->gender == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" role="button" >Simpan</Button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('before-script')
    <script src="{{ url('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
@endpush
@push('after-script')
    <script src="{{ url('admin/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ url('admin/assets/libs/simplebar/dist/simplebar.js') }}"></script>
@endpush
