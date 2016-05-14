  <div class="cf"></div>
</div> <!-- end main -->

<section id="email">
  <div class="container">
    <div class="widget jetpack_subscription_widget">
      <form action="" method="post" accept-charset="utf-8" id="subscribe-blog-459">
        
        <p id="subscribe-email">
          <input type="text" name="email" value="Enter your email for updates ..." id="subscribe-field" onclick="if ( this.value == 'Enter your email for updates ...' ) { this.value = ''; }" onblur="if ( this.value == '' ) { this.value = 'Enter your email for updates ...'; }" />
        </p>
        
        <p id="subscribe-submit">
          <input type="hidden" name="action" value="subscribe"/>
          <input type="hidden" name="source" value="http://atlasofdesign.org/" />
          <input type="hidden" name="sub-type" value="widget" />
          <input type="hidden" name="redirect_fragment" value="459" />
          <input type="hidden" id="_wpnonce" name="_wpnonce" value="6633a83888" />
          <input type="submit" class="button button-red" value="Signup" name="jetpack_subscriptions_widget" />
        </p>
      </form>
    </div>
  </div>
</section>

<footer>
  <div class="container">
  	<ul>
      <li><img src="<?php bloginfo('template_directory'); ?>/img/chevron.svg"></li>
      <li><a href="https://twitter.com/NACIS_Atlas" target="_blank">Twitter</a></li>
      <li><a href="https://www.facebook.com/atlasofdesign" target="_blank">Facebook</a></li>
      <li><a href="<?php echo home_url(); ?>/feed">RSS</a></li>
      <li><a href="<?php echo home_url(); ?>/license">License</a></li>
      <li><a href="<?php echo home_url(); ?>/printing">Printing</a></li>
      <li><a href="<?php echo home_url(); ?>/purchase" target="_blank">Purchase</a></li>
      <li class="right"><a href="http://nacis.org" target="_blank"><img class="nacis" src="http://atlasofdesign.org/wp-content/uploads/2014/05/nacis-logo-black.png"></a></li>
  	</ul>
  </div>
</footer>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46365624-1', 'atlasofdesign.org');
  ga('send', 'pageview');
</script>

</body>
</html>