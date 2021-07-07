<!-- PRODUCT -->
<?php foreach ($mitra as $m) : ?>
    <div class="col-md-4">
        <form method="post" action="<?php echo base_url(); ?>pesan/form/index" accept-charset="utf-8" id="result">
            <div class="product text-center">
                <div class="mb-3 position-relative">
                    <div class="badge text-white badge"></div>
                    <a class="d-block">
                        <img class="img-fluid" src="<?php echo base_url() . 'assets/gambar/mitra/' . $m->foto_mitra ?>" width="100%">
                    </a>
                    <div class="product-overlay">
                        <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><button type="submit" class="btn btn-sm btn-dark">Order</button></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="<?php echo base_url(); ?>service/page/detail/"><i class="fas fa-expand"></i></a></li>

                        </ul>
                    </div>
                </div>
                <h6><a class="reset-anchor"><?php echo $m->daftar_keahlian ?></a></h6>
                <p class="small text-muted"><?php echo $m->harga_jasa ?></p>
            </div>
        </form>
    </div>
<?php endforeach; ?>

<?php echo $this->pagination->create_links(); ?>