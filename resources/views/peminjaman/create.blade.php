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
                        <h1>Create New Peminjaman</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Create New Peminjaman</li>
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
                    <h3 class="card-title">Create Peminjaman</h3>

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
                    <form action="{{ route('peminjamans.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama_peminjam">Nama Peminjam:</label>
                            <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" required>
                        </div>
                        <div class="form-group">
                            <label for="ktp_peminjam">Ktp Peminjam:</label>
                            <input type="text" class="form-control" id="ktp_peminjam" name="ktp_peminjam" required>
                        </div>
                        <div class="form-group">
                            <label for="keperluan_pinjaman">Keperluan Pinjaman:</label>
                            <input type="text" class="form-control" id="keperluan_pinjaman" name="keperluan_pinjaman" required>
                        </div>
                        <div class="form-group">
                            <label for="mulai">Mulai:</label>
                            <input type="mulai" class="form-control" id="mulai" name="mulai" required>
                        </div>
                        <div class="form-group">
                            <label for="selesai">Selesai:</label>
                            <input type="text" class="form-control" id="selesai" name="selesai" required>
                        </div>
                        <div class="form-group">
                            <label for="biaya">Biaya:</label>
                            <input type="text" class="form-control" id="biaya" name="biaya" required>
                        </div>
                        <div class="form-group">
                            <label for="komentar_peminjam">Komentar Peminjam:</label>
                            <input type="text" class="form-control" id="komentar_peminjam" name="komentar_peminjam" required>
                        </div>
                        <div class="form-group">
                            <label for="status_pinjam">Status Pinjam:</label>
                            <input type="text" class="form-control" id="status_pinjam" name="status_pinjam" required>
                        </div>
                        <div class="form-group">
                            <label for="armada_id">Armada Id:</label>
                            <input type="text" class="form-control" id="armada_id" name="armada_id" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
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