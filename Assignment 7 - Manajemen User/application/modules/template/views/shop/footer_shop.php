<footer class="bg-dark text-white">
    <div class="container py-4">
        <div class="row py-5">
            <div class="col-md-4 mb-3 mb-md-0">
                <h6 class="text-uppercase mb-3">Customer services</h6>
                <ul class="list-unstyled mb-0">
                    <li><a class="footer-link" href="#">Help &amp; Contact Us</a></li>
                    <li><a class="footer-link" href="#">Returns &amp; Refunds</a></li>
                    <li><a class="footer-link" href="#">Online Stores</a></li>
                    <li><a class="footer-link" href="#">Terms &amp; Conditions</a></li>
                </ul>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <h6 class="text-uppercase mb-3">Company</h6>
                <ul class="list-unstyled mb-0">
                    <li><a class="footer-link" href="#">What We Do</a></li>
                    <li><a class="footer-link" href="#">Available Services</a></li>
                    <li><a class="footer-link" href="#">Latest Posts</a></li>
                    <li><a class="footer-link" href="#">FAQs</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h6 class="text-uppercase mb-3">Social media</h6>
                <ul class="list-unstyled mb-0">
                    <li><a class="footer-link" href="#">Twitter</a></li>
                    <li><a class="footer-link" href="#">Instagram</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- JavaScript files-->
<script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?php echo base_url('assets/lightbox2/js/lightbox.min.js') ?>"></script>
<script src="<?php echo base_url('assets/nouislider/nouislider.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap-select/js/bootstrap-select.min.js') ?>"></script>
<script src="<?php echo base_url('assets/owl.carousel2/js/owl.carousel.min.js') ?>"></script>
<script src="<?php echo base_url('assets/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js') ?>"></script>
<script src="<?php echo base_url('assets/boutique/js/front.js') ?>"></script>
<script src="<?php echo base_url('assets/sweetalert2/sweetalert2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/ajax/jquery.js') ?>"></script>

<script>
    // ------------------------------------------------------- //
    //   Inject SVG Sprite - 
    //   see more here 
    //   https://css-tricks.com/ajaxing-svg-sprite/
    // ------------------------------------------------------ //
    function injectSvgSprite(path) {

        var ajax = new XMLHttpRequest();
        ajax.open("GET", path, true);
        ajax.send();
        ajax.onload = function(e) {
            var div = document.createElement("div");
            div.className = 'd-none';
            div.innerHTML = ajax.responseText;
            document.body.insertBefore(div, document.body.childNodes[0]);
        }
    }
    // this is set to BootstrapTemple website as you cannot 
    // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
    // while using file:// protocol
    // pls don't forget to change to your domain :)
    injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
</script>
<script>
    // Swal.fire({
    //     icon: 'error',
    //     title: 'Oops...',
    //     text: 'Something went wrong!',
    //     footer: '<a href>Why do I have this issue?</a>'
    // })
    var $flashData = $('.flash-data').data('flashdata');
    if ($flashData) {
        Swal.fire({
            icon: 'success',
            title: 'Sukses',
            text: 'Berhasil ' + $flashData,
        })
    }
</script>
<script>
    var search = document.getElementById('search_text');
    var container = document.getElementById('container');

    search.addEventListener('keyup', function() {

        //buat objek ajax
        var xhr = new XMLHttpRequest();

        //cek kesiapan ajax
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                container.innerHTML = xhr.responseText;
            }
        }
        //eksekusi ajax
        xhr.open('GET', '<?php echo base_url("service/page/cari") ?>?search=' + search.value, true);
        xhr.send();
    });
</script>



<script>
    $(document).ready(function() {
        $('#kota').change(function() {
            var id = $(this).val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('pesan/form/kecamatan'); ?>",
                data: {
                    id: id
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<option value="'+data[i].id_kec+'">' + data[i].nama_kec + '</option>';
                    }
                    $('#kecamatan').html(html);
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    // Ketika ada error          
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                    // Munculkan alert error        

                }
            });
        });
    });
</script>
<!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</div>
</body>

</html>