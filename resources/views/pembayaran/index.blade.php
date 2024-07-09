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
                    <h3 class="card-title">Pembayaran</h3>

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
                <a href="{{ route('pembayarans.create') }}" class="btn btn-success">Tambah Pembayaran</a>
                    <h1 class="my-4">Daftar Pembayaran</h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tanggal</th>
                                <th>Jumlah Bayar</th>
                                <th>Peminjaman id</th>
    
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_pembayaran as $pembayaran)
                                <tr>
                                    <td>{{ $pembayaran->id }}</td>
                                    <td>{{ $pembayaran->tanggal }}</td>
                                    <td>{{ $pembayaran->jumlah_bayar }}</td>
                                    <td>{{ $pembayaran->peminjaman_id }}</td>
                                    <td>
                                    <a href="{{ route('pembayarans.show', $pembayaran->id) }}" class="btn btn-info btn-sm">Read</a>
                                    <a href="{{ route('pembayarans.edit', $pembayaran->id) }}" class="btn btn-warning btn-sm">Update</a>
                                    <form action="{{ route('pembayarans.destroy', $pembayaran->id) }}" method="POST" style="display: inline;">
                                     @csrf
                                     @method('DELETE')
                                     <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this pembayaran?')">Delete</button>
                                     </form>
                                    </td>
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
