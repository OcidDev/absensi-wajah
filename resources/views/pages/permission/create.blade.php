@extends('layout.dashboard')

@section('content')

<div class="row">
    <div class="col-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
                <div class="d-block w-100 align-items-center justify-content-between mb-9">
                    <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold mb-3">Tambah Data</h5>
                        {{-- if error show alerts --}}
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif
                        <form action="{{ route('permission.store') }}" enctype="multipart/form-data" method="POST" >
                            @csrf
                            @method('POST')
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Nama Lengkap</label>
                                <select class="form-select form-select-lg" name="fullname" id="fullname"  >
                                    @foreach($users as $d)
                                        <option value="{{ $d->id }}">{{ $d->detail_user->first_name . ' ' . $d->detail_user->last_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="permission" class="form-label">Permission</label>
                                <select
                                    class="form-select form-select-lg"
                                    name="permission"
                                    id="permission"
                                >
                                    <option value="Izin">Izin</option>
                                    <option value="Sakit">Sakit</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="lampiran" class="form-label">Lampiran</label>
                                <input
                                    type="file"
                                    class="form-control"
                                    name="lampiran"
                                    id="lampiran"
                                    placeholder=""
                                    aria-describedby="lampiranHelp"
                                />
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
