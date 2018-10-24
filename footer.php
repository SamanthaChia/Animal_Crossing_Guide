
</div> <!-- /main-posts -->

     <footer class="site-footer">

<div class="site-footer__inner container container--narrow">

  <div class="group">

    <div class="site-footer__col-two-three-group">
      <div class="site-footer__col-two">
        <h3 class="headline headline--small">Navigations</h3>
        <nav class="nav-list">
        <?php 
          wp_nav_menu(array(
            'theme_location' => 'footerLocationOne'
          ));
        ?>
        </nav>
      </div>

      <div class="site-footer__col-three">
        <h3 class="headline headline--small">Learn</h3>
        <nav class="nav-list">
        <?php 
          wp_nav_menu(array(
            'theme_location' => 'footerLocationTwo'
          ));
        ?>
        </nav>
      </div>
    </div>

    <div class="site-footer__col-four">
      <h3 class="headline headline--small">Connect With Us</h3>
      <nav>
        <ul class="min-list social-icons-list group">
          <li><a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
          <li><a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
      </nav>
    </div>
  </div>

</div>
</footer>

    </div> <!-- container -->

<div class="search-overlay">
  <div clas="search-overlay__top">
        <div class="container">
        <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
          <input type="text" class="search-term" placeholder="Looking for something? Let Isabelle help!" id="search-term">
          <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
        </div>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>