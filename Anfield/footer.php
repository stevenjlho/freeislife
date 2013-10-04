
  <div id="footer">
  	<span>copyright @2011 <a href="http://www.freeislife.com/" title="艾菲路的博客"><strong>艾菲路的博客</strong></a></span>
  	<span>Power By <a href="http://wordpress.org/" title="wordpress">WordPress</a></span>
  <?php wp_footer(); ?>
  </div>
</div>
<!-- wrap -->
<script type="text/javascript" src="http://v1.jiathis.com/code/jia.js" charset="utf-8"></script>
<script type="text/javascript" src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/common.js"></script>
<?php global $user_ID; if (!$user_ID) : ?>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20360906-3']);
  _gaq.push(['_trackPageview']);
  _gaq.push(['_trackPageLoadTime']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php endif; ?>
</body>
</html>
