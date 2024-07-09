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
                        <h1>Detail Armada</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Detail Armada</li>
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
                    <h3 class="card-title">Detail Armada</h3>

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
                        <label for="merek">Merek:</label>
                        <p>{{ $armada->merek }}</p>
                    </div>
                    <div class="form-group">
                        <label for="nopol">Nopol:</label>
                        <p>{{ $armada->nopol }}</p>
                    </div>
                    <div class="form-group">
                        <label for="thn_beli">Tahun Beli:</label>
                        <p>{{ $armada->thn_beli }}</p>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi:</label>
                        <p>{{ $armada->deskripsi }}</p>
                    </div>
                    <div class="form-group">
                        <label for="kapasitas_kursi">Kapasitas Kursi:</label>
                        <p>{{ $armada->kapasitas_kursi }}</p>
                    </div>
                    <div class="form-group">
                        <label for="rating">Rating:</label>
                        <p>{{ $armada->rating }}</p>
                    </div>
                    <div class="form-group">
                        <label for="jenis_id">Jenis Id:</label>
                        <p>{{ $armada->jenis_id }}</p>
                    </div>
                    <a href="{{ route('armadas.index') }}" class="btn btn-primary">Back</a>
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