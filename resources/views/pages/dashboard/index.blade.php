@extends('layout.dashboard')

@section('content')


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>Selamat Datang di Dashboard</h2>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h4>Total kehadiran</h4>
                <p> 10 orang</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h4>Total ketidakhadiran</h4>
                <p>1 orang</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h4>Total izin</h4>
                <p>1 orang</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h4>Total sakit</h4>
                <p>1 orang</p>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>5 Absensi Terakhir</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="recent-attendance-table">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01-03-2023</td>
                            <td>Bagir</td>
                            <td><span class="badge bg-success">Hadir</span></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>28-02-2023</td>
                            <td>Tresno</td>
                            <td><span class="badge bg-warning">Izin</span></td>
                            <td>Keperluan Keluarga</td>
                        </tr>
                        <tr>
                            <td>27-02-2023</td>
                            <td>Yusuf</td>
                            <td><span class="badge bg-primary">Sakit</span></td>
                            <td>Flu</td>
                        </tr>
                        <tr>
                            <td>26-02-2023</td>
                            <td>Mulyana</td>
                            <td><span class="badge bg-success">Hadir</span></td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>25-02-2023</td>
                            <td>Khusnul</td>
                            <td><span class="badge bg-danger">Ketidakhadiran</span></td>
                            <td>Tanpa Keterangan</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
@push('before-script')
    <script src="{{ asset('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
@endpush
@push('after-script')
    <script src="/admin/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="/admin/assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="/vendor/face-api/script.js"></script>
@endpush
