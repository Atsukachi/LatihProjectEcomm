<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md">
                    <h1>Data</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Data</li>
                        <li class="breadcrumb-item active">Produk</li>
                    </ol>
                </div>
                <?php // Cetak jika ada notifikasi
                if ($this->session->flashdata('sukses')) {
                    echo '<div class="alert alert-primary" role="alert">' . $this->session->flashdata('sukses') .
                        '<span class="closebtn">&times;</span></div>';
                } ?>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Produk</h3>
                            <br>
                            <a href="<?php echo base_url('board/data/produk/tambah') ?>"><span class="badge badge-primary">Tambah</span></a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Produk</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th>Gambar</th>
                                        <th>Kategori</th>
                                        <th style="width: 9%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($produk as $p) {
                                    ?>
                                        <tr>
                                            <td><?php echo $p->id_produk ?></td>
                                            <td><?php echo $p->nama_produk ?></td>
                                            <td><?php echo $p->deskripsi ?></td>
                                            <td>Rp<?php echo number_format($p->harga_produk, 0, ",", "."); ?></td>
                                            <td><img class="img-thumbnail" src="<?php echo base_url(); ?>assets/gambar/images/<?php echo $p->foto ?>"></td>
                                            <td>
                                                <?php
                                                if ($p->kategori == '1') {
                                                    echo "Oli";
                                                } elseif ($p->kategori == '2') {
                                                    echo "Smartphone";
                                                } elseif ($p->kategori == '3') {
                                                    echo "Mainan";
                                                } elseif ($p->kategori == '4') {
                                                    echo "Sepatu";
                                                } else {
                                                    echo "-";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url('board/data/produk/edit/' . $p->id_produk) ?>"><span class=" badge badge-success">Edit</span></a>
                                                <a href="<?php echo base_url('board/data/produk/delete/' . $p->id_produk) ?>"><span class="badge badge-danger">Delete</span></a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->