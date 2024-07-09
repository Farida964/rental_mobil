@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail Peminjaman</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Detail Peminjaman</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Peminjaman</h3>

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
                    <div class="form-group">
                        <label for="nama_peminjam">Nama Peminjam:</label>
                        <p>{{ $peminjaman->nama_peminjam }}</p>
                    </div>
                    <div class="form-group">
                        <label for="ktp_peminjam">Ktp Peminjam:</label>
                        <p>{{ $peminjaman->ktp_peminjam }}</p>
                    </div>
                    <div class="form-group">
                        <label for="keperluan_pinjaman">Keperluan Pinjaman:</label>
                        <p>{{ $peminjaman->keperluan_pinjaman }}</p>
                    </div>
                    <div class="form-group">
                        <label for="mulai">Mulai:</label>
                        <p>{{ $peminjaman->mulai }}</p>
                    </div>
                    <div class="form-group">
                        <label for="selesai">selesai:</label>
                        <p>{{ $peminjaman->selesai }}</p>
                    </div>
                    <div class="form-group">
                        <label for="biaya">Biaya:</label>
                        <p>{{ $peminjaman->biaya }}</p>
                    </div>
                    <div class="form-group">
                        <label for="komentar_peminjam">Komentar Peminjam:</label>
                        <p>{{ $peminjaman->komentar_peminjam }}</p>
                    </div>
                    <div class="form-group">
                        <label for="status_pinjam">Status Pinjam:</label>
                        <p>{{ $peminjaman->status_pinjam }}</p>
                    </div>
                    <div class="form-group">
                        <label for="armada_id">Armada Id:</label>
                        <p>{{ $peminjaman->armada_id }}</p>
                    </div>
                    <a href="{{ route('peminjamans.index') }}" class="btn btn-primary">Back</a>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('admin.footer')