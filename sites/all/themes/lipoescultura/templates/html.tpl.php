<?php print $doctype; ?>
<!--[if IE 7]><html class="ie7 ie explorer"> <![endif]-->
<!--[if IE 8]><html class="ie8 ie"> <![endif]-->
<!--[if IE 9]><html class="ie9"> <![endif]-->
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
<head<?php print $rdf->profile; ?>>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>  
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  
    <?php /* $Id: $uri = $_SERVER['HTTP_HOST']. request_uri(); */

$url =  "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

?>
  
  
</head>
<body<?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  
  
  
  
  
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40950003-1', 'abdominoplastiaprecio.com');
  ga('send', 'pageview');

</script>


  <?php 
    $palabra=preg_quote('gracias-contacto.html');
    if(eregi($palabra,$url)) {?>    

<!-- Google Code for Lipoescultura Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 983651431;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "elogCOHN-gQQ56iF1QM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/983651431/?value=0&amp;label=elogCOHN-gQQ56iF1QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php }?>   
</body>
</html>