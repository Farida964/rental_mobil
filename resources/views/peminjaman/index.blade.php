@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4" style="font-family: 'Times New Roman';">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 style="font-family: 'Times New Roman';">GoRent's Armada</h1>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Peminjaman</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                <a href="{{ route('peminjamans.create') }}" class="btn btn-success">Tambah Peminjaman</a>
                    <h1 class="my-4">Daftar Peminjaman</h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Peminjam</th>
                                <th>KTP Peminjam</th>
                                <th>Keperluan Pinjaman</th>
                                <th>Mulai</th>
                                <th>Selesai</th>
                                <th>Biaya</th>
                                <th>Komentar Peminjam</th>
                                <th>Status Pinjam</th>
                                <th>Armada id</th>
    
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_peminjaman as $peminjaman)
                                <tr>
                                    <td>{{ $peminjaman->id }}</td>
                                    <td>{{ $peminjaman->nama_peminjam }}</td>
                                    <td>{{ $peminjaman->ktp_peminjam }}</td>
                                    <td>{{ $peminjaman->keperluan_pinjaman }}</td>
                                    <td>{{ $peminjaman->mulai }}</td>
                                    <td>{{ $peminjaman->selesai }}</td>
                                    <td>{{ $peminjaman->biaya }}</td>
                                    <td>{{ $peminjaman->komentar_peminjam }}</td>
                                    <td>{{ $peminjaman->status_pinjam }}</td>
                                    <td>{{ $peminjaman->armada_id }}</td>
                                    <td>
                                    <a href="{{ route('peminjamans.show', $peminjaman->id) }}" class="btn btn-info btn-sm">Read</a>
                                    <a href="{{ route('peminjamans.edit', $peminjaman->id) }}" class="btn btn-warning btn-sm">Update</a>
                                    <form action="{{ route('peminjamans.destroy', $peminjaman->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this peminjaman?')">Delete</button>
                                </form>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('admin.footer')
