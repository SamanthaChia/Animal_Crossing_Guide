
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

<?php wp_footer(); ?>
</body>
</html>