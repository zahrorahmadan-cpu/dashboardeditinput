       <main class="col-12 col-md-10">
            <div class="container py-4">
                <h2 class="fw-bold">Produk</h2>
                <h4 class="mt-4 mb-3">Data Produk</h4>
                <!-- TABEL PRODUK -->
                 <a href="inputdata.php" class="btn btn-primary mb-4
                 ">Input Data</a>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered bg-white align-middle">
                        <thead class="table-primary">
                            <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead> 
                        <tbody>
                            <?php
                            include 'koneksi.php';
                            $query = mysqli_query($dbconnect,"SELECT * FROM produk");
                            $no=1;
                            while($tampil = mysqli_fetch_assoc($query)){
                            ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $tampil['id']; ?></td>
                            <td><?= $tampil['nama_barang']; ?></td>
                            <td>Rp. <?= $tampil['harga']; ?></td>
                            <td><?= $tampil['stok']; ?></td>
                            <td>
                                <a onclick="return confirm('Apakah anda yakin ingin menghapus data dengan ID <?= $tampil['id']; ?>?')" href="proseshapus.php?id=<?= $tampil['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                                <a href="editdata.php?id=<?php echo $tampil['id']?>" class= "btn btn-success btn-sm">Edit</a>
                            </td>
                            <?php
                            }
                            ?>
                        </tr>
                        </tbody>  
                    </table>
                </div>
            </div>
        </main>