</div>
<div class=" container footer">
<div class="copyright" >
© <?= date("Y"); ?> Canada Top Education Group Inc. All rights reserved. Designed by <a href="http://www.intellidt.com/" target="_blank"> Intelli Management Group.</a>
</div>
</div>
<script>
$(window).bind("resize", function () {
    console.log($(this).width())
    if ($(this).width() < 768) {
        $('.navbar-nav').removeClass('breadcrumb').addClass('mobile')
    } else {
        $('.navbar-nav').removeClass('mobile').addClass('breadcrumb')
    }
}).trigger('resize');
</script>
</body>
</html>
