<main class="col-12 col-md-10">
    <div class="container py-4">
        <h2 class="fw-bold">Orders</h2>
        <h4 class="mt-4 mb-3">Data Orders</h4>
        
        <a href="inputdataorders.php" class="btn btn-primary mb-4">Input Data</a>

        <!-- TABEL ORDERS -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered bg-white align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>ID Order</th>
                        <th>ID Produk</th>
                        <th>Harga</th>
                        <th>Date</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksiorders.php';
                    $query = mysqli_query($dbconnect, "SELECT * FROM orders");
                    $no = 1;
                    while ($tampil = mysqli_fetch_assoc($query)) {
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $tampil['id_order']; ?></td>
                        <td><?= $tampil['id_produk']; ?></td>
                        <td>Rp. <?= $tampil['harga']; ?></td>
                        <td><?= $tampil['date']; ?></td>
                        <td>
                            <a onclick="return confirm('Apakah anda yakin ingin menghapus order dengan ID <?= $tampil['id_order']; ?>?')"
                               href="proseshapusorders.php?id=<?= $tampil['id_order']; ?>"
                               class="btn btn-danger btn-sm">Hapus</a>

                            <a href="editdataorders.php?id=<?= $tampil['id_order']; ?>"
                               class="btn btn-success btn-sm">Edit</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
