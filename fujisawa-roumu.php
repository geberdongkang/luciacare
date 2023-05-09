<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package low-office
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2480891282368590"
     crossorigin="anonymous"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-064DNXRMK2');
</script>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>	
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">	
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
<script async src="<?php echo get_template_directory_uri(); ?>/js/navigation.js"></script>
<?php wp_head(); ?>

<script id="_bownow_ts">
var _bownow_ts = document.createElement('script');
_bownow_ts.charset = 'utf-8';
_bownow_ts.src = 'https://contents.bownow.jp/js/UTC_4a75c9690eb423cf9ce2/trace.js';
document.getElementsByTagName('head')[0].appendChild(_bownow_ts);
</script>
	
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'low-office' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<div class="container">
				<div class="site-title-block">
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <picture>
                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/logo.png 1x,<?php echo get_template_directory_uri(); ?>/images/logo@2x.png 2x">
                <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/logo_sp.png 1x,<?php echo get_template_directory_uri(); ?>/images/logo_sp@3x.png 3x">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>">
              </picture>
						</a>
					</h1>
				<?php else : ?>
					<p class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <picture>
                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/logo.png 1x,<?php echo get_template_directory_uri(); ?>/images/logo@2x.png 2x">
                <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/logo_sp.png 1x,<?php echo get_template_directory_uri(); ?>/images/logo_sp@3x.png 3x">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>">
              </picture>
						</a>
					</p>
				<?php
				endif;
				?>
				<p class="site-description pc"><span class="site-description1">弁護士法人 シーライト藤沢法律事務所（神奈川県弁護士会所属）　JR藤沢駅徒歩5分</span></p>
				</div>
				<div class="header-contact pc">
					<div class="header-contact-tel-box">
						<p class="header-contact-tel"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_tel.png">0466-53-9340</p>
						<p class="header-contact-tel-text">受付:平日9～19時／相談:9-21時　週末・土日応相談</p>
						<p class="header-contact-tel-text">企業側の法律相談に限らせていただきます</p>
					</div>
					<div class="header-contact-mail-box">
						<a href="<?php echo esc_url( home_url( 'contact' ) ); ?>">
							<div class="header-contact-mail">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icon_mail.png">
								<p class="header-contact-mail-text"><span>メールでのご相談</span><span>予約はこちら</span></p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="container">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<?php if ( is_front_page() ) { ?>

			<section class="mainv">
					<div class="mainv-bg">
						<picture>
							<source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/mv_sp@3x.jpg">
							<img src="<?php echo get_template_directory_uri(); ?>/images/mv@2x.jpg" alt="">
						</picture>
					</div>
				<div class="container">
					<div class="mainv-title">
						<picture>
							<source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/mv_ttl_sp@3x.png">
							<img src="<?php echo get_template_directory_uri(); ?>/images/mv_ttl.png" alt="企業の労務トラブルは経営者側に 特化した弁護士にご相談ください。">
						</picture>
					</div>
					<ul class="mainv-nav">
						<li class="mainv-nav-item">
							<a href="<?php echo esc_url( home_url( '/strengths/' ) ); ?>">当事務所の特徴・強み</a>
						</li>
						<li class="mainv-nav-item">
							<a href="<?php echo esc_url( home_url( '/owner/' ) ); ?>">経営者の方へ</a>
						</li>
						<li class="mainv-nav-item">
							<a href="<?php echo esc_url( home_url( '/consulting/' ) ); ?>">弁護士による労務コンサルティング</a>
						</li>
					</ul>
				</div>
			</section>

			<section class="top-menu1 img-list">
				<div class="container">
					<h2>お急ぎで弁護士をお探しの方は以下をご覧ください</h2>
					<ul class="img-list-ul">
						<li class="top-menu1-item">
							<a href="<?php echo esc_url( home_url( '/overtimefee/' ) ); ?>">
                <picture>
                  <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/top_menu01.png 1x,<?php echo get_template_directory_uri(); ?>/images/top_menu01@2x.png 2x">
                  <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/top_menu01_sp.png 1x,<?php echo get_template_directory_uri(); ?>/images/top_menu01_sp@3x.png 3x">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/top_menu01.png" alt="残業代を請求されてしまった">
                </picture>
							</a>
						</li>
						<li class="top-menu1-item">
							<a href="<?php echo esc_url( home_url( '/employee/' ) ); ?>">
                <picture>
                  <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/top_menu02.png 1x,<?php echo get_template_directory_uri(); ?>/images/top_menu02@2x.png 2x">
                  <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/top_menu02_sp.png 1x,<?php echo get_template_directory_uri(); ?>/images/top_menu02_sp@3x.png 3x">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/top_menu02.png" alt="問題社員の対応をしたい">
                </picture>
							</a>
						</li>
						<li class="top-menu1-item">
							<a href="<?php echo esc_url( home_url( '/union/' ) ); ?>">
                <picture>
                  <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/top_menu03.png 1x,<?php echo get_template_directory_uri(); ?>/images/top_menu03@2x.png 2x">
                  <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/top_menu03_sp.png 1x,<?php echo get_template_directory_uri(); ?>/images/top_menu03_sp@3x.png 3x">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/top_menu03.png" alt="団体交渉・労働組合の対策が生じた">
                </picture>
							</a>
						</li>
						<li class="top-menu1-item">
							<a href="<?php echo esc_url( home_url( '/reduction/' ) ); ?>">
                <picture>
                  <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/top_menu04.png 1x,<?php echo get_template_directory_uri(); ?>/images/top_menu04@2x.png 2x">
                  <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/top_menu04_sp.png 1x,<?php echo get_template_directory_uri(); ?>/images/top_menu04_sp@3x.png 3x">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/top_menu04.png" alt="業績が悪化し人員削減を検討している">
                </picture>
							</a>
						</li>
						<li class="top-menu1-item">
							<a href="<?php echo esc_url( home_url( '/harassment/' ) ); ?>">
                <picture>
                  <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/top_menu05.png 1x,<?php echo get_template_directory_uri(); ?>/images/top_menu05@2x.png 2x">
                  <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/top_menu05_sp.png 1x,<?php echo get_template_directory_uri(); ?>/images/top_menu05_sp@3x.png 3x">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/top_menu05.png" alt="ハラスメント問題に困っている">
                </picture>
							</a>
						</li>
						<li class="top-menu1-item">
							<a href="<?php echo esc_url( home_url( '/adviser/' ) ); ?>">
                <picture>
                  <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/top_menu06.png 1x,<?php echo get_template_directory_uri(); ?>/images/top_menu06@2x.png 2x">
                  <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/top_menu06_sp.png 1x,<?php echo get_template_directory_uri(); ?>/images/top_menu06_sp@3x.png 3x">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/top_menu06.png" alt="顧問弁護士を探している">
                </picture>
							</a>
						</li>
					</ul>
				</div>
			</section>



	<?php } ?>

	<div id="content" class="site-content">
