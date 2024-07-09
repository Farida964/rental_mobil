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
                        <h1>Edit Peminjaman</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Peminjaman</li>
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
                    <h3 class="card-title">Edit Peminjaman</h3>

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
                    <form action="{{ route('peminjamans.update', $peminjaman->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nama_peminjam">Nama Peminjam:</label>
                            <input type="text" name="nama_peminjam" value="{{ $peminjaman->nama_peminjam }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="ktp_peminjam">Ktp Peminjam:</label>
                            <input type="text" name="ktp_peminjam" value="{{ $peminjaman->ktp_peminjam }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="keperluan_pinjaman">Keperluan Pinjaman:</label>
                            <input type="text" name="keperluan_pinjaman" value="{{ $peminjaman->keperluan_pinjaman }}"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="mulai">Mulai:</label>
                            <input type="date" name="mulai" value="{{ $peminjaman->mulai }}"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="selesai">Selesai:</label>
                            <input type="selesai" name="selesai" value="{{ $peminjaman->selesai }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="biaya">biaya:</label>
                            <textarea name="biaya" class="form-control">{{ $peminjaman->biaya }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="komentar_peminjam">Komentar Peminjam:</label>
                            <textarea name="komentar_peminjam" class="form-control">{{ $peminjaman->komentar_peminjam }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="status_pinjam">Status Pinjam:</label>
                            <textarea name="status_pinjam" class="form-control">{{ $peminjaman->status_pinjam }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="armada_id">Armada Id:</label>
                            <textarea name="armada_id" class="form-control">{{ $peminjaman->armada_id }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
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