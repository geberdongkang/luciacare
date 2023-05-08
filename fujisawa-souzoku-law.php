<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-58312985-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-58312985-3');
</script>


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"><!--IE対策-->
<?php
 //header.phpの変数descriptionに格納されたディスクリプション情報を取得し、contetnsに表示
echo '<meta name="description" content="'.$description.'">'; 
echo "\n"; //
//header.phpの変数titleに格納されたタイトル情報を取得し、titleに表示
echo '<title>'.$title.'</title>';
echo "\n";
?>
	
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script><!--jQuery-->
<script src="<?php print $Path; ?>js/jquery.meanmenu.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script><!--ライトボックス（画像拡大）のCDN jQuery-->
<script src="<?php print $Path; ?>js/jquery.simplePagination.js"></script><!--ページネーションのjQuery-->	
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1"><!--ビューポート-->
<link href="<?php print $Path; ?>css/common.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php print $Path; ?>css/meanmenu.css" type="text/css" /><!--レスポンシブメニューのjQuery-->
<link rel="stylesheet" href="<?php print $Path; ?>css/mailform.css" type="text/css" /><!--メールフォームCSS-->
<script type="text/javascript" src="//webfonts.xserver.jp/js/xserver.js"></script><!--WEBフォント読み込み-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css" />
<link href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
<link rel="stylesheet" href="<?php print $Path; ?>css/simplePagination.css">

<script>
$(document).ready(function() {
$('nav').meanmenu({
    meanMenuClose: "&times;", // クローズボタン
    meanMenuCloseSize: "40px", // クローズボタンのフォントサイズ
    meanMenuOpen: "<span /><span /><span />", // 通常ボタン
    meanRevealPosition: "right", // 表示位置
    meanRevealColour: "", // 背景色
    meanScreenWidth: "1285", // 表示させるウィンドウサイズ(ブレイクポイント)
	
});
});
	
	
	var luminousTrigger = document.querySelectorAll('.luminous');
if( luminousTrigger !== null ) {
  new LuminousGallery(luminousTrigger);
}
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2480891282368590"
     crossorigin="anonymous"></script>
</head>
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
<body>

<header id="header">
<div class="mean-container">
<div id="logoinfo">
	
  <div>
	  <ul id="logoinfo_s">
	  <li><a href="<?php print $Path; ?>index.php"><img src="<?php print $Path; ?>images/logosquare.jpg" alt="弁護士法人シーライト藤沢法律事務所　ロゴ"></a></li>
	  <li><a href="<?php print $Path; ?>index.php" class="maintitle">遺産分割交渉や遺留分請求の相談なら<br>弁護士法人シーライト藤沢法律事務所<p class="smalltxt">弁護士法人シーライト藤沢法律事務所</p></a></li>	 
	<li class="nl_bt"><a href="<?php print $Path; ?>newsletter.php"><i class="fa-solid fa-book-open"></i>メルマガ登録</a></li>
	  </ul>	  
	</div>
	
  <div>
	  <ul id="logoinfo_s2">
		  <li><img src="<?php print $Path; ?>images/logo.png" alt="弁護士法人シーライト藤沢法律事務所　ロゴ"></li>
		  <li class="logoinfo_sbt"><a href="<?php print $Path; ?>access.php"><i class="fas fa-map-marker-alt"></i>アクセス</a></li>
　        <li class="logoinfo_sbt"><a href="<?php print $Path; ?>contact.php">お問い合わせ</a></li>
		  <li class="logoinfo_linebt"><a href="https://lin.ee/6VZSQcVD"><img src="../images/Lineicon.png">Lineでのお問い合わせ</a></li>
		 	  </ul>
 </div>
</div>
	
	
<ul id="logoinfo2">
  	 <li>
   <ul id="logoinfo_s2">
	   <li><p><i class="fas fa-phone-square"></i>0466-53-9340</p>受付時間：平日 9:00-19:00</li>
       <li class="logoinfo_lbt"><a href="<?php print $Path; ?>contact.php"><i class="far fa-envelope"></i>ご相談予約</a></li>
</ul>
	</li>
</ul>
</div>
</header>








