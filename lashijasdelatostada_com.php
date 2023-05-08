<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="es">
<!--<![endif]-->

<head>
  
<?PHP 
if(strlen($_SESSION["idGoogle"]) > 0){
?>
<!-- Google Tag Manager -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2480891282368590"
     crossorigin="anonymous"></script>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','<?=$_SESSION["idGoogle"]?>');</script>
<!-- End Google Tag Manager -->
  <?PHP 
}

    $sqlEstados = "SELECT * FROM tbl_estados WHERE activo_esta = 1 ORDER BY nom_esta ASC";
    $resEstados = $db->query($sqlEstados)->fetchAll(PDO::FETCH_ASSOC);
?>

  <meta charset="utf-8">
  <title><?= $title; ?></title>
  <meta name="description" content="<?= $description; ?>">
  <meta name="ROBOTS" content="INDEX, FOLLOW" />
  <meta name="author" content="<?= empresa; ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="alternate" hreflang="es-mx" href="<?=base_url;?>" />
  <?=geo_tags;?>
  <?=geo_tags_compartir;?>
  
  <meta name="dc.description" content="<?= $description; ?>" />
  <meta name="dc.relation" content="<?= base_url?>" />
  <meta name="dc.source" content="<?= base_url?>" />
  <meta name="dc.language" content="es_MX" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <link rel="canonical" href="<?= page(); ?>" />
   <script type="application/ld+json">
        { 
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "<?= empresa; ?>",
            "logo" : "<?= base_url . logo; ?>",
            "url": "<?= base_url; ?>",
            "contactPoint": [{
                "@type": "ContactPoint",
                "telephone": "9842565778",
                "contactType": "customer service"
            }],
            "sameAs": [<?php if (defined('facebook')) {echo '"'.facebook.'"';} ?>]
        }
    </script>
  <!-- Favicon -->
  <link href="<?= base_url ?>img/favicon.png" rel="icon" type="image/x-icon" />
  <link rel="shortcut icon" href="<?= base_url ?>img/favicon.png" />
  <!-- Styles Galeria General -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
  <link rel="stylesheet" href="<?=base_url?>css/jquery-ui.min.css">
  <!-- CSS -->
  <?= css(); ?>
  <script>
  var $url = '<?= base_url ?>';
  var $arrayEstados = '<?= json_encode($resEstados)?>';
  </script>
  <script src="<?= base_url; ?>js/jquery.min.js"></script>
  <script src="<?= base_url; ?>js/vendor/bootstrap.min.js"></script>
  <script>
  window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
  </script>

  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d3b2476a1973b13"></script>
  <?PHP 
    if( ($page == "") || ($page == "sucursales" && strlen($uri_parts[3]) == 0) ){// || $page == "sucursales"
    ?>
  <script>
  console.warn("habilitado...uri_parts[3]:<?=$uri_parts[3]?>, page: <?=$page?>");
  </script>
  <script src="<?= base_url; ?>js/_productos_destacados.js"></script>
  <!-- Slider Favoritos -->
  <script src="<?=base_url;?>js/scripts.min.js"></script>
  <script src="<?=base_url;?>js/hammer.min.js"></script>
  <!-- SCRIPT | Galeria General Interna -->
  <?PHP 
    }else{
    ?>
  <script>
  console.warn("deshabilitado...page: <?=$page?>");
  </script>
  <?PHP 
    }
    ?>

  <script>
  var folio = $('#folio');
  var form = $('.form');
  var key = $('#key');
  var fecha = $('#fecha');
  var password = $('#password');
  var submit = $('#submit');

  submit.on('click', function() {
    if (folio.val() == '' || fecha.val() == '' || key.val() == '') {
      setTimeout(function() {
        $('#sectitle').text('Ingresa todos los campos');
      }, 300);
      return false;
    }
    password.val(fecha.val() + key.val());
    console.log("dio click en facturar");
    form.submit();
  });
  </script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2480891282368590"
     crossorigin="anonymous"></script>
</head>

<body data-proy="<?=$carpetaProyecto?>">
  <!--*****************************************************
    SEGUNDO CÓDIGO DE GOOGLE TAG MANAGER
*****************************************************-->
  <?PHP 
if(strlen($_SESSION["idGoogle"]) > 0){
?>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $_SESSION['idGoogle']?>" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <?PHP 
}
?>

  <!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<?PHP require_once 'includes/_menu.php'; ?>
