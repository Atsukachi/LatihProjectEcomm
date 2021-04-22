<!-- SHOP LISTING-->
<div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
  <div class="row mb-3 align-items-center">
  </div>
  <div class="row">
    <!-- PRODUCT-->
    <?php
    foreach ($prodall as $brg) {
    ?>
      <div class="col-lg-4 col-sm-6">
        <form method="post" action="<?php echo base_url(); ?>shop/shopping/tambah" method="post" accept-charset="utf-8">
          <div class="product text-center">
            <div class="mb-3 position-relative">
              <div class="badge text-white badge"></div>
              <a class="d-block">
                <img class="img-fluid w-100" src="<?php echo base_url() . 'assets/gambar/images/' . $brg['gambar']; ?>" alt="...">
              </a>
              <div class="product-overlay">
                <ul class="mb-0 list-inline">
                  <li class="list-inline-item m-0 p-0"><button type="submit" class="btn btn-sm btn-dark">Buy Now !</button></li>
                  <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="<?php echo base_url(); ?>shop/shopping/detail/<?php echo $brg['id_produk']; ?>"><i class="fas fa-expand"></i></a></li>
                </ul>
              </div>
            </div>
            <h6><a class="reset-anchor"><?php echo $brg['nama_produk']; ?></a></h6>
            <p class="small text-muted">Rp. <?php echo number_format($brg['harga'], 0, ",", "."); ?></p>
            <input type="hidden" name="id" value="<?php echo $brg['id_produk']; ?>" />
            <input type="hidden" name="nama" value="<?php echo $brg['nama_produk']; ?>" />
            <input type="hidden" name="harga" value="<?php echo $brg['harga']; ?>" />
            <input type="hidden" name="gambar" value="<?php echo $brg['gambar']; ?>" />
            <input type="hidden" name="qty" value="1" />
          </div>
        </form>
      </div>
    <?php
    }
    ?>
  </div>
</div>
</div>
</div>
</section>
</div>