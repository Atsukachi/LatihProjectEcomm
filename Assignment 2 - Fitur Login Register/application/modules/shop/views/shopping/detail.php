<section class="py-5">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-6">
        <!-- PRODUCT SLIDER-->
        <div class="row m-sm-0">
          <div class="col-sm-10 order-1 order-sm-2">
            <div class="owl-carousel product-slider">
              <a class="d-block" href="<?php echo base_url('assets/gambar/images/' . $produk['gambar']); ?>" data-lightbox="product" title="Product Item">
                <img class="img-fluid" src="<?php echo base_url('assets/gambar/images/' . $produk['gambar']); ?>" alt="...">
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- PRODUCT DETAILS-->
      <div class="col-lg-6">
        <h1><?php echo $produk['nama_produk']; ?></h1>
        <p class="text-muted lead">Rp. <?php echo number_format($produk['harga'], 0, ",", "."); ?></p>
        <p class="text-small mb-4"><br></p>
        <div class="row align-items-stretch mb-4">
          <div class="col-sm-5 pr-sm-0">
            <div class="border d-flex align-items-center justify-content-between py-1 px-3 bg-white border-white"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
              <div class="quantity">
                <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
              </div>
            </div>
          </div>
          <div class="col-sm-3 pl-sm-0"><a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="#">Add to cart</a></div>
        </div>
        <ul class="list-unstyled small d-inline-block">
          <li class="px-3 py-2 mb-1 bg-white text-muted"><strong class="text-uppercase text-dark">Category:</strong><a class="reset-anchor ml-2" href="#"><?php echo $produk['kategori']; ?></a></li>
        </ul>
      </div>
    </div>
    <!-- DETAILS TABS-->
    <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
      <li class="nav-item"><a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a></li>
    </ul>
    <div class="tab-content mb-5" id="myTabContent">
      <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
        <div class="p-4 p-lg-5 bg-white">
          <h6 class="text-uppercase">Product description </h6>
          <p class="text-muted text-small mb-0"><?php echo $produk['deskripsi']; ?></p>
        </div>
      </div>
    </div>
  </div>
</section>