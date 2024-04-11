@extends('layout.dashboard')

@section('content')

<div class="row">
    <div class="col-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
                <div class="d-block w-100 align-items-center justify-content-between mb-9">
                    <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold mb-3">Data User</h5>
                            <a class="btn btn-md mb-3 btn-primary" href="{{ route('user.create') }}" role="button">Tambah Data Baru</a>


                        <div class="table-responsive">
                            <table id="example" class="table table-striped text-nowrap mb-0 align-middle" style="width:100%">
                                {{-- table laporan bulanan per user --}}
                                <thead>
                                    <tr>
                                        <th rowspan="2">Nama User</th>
                                    </tr>
                                    <tr>
                                        @php
                                            $total_days = date('t');
                                        @endphp
                                        <th colspan="{{ $total_days }}">Tanggal</th>
                                    </tr>
                                    <tr>
                                        <?php for ($day = 1; $day <= date('t'); $day++) : ?>
                                            <th><?php echo $day; ?></th>
                                        <?php endfor; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- foreach --}}
                                    @foreach ($data as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <?php for ($day = 1; $day <= date('t'); $day++) : ?>
                                                <td>Absen</td>
                                            <?php endfor; ?>
                                        </tr>
                                    @endforeach
                                    {{-- end foreach--}}

                                </tbody>
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
