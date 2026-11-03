
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php include 'menu.php'; ?>

            <main class="col-md-10 p-4">
                <h3 class="mb-4">INPUT DATA ORDERS</h3>

                <?php
                include 'pages/koneksiorders.php';
                $query = mysqli_query($dbconnect, "SELECT * FROM produk");
                ?>

                <form action="prosesinputdataorders.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">ID Produk</label>
                        <select name="id_produk" class="form-select" required>
                            <option value="">Pilih Produk</option>
                            <?php
                            while ($tampil = mysqli_fetch_assoc($query)) {
                            ?>
                                <option value="<?= $tampil['id']; ?>">
                                    <?= $tampil['id']; ?> - <?= $tampil['nama_barang']; ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="number" name="harga" class="form-control"
                               placeholder="Masukkan harga order" min="0" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Date</label>
                        <input type="date" name="date" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </main>
        </div>
    </div>
</body>
</html>
