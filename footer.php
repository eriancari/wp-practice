<!-- Footer -->
<footer>
    <div class="footer-calltoaction text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 overflow-hidden">
                    <p class="sub-title">Join the Course</p>
                    <h2>Bootstrap to Wordpress 2.0</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor nunc, iaculis et vulputate in.</p>
                    <a href="#" class="btn btn-primary">Join now &rarr;</a>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright text-center">
        <p><?php echo wp_kses_post( get_theme_mod( 'footer_copyright', 'Copyright Brightside Studio' ) ); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>