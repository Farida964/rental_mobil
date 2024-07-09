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
                        <h1>Edit Armada</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Armada</li>
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
                    <h3 class="card-title">Edit Armada</h3>

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
                    <form action="{{ route('armadas.update', $armada->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="merek">Merek:</label>
                            <input type="text" name="merek" value="{{ $armada->merek }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="nopol">Nopol:</label>
                            <input type="text" name="nopol" value="{{ $armada->nopol }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="thn_beli">Tahun Beli:</label>
                            <input type="text" name="thn_beli" value="{{ $armada->thn_beli }}"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi:</label>
                            <input type="date" name="deskripsi" value="{{ $armada->deskripsi }}"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="kapasitas_kursi">Kapasitas Kursi:</label>
                            <input type="date" name="kapasitas_kursi" value="{{ $armada->kapasitas_kursi }}"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="rating">Rating:</label>
                            <input type="rating" name="rating" value="{{ $armada->rating }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="jenis_id">Jenis Id:</label>
                            <textarea name="jenis_id" class="form-control">{{ $armada->jenis_id }}</textarea>
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