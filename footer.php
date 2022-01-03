<footer class="footer">
    <div class="container">
        <div class="row">
        <div class="col-md-3 col-sm-12 col-12">
            <?php dynamic_sidebar('footer-first');?>
        </div>

        <div class="col-md-3 col-sm-12 col-12">
            <?php dynamic_sidebar('footer-secound');?>
        </div>

        <div class="col-md-3 col-sm-12 col-12">
            <?php dynamic_sidebar('footer-third');?>
        </div>

        <div class="col-md-3 col-sm-12 col-12">
            <?php dynamic_sidebar('footer-fourth');?>
        </div>
        </div>
        <!-- end row -->
    </div>
    <?php dynamic_sidebar('footer-copyright');?>
<!--============Back To Top===========-->
  <a id="button" class="backtotop"> <i class="fas fa-angle-up fa-2x"></i> </a>
</footer>

<?php wp_footer(); ?>
</body>

</html>