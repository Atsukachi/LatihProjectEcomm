<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Data</li>
                        <li class="breadcrumb-item active">Pengguna</li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Pengguna</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php echo form_open('board/data/user/edit'); ?>
                        <?php foreach ($edit_user as $edit) : ?>
                            <form role="form" enctype="multipart/form-data">
                                <div class="card-body">
                                    <input type="hidden" class="form-control" id="inputName" name="id_user" value="<?php echo $edit->id_user ?>">
                                    <div class="form-group">
                                        <label for="inputName">Fullname</label>
                                        <input type="text" class="form-control" id="inputName" name="nama" placeholder="Fullname" value="<?php echo $edit->nama ?>">
                                        <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUsername">Username</label>
                                        <input type="text" class="form-control" id="inputUsername" name="username" placeholder="Username" value="<?php echo $edit->username ?>">
                                        <?php echo form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">Email address</label>
                                        <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Email address" value="<?php echo $edit->email ?>">
                                        <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword">Password</label>
                                        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" value="<?php echo $edit->password ?>">
                                        <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword">Password Configuration</label>
                                        <input type="password" class="form-control" id="inputPassword_conf" name="password_conf" placeholder="Password Configuration" value="<?php echo $edit->password ?>">
                                        <?php echo form_error('password_conf', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputJenis">Jenis</label>
                                        <select class="form-control" id="inputJenis" name="jenis" placeholder="Jenis">
                                            <option value="<?php echo $edit->jenis ?>">
                                                <?php if ($edit->jenis == '1') {
                                                    echo "Admin"; ?>
                                            <option value="2">Member</option>
                                        <?php } elseif ($edit->jenis == '2') {
                                                    echo "Member"; ?>
                                            <option value="1">Admin</option>
                                        <?php } else {
                                                    echo "Tidak Diketahui"; ?>
                                        <?php } ?></option>
                                        </select>
                                        <?php echo form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" name="btnSubmit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        <?php endforeach; ?>
                        <?php echo form_close(); ?>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->