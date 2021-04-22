<body>
    <div class="page-holder">
        <!-- navbar-->
        <header class="header bg-white">
            <div class="container px-0 px-lg-3">
                <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="<?php echo base_url('shop/page') ?>"><span class="font-weight-bold text-uppercase text-dark">Tama.id</span></a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('shop/page') ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('shop/shopping') ?>">Product</a>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Feature</a>
                                <div class="dropdown-menu mt-3" aria-labelledby="pagesDropdown">
                                    <a class="dropdown-item border-0 transition-link" href="#">About</a>
                                    <a class="dropdown-item border-0 transition-link" href="#">Guide</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <?php
                            if (!$this->session->userdata('username')) {
                            ?>
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('shop/shopping/cart') ?>"> <i class="fas fa-dolly-flatbed mr-1 text-gray"></i>&ensp;Cart<small class="text-gray"> (<?php echo count($this->cart->contents()); ?>)</small></a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('auth/login') ?>"> <i class="fas fa-sign-in-alt mr-1 text-gray"></i>&ensp;Login</a></li>
                            <?php
                            } else {
                            ?>
                                <li class="nav-item"><a class="nav-link" href="#"> <i class="fas fa-user-alt mr-1 text-gray"></i>&ensp;Hai, <?php echo ucfirst($this->session->userdata('username')); ?> !</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('shop/shopping/cart') ?>"> <i class="fas fa-dolly-flatbed mr-1 text-gray"></i>&ensp;Cart<small class="text-gray"> (<?php echo count($this->cart->contents()); ?>)</small></a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('auth/login/logout') ?>"> <i class="fas fa-sign-out-alt mr-1 text-gray"></i>&ensp;Logout</a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>