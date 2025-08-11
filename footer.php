<!-- Footer -->
<footer>

    <?php if ( get_theme_mod( 'footer_calltoaction_visibility' ) ) { ?>
    <div class="footer-calltoaction text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 overflow-hidden">
                    <p class="sub-title"><?php echo esc_html( get_theme_mod( 'footer_sub_heading', 'Join the Course' ) ); ?></p>
                    <h2><?php echo esc_html( get_theme_mod( 'footer_calltoaction_heading', 'Bootstrap to Wordpress 2.0' ) ); ?></h2>
                    <p class="fcta-desc"><?php echo esc_html( get_theme_mod( 'footer_calltoaction_desc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor nunc, iaculis et vulputate in.' ) ); ?></p>
                    <a href="<?php echo esc_html( get_theme_mod( 'footer_cta_link', '#' ) ); ?>" class="btn btn-primary"><?php echo esc_html( get_theme_mod( 'footer_calltoaction_button', 'Join now &rarr;' ) ); ?></a>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="copyright text-center">
        <p><?php echo wp_kses_post( get_theme_mod( 'footer_copyright', 'Copyright Brightside Studio' ) ); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>