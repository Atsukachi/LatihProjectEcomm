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
                        <?php foreach ($produk as $pro) : ?>
                            <!-- form start -->
                            <?php echo form_open('mitra/data/produk/update'); ?>
                            <form role="form" enctype="multipart/form-data">
                                <div class="card-body">
                                    <input type="hidden" class="form-control" name="id_produk" value="<?php echo $pro->id_produk ?>">
                                    <div class="form-group">
                                        <label for="nama_produk">Nama Produk</label>
                                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Nama Produk" value="<?php echo $pro->nama_produk ?>">
                                        <?php echo form_error('nama_produk', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" rows="12" placeholder="Deskripsi"><?php echo $pro->deskripsi ?></textarea>
                                        <?php echo form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga Produk</label>
                                        <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga Produk" value="<?php echo $pro->harga_produk ?>">
                                        <?php echo form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <input type="hidden" class="form-control" id="harga" name="id_mitra" value="<?php echo $pro->id_mitra ?>">
                                    <div class="form-group">
                                        <label for="gambar">Gambar</label><br>
                                        <img src="<?php echo base_url(); ?>assets/gambar/images/<?php echo $pro->gambar ?>" width="200" height="200">

                                        <div class="input-group">
                                            <div class="custom-file"> <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                                <label class="custom-file-label" for="gambar" placeholder="Choose file...">Choose file</label>
                                                <?php echo form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" form-group">
                                        <label for="kategori">Kategori</label>
                                        <select class="form-control" placeholder="Kategori" id="kategori" name="kategori">
                                            <option value="<?php echo $pro->kategori ?>"><?php echo $pro->kategori ?></option>
                                            <?php
                                            foreach ($getkatall as $k) :
                                            ?>
                                                <option value="<?php echo $k->id_kategori ?>"><?php echo $k->id_kategori ?></option>
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
                            <?php echo form_close(); ?>
                        <?php endforeach; ?>
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