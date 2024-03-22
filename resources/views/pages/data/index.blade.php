@extends('layout.dashboard')

@section('content')

<div class="row">
    <div class="col-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
                <div class="d-block w-100 align-items-center justify-content-between mb-9">
                    <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold mb-3">Data Penjualan</h5>
                            <a class="btn btn-md mb-3 btn-primary" href="{{ route('data.create') }}" role="button">Tambah Data Baru</a>

                            <form action="{{ route('data.import') }}" method="POST" style="width: 300px !important" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="mb-3" >
                                    <label for="importFile" class="form-label">Import File</label>
                                    <input type="file" class="form-control"  id="importFile" name="importFile" required>
                                </div>
                                <button type="submit" class="btn btn-md mb-3 ms-2 btn-success">Import Data</button>
                            </form>

                        <div class="table-responsive">
                            <table id="example" class="table table-striped text-nowrap mb-0 align-middle" style="width:100%">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">ID Transaksi</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Nama Produk</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Total Harga</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Tanggal</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Status</h6>
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
                                                <a href="{{ route('data.edit', $d->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <form action="{{ route('data.destroy', $d->id) }}" method="POST">
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
                                            <h6 class="fw-semibold mb-0">ID Transaksi</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Nama Produk</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Total Harga</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Tanggal</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Status</h6>
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
    <script src="admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
@endpush
@push('after-script')
    <script src="admin/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="admin/assets/libs/simplebar/dist/simplebar.js"></script>
@endpush
