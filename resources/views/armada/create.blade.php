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
                        <h1>Create New Armada</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Create New Armada</li>
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
                    <h3 class="card-title">Create Armada</h3>

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
                    <form action="{{ route('armadas.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="merek">Merek:</label>
                            <input type="text" class="form-control" id="merek" name="merek" required>
                        </div>
                        <div class="form-group">
                            <label for="nopol">Nopol:</label>
                            <input type="text" class="form-control" id="nopol" name="nopol" required>
                        </div>
                        <div class="form-group">
                            <label for="thn_beli">Tahun Beli:</label>
                            <input type="date" class="form-control" id="thn_beli" name="thn_beli" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi:</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                        </div>
                        <div class="form-group">
                            <label for="kapasitas_kursi">Kapasitas Kursi:</label>
                            <input type="number" class="form-control" id="kapasitas_kursi" name="kapasitas_kursi" required>
                        </div>
                        <div class="form-group">
                            <label for="rating">Rating:</label>
                            <input type="rating" class="form-control" id="rating" name="rating" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis_id">Jenis Id:</label>
                            <input type="number" class="form-control" id="jenis_id" name="jenis_id" required>
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