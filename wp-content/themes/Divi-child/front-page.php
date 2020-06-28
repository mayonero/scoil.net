<?php get_header('home'); ?>
<?php $logo = ( $user_logo = et_get_option( 'divi_logo' ) ) && ! empty( $user_logo ) ? $user_logo : $template_directory_uri . '/images/logo.png'; ?>
<section id="home-page">
    <main>
        <span>
            <header>
                <h1 id="logo-home">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo esc_attr( $logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" />
                    </a>
                </h1>
                <nav id="menu_header">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'home_menu',
                        'menu_id'        => 'menu-principal',
                    ) ); ?>
                </nav>
            </header>
            <div>
                <h2>Fáilte go <span>INTO Learning</span></h2>
                <a href="https://moodle.intolearning.ie/" title="Back to Moodle">Back to Moodle</a>
                <a href="https://into.ie/" title="Main website">Main website</a>
            </div>
            <footer>
                <div class="social">
                        <a href="https://www.facebook.com/INTOnews/" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/INTOnews" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/into_news/" title="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="terms">
                        <a href="https://moodle.intolearning.ie/admin/tool/policy/viewall.php" title="Terms & Disclaimers">Terms & Disclaimers</a>
                        <a href="https://moodle.intolearning.ie/mod/page/view.php?id=203" title="How To Create New Account">How To Create New Account</a>
                        <a href="https://moodle.intolearning.ie/course/view.php?id=13" title="General Support & Documentation">General Support & Documentation</a>
                </div>
            </footer>
        </span>
        <img src="<?= get_stylesheet_directory_uri() ?>/img/woman5.png" alt="Woman studying" />
    </main>

<svg id="triangle" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 476.44 248.2">
    <style type="text/css"> .st0{fill:#AB1582;} </style>
    <polygon class="st0" points="0,0 476.44,248.2 0,248.2 "/>
</svg>
<svg id="circle" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 280.26 280.26">
    <style type="text/css">.st1{fill:#27176B;}</style>
    <circle class="st1" cx="140.13" cy="140.13" r="140.13"/>
</svg>


</section>
<?php get_footer('home'); ?>