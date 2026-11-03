
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Produk</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Memanggil menu.php -->
            <?php include 'menu.php'; ?>
            <!-- Konten di sebelah kanan menu -->
            <main class="col-md-10 p-4">
                <h3 class="mb-4">Form Produk</h3>
                <form action="prosesinputdata.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nama  Barang </label>
                        <input type="text" name="nama" class="form-control"
                               placeholder="Masukkan nama" required >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="number" name="harga" class="form-control"
                               placeholder="Masukkan produk" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Stok</label>
                        <input type="number" name="stok" class="form-control"
                               placeholder="Masukkan produk" required>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </form>
            </main>
        </div>
    </div>
</body>
</html>
