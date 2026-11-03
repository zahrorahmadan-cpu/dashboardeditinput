
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Orders</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php include 'menu.php'; ?>
            <main class="col-md-10 p-4">
                <h3 class="mb-4">EDIT DATA ORDERS</h3>
                <?php
                include 'pages/koneksiorders.php';
                $id = $_GET['id'];
                $query = mysqli_query($dbconnect, "SELECT * FROM orders WHERE id_order = $id");
                $tampil = mysqli_fetch_assoc($query);

                $queryproduk = mysqli_query($dbconnect, "SELECT * FROM produk");
                ?>
                <form action="proseseditdataorders.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">ID Order</label>
                        <input type="number" name="id_order" class="form-control"
                               value="<?= $tampil['id_order']; ?>" readonly required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">ID Produk</label>
                        <select name="id_produk" class="form-select" required>
                            <?php
                            while ($produk = mysqli_fetch_assoc($queryproduk)) {
                            ?>
                                <option value="<?= $produk['id']; ?>"
                                    <?= ($produk['id'] == $tampil['id_produk']) ? 'selected' : ''; ?>>
                                    <?= $produk['id']; ?> - <?= $produk['nama_barang']; ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="number" name="harga" class="form-control"
                               value="<?= $tampil['harga']; ?>" min="0" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date</label>
                        <input type="date" name="date" class="form-control"
                               value="<?= $tampil['date']; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </main>
        </div>
    </div>
</body>
</html>
