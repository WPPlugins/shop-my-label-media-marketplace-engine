<?php



  $siteUrl = get_home_url();



      $siteUrl = str_replace('http://','',$siteUrl);



      $siteUrl = str_replace('https://','',$siteUrl);



  if(!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == ""){



        $redirect = "https://".$siteUrl."/cart";



        header("Location: $redirect");



  }



  // default values for Shopping Cart



  $smlBaseUrl = 'https://www.shopmylabel.com/';



  get_header( $name ); 



  $smlCartUrl = '/embed/shoppingcart'



 ?> 



<script type="text/javascript" >



  document.title = "<?php bloginfo('name')  ?> | Shopping Cart";



</script>



<div id="smlCartClearDiv">



  <iframe id="smlIframeBase" class="smlCartIframe" src="<?php echo $smlBaseUrl.$smlCartUrl ?>" frameborder="0" scrolling="auto" seamless="seamless" marginheight="0" marginwidth="0"></iframe>



</div>



<link href="/wp-content/plugins/sml_shopkeeper/sml_shopkeeper.css" rel="stylesheet" type="text/css" />



<?php get_footer( $name ); ?> 