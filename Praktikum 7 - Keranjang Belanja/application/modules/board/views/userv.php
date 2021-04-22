<!-- NOTIFICATION -->
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
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
                        <li class="breadcrumb-item active">Pengguna</li>
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
                            <h3 class="card-title">Tabel Pengguna</h3>
                            <br>
                            <a href="<?php echo base_url('board/data/user/tambah') ?>"><span class="badge badge-primary">Tambah</span></a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Jenis</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($users as $u) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $u->nama ?></td>
                                            <td><?php echo $u->username ?></td>
                                            <td><?php echo $u->email ?></td>
                                            <td><?php echo $u->password ?></td>
                                            <td>
                                                <?php
                                                if ($u->jenis == '2') {
                                                    echo "Member";
                                                } else {
                                                    echo "Admin";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url('board/data/user/edit_user/' . $u->id_user) ?>"><span class="badge badge-success">Edit</span></a>
                                                <a class="tombol-hapus" href="<?php echo base_url('board/data/user/delete_user/' . $u->id_user) ?>"><span class="badge badge-danger">Delete</span></a>
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