<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
        }
        .container-fluid {
            padding: 20px;
        }
        .content-wrapper {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .content-header {
            margin-bottom: 20px;
        }
        .breadcrumb {
            background: none;
            padding: 0;
            margin: 0;
            list-style: none;
        }
        .breadcrumb-item a {
            color: #007bff;
            text-decoration: none;
        }
        .breadcrumb-item.active {
            color: #6c757d;
        }
        .card {
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }
        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .card-title {
            margin: 0;
            font-size: 1.25rem;
        }
        .card-body {
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            color: #fff;
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
            border-radius: 4px;
            text-align: center;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Buat Pesanan</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-body">
                    <form id="peminjamanForm" action="{{ route('peminjamans.store') }}" method="POST">
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
                            <input type="text" class="form-control" id="mulai" name="mulai" required>
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
                        <button type="submit" class="btn btn-primary" style="background-color: #50c878;">Submit</button>
                        <button type="button" class="btn btn-primary" id="cancelButton" style="background-color: #ff8080;">Cancel</button>
                    </form>
                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

<script>
    document.getElementById('peminjamanForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Menghentikan pengiriman form standar
        var form = this;
        fetch(form.action, {
            method: form.method,
            body: new FormData(form),
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            }
        }).then(response => {
            if (response.ok) {
                window.location.href = '/frontend'; // Ganti dengan URL halaman admin Anda
            } else {
                alert('Terjadi kesalahan saat mengirimkan data.');
            }
        }).catch(error => {
            console.error('Error:', error);
            alert('Terjadi kesalahan saat mengirimkan data.');
        });
    });

    document.getElementById('cancelButton').addEventListener('click', function() {
    window.location.href = '/frontend'; // Ganti dengan URL halaman frontend Anda
});
</script>
</body>
</html>
