@extends('layout.dashboard')

@section('content')
<style>
    .cam-scan {
        width : 60%;
        height: 500px;
        background: #000;
    }
</style>

<div class="col-12 d-block">
    <div class="d-flex justify-content-center">
        <div class="cam-scan">
        </div>
    </div>
</div>

<div class="col-12 mt-5 mb-5">
    <div class="table-responsive">
        <table id="example" class="table table-bordered  table-hover table-striped text-nowrap mb-0 align-middle" style="width:100%">
            <thead class="text-dark fs-4">
                <tr>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">No</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Nama</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Jam absen</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Status</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Keterangan</h6>
                    </th>
                </tr>
            </thead>
            {{-- <tbody>
                @foreach($data as $d)
                <tr>
                    <td class="border-bottom-0">
                        <p class="fw-semibold">{{ $d->id_transaksi }}</p>
                    </td>
                    <td class="border-bottom-0">
                        <p class="fw-semibold">{{ $d->nama_produk }}</p>
                    </td>
                    <td class="border-bottom-0">
                        <p class="fw-semibold">Rp. {{ $d->total_harga }}</p>
                    </td>
                    <td class="border-bottom-0">
                        <p class="fw-semibold">{{ $d->date }}</p>
                    </td>
                    <td class="border-bottom-0">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge {{ $d->status == 'Batal' ? 'bg-danger' : ($d->status == 'Selesai' ? 'bg-success' : '') }} rounded-3 fw-semibold">{{ $d->status }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <a href="{{ route('absensi.edit', $d->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('absensi.destroy', $d->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody> --}}

            <tbody>

                <tr>
                    <td class="border-bottom-0">
                        <p class="fw-semibold">1</p>
                    </td>
                    <td class="border-bottom-0">
                        <p class="fw-semibold">Ocid</p>
                    </td>
                    <td class="border-bottom-0">
                        <p class="fw-semibold"> {{ date('H:i:s') }} </p>
                    </td>
                    <td class="border-bottom-0">
                        <p class="fw-semibold"> <span class="badge text-bg-success"> Masuk </span> </p>
                    </td>
                    <td class="border-bottom-0">
                        <p class="fw-semibold"> - </p>
                    </td>
                </tr>

                <tr>
                    <td class="border-bottom-0">
                        <p class="fw-semibold">2</p>
                    </td>
                    <td class="border-bottom-0">
                        <p class="fw-semibold">Arul</p>
                    </td>
                    <td class="border-bottom-0">
                        <p class="fw-semibold"> {{ date('H:i:s') }} </p>
                    </td>
                    <td class="border-bottom-0">
                        <p class="fw-semibold"> <span class="badge text-bg-danger"> Alfa </span> </p>
                    </td>
                    <td class="border-bottom-0">
                        <p class="fw-semibold"> Mokel di warteg </p>
                    </td>
                </tr>

            </tbody>

            <tfoot class="text-dark fs-4">
                <tr>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">No</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Nama</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Jam absen</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Status</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Keterangan</h6>
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

@endsection
@push('before-script')
    <script src="admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
@endpush
@push('after-script')
    <script src="admin/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="admin/assets/libs/simplebar/dist/simplebar.js"></script>
@endpush
