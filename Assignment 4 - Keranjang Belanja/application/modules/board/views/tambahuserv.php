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
                        <li class="breadcrumb-item">Pengguna</li>
                        <li class="breadcrumb-item active">Tambah</li>
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
                        <?php echo form_open('board/data/user/tambah'); ?>
                        <form role="form">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Fullname</label>
                                    <input type="text" class="form-control" id="inputName" name="name" placeholder="Fullname" value="<?php echo set_value('name'); ?>">
                                    <?php echo form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="inputUsername">Username</label>
                                    <input type="text" class="form-control" id="inputUsername" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>">
                                    <?php echo form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail">Email address</label>
                                    <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Email address" value="<?php echo set_value('email'); ?>">
                                    <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword">Password</label>
                                    <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>">
                                    <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword">Password Configuration</label>
                                    <input type="password" class="form-control" id="inputPassword_conf" name="password_conf" placeholder="Password Configuration" value="<?php echo set_value('password_conf'); ?>">
                                    <?php echo form_error('password_conf', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" name="btnSubmit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
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