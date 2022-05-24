<?php require "layouts/_header.php" ?>
<div class="row m-0">
    <div class="col-md-5 mx-auto">
        <div class="card mt-3">
            <div class="card-header text-center">
                <h3>Ubah Barang</h3>
            </div>
            <div class="card-body">
                <?php
                include "koneksi.php";

                $id = $_GET['id_barang'];
                $query = "SELECT * FROM tb_barang ";
                $query .= "WHERE id_barang = $id";

                $result = mysqli_query($koneksi, $query);
                $data = mysqli_fetch_array($result);
                ?>
                <form action="proses.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_barang" value="<?= $id ?>">
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <input type="text" name="nama_barang" id="nama_barang" placeholder="Masukan nama barang" class="form-control" value="<?= $data['nama_barang'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="kategori_barang" class="form-label">Kategori Barang</label>
                        <input type="text" name="kategori_barang" id="kategori_barang" placeholder="Masukan kategori barang" class="form-control" value="<?= $data['kategori_barang'] ?>">
                    </div>

                    <label for="harga_beli" class="form-label">Harga Beli</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp.</span>
                        <input type="number" name="harga_beli" id="harga_beli" placeholder="Masukan Harga Beli" class="form-control" value="<?= $data['harga_beli'] ?>">
                    </div>

                    <label for="harga_jual" class="form-label">Harga Jual</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp.</span>
                        <input type="number" name="harga_jual" id="harga_jual" placeholder="Masukan Harga Jual" class="form-control" value="<?= $data['harga_jual'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" name="stok" placeholder="Masukan Stok Barang" value="<?= $data['stok'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" name="gambar_barang" id="gambar" class="form-control form-control-sm" value="<?= $data['gambar_barang'] ?>">
                    </div>

                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                    <button class="btn btn-warning" name="ubah" type="submit">Ubah</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require "layouts/_footer.php" ?>