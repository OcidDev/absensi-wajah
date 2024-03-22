@extends('layout.dashboard')

@section('content')

<div class="row">
    <div class="col-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
                <div class="d-block w-100 align-items-center justify-content-between mb-9">
                    <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold mb-3">Tambah Data Penjualan</h5>
                        <form action="{{ route('data.store') }}" method="POST" >
                            @csrf
                            @method('POST')
                            <div class="mb-3">
                                <label for="id_transaksi" class="form-label">Id Transaksai</label>
                                <input type="text" name="id_transaksi" class="form-control" placeholder="" aria-describedby="helpId" />
                            </div>

                            <div class="mb-3">
                                <label for="nama_produk" class="form-label">Nama Produk</label>
                                <input type="text" name="nama_produk" class="form-control" placeholder="" aria-describedby="helpId" />
                            </div>

                            <div class="mb-3">
                                <label for="total_harga" class="form-label">Total Harga</label>
                                <input type="number" name="total_harga" class="form-control" placeholder="" aria-describedby="helpId" />
                            </div>

                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal Transaksi</label>
                                <input type="datetime-local" style="width: 200px !important" name="tanggal" class="form-control" placeholder="" aria-describedby="helpId" />
                            </div>

                            <div class="mb-3">
                                <label for="stats" class="form-label">Status Transaksi</label>
                                <select
                                    class="form-select form-select-lg" name="status" id="stats" >
                                    <option value="Sukses">Sukses</option>
                                    <option value="Batal">Batal</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" role="button" >Save </Button>
                        </form>
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
