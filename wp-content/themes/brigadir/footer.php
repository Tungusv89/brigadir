<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Brigadir
 */

?>
    <footer class="footer">
        <div class="container">
            <div class="footer__wrapper">

            </div>

            <div class="footer__middle">
                <a class="footer__logo logo" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.svg" alt="логотип" />
                </a>
                <div class="footer__divider"></div>
            </div>

            <div class="footer__bottom">
                <div class="footer__copy">
                    © 2000 - 2022 Строительный магазин “Бригадир”
                </div>
                <div class="footer__payment">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/footer-payment.png" alt="payment" />
                </div>


            </div>
        </div>
    </footer>



    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- nouislider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.0/nouislider.min.js"></script>

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Choices JS -->
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Input Mask -->
    <script
        src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js"
        type="text/javascript"
    ></script>

    <!-- Nice Select -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"
        integrity="sha512-NqYds8su6jivy1/WLoW8x1tZMRD7/1ZfhWG/jcRQLOzV1k1rIODCpMgoBnar5QXshKJGV7vi0LXLNXPoFsM5Zg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>

    <!-- Simple Bar -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/simplebar/5.3.9/simplebar.min.js"
        integrity="sha512-xAAb5tNhb12Tx88hMa8IdJI+3pzHBk4V4sQ4w8FIFkXEvlh1PYYma0oPnIENPYeLeblWavY7AlkJj3XzJlif0A=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>

    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/2.2.3/jquery.elevatezoom.min.js"
        integrity="sha512-UH428GPLVbCa8xDVooDWXytY8WASfzVv3kxCvTAFkxD2vPjouf1I3+RJ2QcSckESsb7sI+gv3yhsgw9ZhM7sDw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>

    <!-- fancybox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <!-- JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.min.js"></script>
    <?php wp_footer(); ?>
    </body>
    </html>