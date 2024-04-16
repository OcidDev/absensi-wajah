@extends('layout.dashboard')

@section('content')

<div class="row">
    <div class="col-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
                <div class="d-block w-100 align-items-center justify-content-between mb-9">
                    <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold mb-3">Data Permission User</h5>
                            <a class="btn btn-md mb-3 btn-primary" href="{{ route('permission.create') }}" role="button">Tambah Data Baru</a>


                        <div class="table-responsive">
                            <table id="example" class="table table-striped text-nowrap mb-0 align-middle" style="width:100%">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Nama Lengkap</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Izin</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Status</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Lampiran</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Opsi</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $d)
                                    <tr>
                                        <td class="border-bottom-0">
                                            <p class="fw-semibold">{{ $d->id }}</p>
                                            {{-- <p class="fw-semibold">{{ $d->user->detail_user->first_name . ' ' . $d->user->detail_user->last_name }}</p> --}}
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="fw-semibold">{{ $d->permission }}</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="fw-semibold">{{ $d->status }}</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="fw-semibold"> <img
                                                src="{{ asset('storage/' . $d->lampiran) }}"
                                                class="img-fluid rounded-top" style="width: 50px"
                                                alt=""
                                            />
                                             </p>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">

                                                {{-- accept --}}
                                                <form action="{{ route('permission.accept', $d->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-sm btn-success">Accept</button>
                                                </form>
                                                {{-- Reject --}}
                                                <form action="{{ route('permission.reject', $d->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-sm btn-danger">Reject</button>
                                                </form>
                                                {{-- Destroy --}}
                                                <form action="{{ route('permission.destroy', $d->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                                <tfoot class="text-dark fs-4">
                                    <tr>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Nama Lengkap</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Izin</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Status</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Lampiran</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Opsi</h6>
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('before-script')
    <script src="{{ asset('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
@endpush
@push('after-script')
    <script src="{{ url('admin/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ url('admin/assets/libs/simplebar/dist/simplebar.js') }}"></script>
@endpush
