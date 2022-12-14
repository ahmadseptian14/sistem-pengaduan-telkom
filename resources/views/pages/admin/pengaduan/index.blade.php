@extends('layouts.admin')

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Pengaduan</h2>
                <p class="dashboard-subtitle">
                    Daftar Pengaduan
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <table
                                        class="table table-hover scroll-horizontal-vertical w-100 table-bordered table-striped"
                                        id="table1">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Tanggal</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($pengaduans as $pengaduan)
                                                <tr>
                                                    <td>{{ $pengaduan->nama }}</td>
                                                    <td>{{ $pengaduan->created_at->format(' d-m-Y - H:i:s') }}</td>
                                                    @if (empty($pengaduan->tanggapan->status_pengaduan))
                                                        <td>Belum di Proses</td>
                                                    @else
                                                        <td>{{ $pengaduan->tanggapan->status_pengaduan }}</td>
                                                    @endif
                                                    <td>
                                                        <a href="{{ route('pengaduan.show', $pengaduan->id) }}"
                                                            class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                                style="margin-right: 5px"></i>Lihat Pengaduan</a>
                                                    @if (Auth::user()->roles == 'TEKNISI')
                                                    <a href="{{ route('sms.create', $pengaduan->id) }}"
                                                        class="btn btn-info btn-sm"><i class="fa fa-message"
                                                            style="margin-right: 5px"></i>Kirim Pesan</a>
                                                    @endif
                                                       
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="7" class="text-center">Tidak Ada Pengaduan</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-scripts')
    <script>
        $(document).ready(function() {
            $('#table1').DataTable({
                "order": [
                    [3, "desc"]
                ]
            });
        });
    </script>
@endpush
