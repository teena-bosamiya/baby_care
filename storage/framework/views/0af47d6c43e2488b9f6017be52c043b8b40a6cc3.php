<!--/footer-->
<footer class="w3l-footer-29-main">
    <div class="footer-29-w3l py-2">
            <!-- copyright -->
            <div class="w3l-copyright text-center mt-lg-2 mt-sm-4 pt-md-4 pt-3">
                <p class="copy-footer-29" style="margin-bottom: 30px;">Developed By : Veenchhee Teena</p>
            </div>
    </div>
</footer>
<!-- //footer -->

<!-- Js scripts -->
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fas fa-long-arrow-alt-up" aria-hidden="true"></span>
</button>
<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

</script>
<!-- //move top -->

<!-- Template JavaScript -->
<script src="<?php echo e(url('frontend/js/jquery-3.3.1.min.js')); ?>"></script>
<script src="<?php echo e(url('frontend/js/theme-change.js')); ?> "></script>
<script src="<?php echo e(url('frontend/js/circles.js')); ?>"></script>

<!-- MENU-JS -->
<script>
    $(window).on("scroll", function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function() {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function() {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });

</script>
<!-- //MENU-JS -->

<!-- disable body scroll which navbar is in active -->
<script>
    $(function() {
        $('.navbar-toggler').click(function() {
            $('body').toggleClass('noscroll');
        })
    });

</script>
<!-- //disable body scroll which navbar is in active -->
<!-- //bootstrap -->
<script src="<?php echo e(url('frontend/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(url('frontend/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(url('frontend/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(url('frontend/js/bootstrap_cart.min.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\baby_care\resources\views/frontend/layouts/footer.blade.php ENDPATH**/ ?>