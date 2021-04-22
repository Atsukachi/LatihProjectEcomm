<script src="<?php echo base_url('assets/ckeditor/ckeditor.js') ?>"></script>
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
                        <li class="breadcrumb-item">Produk</li>
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
                <div class="col-md-8">
                    <!-- general form elements -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Produk</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php echo form_open('board/data/produk/edit_produk'); ?>
                        <?php foreach ($produk as $p) : ?>
                            <form role="form" enctype="multipart/form-data">
                                <div class="card-body">
                                    <input type="hidden" class="form-control" id="inputName" name="id_produk" value="<?php echo $p->id_produk ?>">
                                    <div class="form-group">
                                        <label for="nama_produk">Nama Produk</label>
                                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Nama Produk" value="<?php echo $p->nama_produk ?>">
                                        <?php echo form_error('nama_produk', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class=" form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" rows="12" placeholder="Deskripsi"><?php echo $p->deskripsi ?></textarea>
                                        <?php echo form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga Produk</label>
                                        <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga Produk" value="<?php echo $p->harga ?>">
                                        <?php echo form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="gambar">Gambar</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                                <label class="custom-file-label" for="gambar" placeholder="Choose file...">Choose file</label>
                                                <?php echo form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" form-group">
                                        <label for="kategori">Kategori</label>
                                        <select class="form-control" placeholder="Kategori" id="kategori" name="kategori">
                                            <option value="<?php echo $p->kategori ?>">Pilih Kategori Produk</option>
                                            <?php
                                            foreach ($id as $kat) :
                                            ?>
                                                <option value="<?php echo $kat->id ?>"><?php echo $kat->nama_kategori ?></option>
                                            <?php
                                            endforeach;
                                            ?>
                                        </select>
                                        <?php echo form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
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
<script>
    CKEDITOR.replace('deskripsi');
</script>