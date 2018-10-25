
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
        <div class="container">
            <div id="search-overlay__results">
              
            </div>
        </div>

</div>

<?php wp_footer(); ?>
</body>
</html>