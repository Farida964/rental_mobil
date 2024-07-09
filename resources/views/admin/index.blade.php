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
                        <h1 style="font-family: 'Times New Roman';">GoRent's Dashboard</h1>
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
                    <h3 class="card-title">Selamat Datang di GoRent's!</h3>

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
                Platform Penyewaan Mobil Terpercaya Anda
                Di GoRent's, kami memahami kebutuhan Anda akan kendaraan yang nyaman, aman, dan handal. 
                Dengan berbagai pilihan mobil yang tersedia, kami siap membantu Anda menemukan kendaraan yang tepat untuk setiap 
                kesempatan, baik itu perjalanan bisnis, liburan keluarga, atau keperluan pribadi lainnya.
                </div>
                <!-- /.card-body -->
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('admin.footer')
