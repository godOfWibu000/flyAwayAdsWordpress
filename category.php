<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/img/shotcut.png"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/child.css">

    <!-- Font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <title><?php single_cat_title(); ?></title>
    
    <!-- <script src="js/main.js"></script> -->
</head>
<body>
    <div class="container">
        <!-- Header -->
        <header>
            <!-- Navbar -->
            <nav>
                <!-- Logo -->
                <div class="logo">
                    <a href="index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="Logo FlyAway Ads" height="50px"></a>
                </div>

                <!-- Menu -->
                <?php wp_nav_menu( 
                  array( 
                      'theme_location' => 'menu1', 
                      'container' => 'false', 
                      'menu_id' => 'nav-bar', 
                      'menu_class' => 'nav-bar'
                   ) 
                ); ?>
                <!-- Toggle menu -->
                <div id="toggle">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </nav>
        </header>
        <!-- Banner -->
        <div class="banner">
            <div class="banner-items">
                <!-- Slogan -->
                <div class="slogan">
                    <h1>Quảng cáo Facebook với FlyAwayAds</h1>
                    <p>Giúp nhiều người biết đến doanh nghiệp của bạn, từ đó tăng đơn hàng, tạo cơ hội phát triển doanh nghiệp.</p>
                    <a href="https://zalo.me/0941927604" target="_blank"><button>Đăng ký</button></a>
                </div>

                <!-- Banner-icon -->
                <div class="banner-icon">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/banner.png" alt="banner" height="360px" width="100%">
                </div>
            </div>
        </div>
		<div class="content">
			<!-- Category -->
			<div class="category">
				<!-- Posts -->
				<div class="posts">
					<div class="posts-head">
						<a href="https://flyawayads.com/">Trang chủ</a>
						<span class="material-symbols-outlined">chevron_right</span>
						<a href="https://flyawayads.com/category/bai-viet/"><?php single_cat_title(); ?></a>
					</div>
					<div style="height: 20px;"></div>
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<div class="posts-list">
							<h3>
								<a id="post-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h3>
							<div id="post-time-view">
									<span style="margin-left: 0;" class="material-symbols-outlined">schedule</span>
									<?php
									    $timeago = vi_human_time_diff(get_the_time('U'), current_time('timestamp'));
									    if ($timeago == false) {
									        the_time('d/m/Y');
									    } else {
									        echo $timeago . ' trước';
									    }
									?>
									<span class="material-symbols-outlined">visibility</span>
									<?php echo getpostviews(get_the_ID()) ?>
								</div>
							<div class="post-infor">
								<a class="post-thumbnail" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full'); ?>
								</a>
								<div id="post-discription">
									<p><?php the_excerpt(); ?></p>
								</div>
							</div>
						</div>
					<?php endwhile;?>
					<?php endif; ?>

					<?php if(paginate_links()!='') {?>
						<div class="quatrang">
							<?php
							global $wp_query;
							$big = 999999999;
							echo paginate_links( array(
								'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format' => '?paged=%#%',
								'prev_text'    => __('« Mới hơn'),
								'next_text'    => __('Tiếp theo »'),
								'current' => max( 1, get_query_var('paged') ),
								'total' => $wp_query->max_num_pages
								) );
						    ?>
						</div>
					<?php } ?>
				</div>

				<!-- Category-side-bar -->
				<div class="category-side-bar">
					<table>
						<tr>
							<th>Chuyên mục</th>
						</tr>
					</table>
					<?php 
						$cat_id = '13';
						$categories = get_categories(
						array('child_of' => $cat_id,'hide_empty' => 0,'orderby' => 'id', 'order' => 'ASC',)); 
						if(!empty($categories)){ ?>
						    <table>
						        <?php foreach($categories as $cat){
						        if('Uncategorized' != $cat->name){ ?>
						            <tr><td><span class="material-symbols-outlined">chevron_right</span><a  href="<?php echo get_category_link($cat->term_id); ?>"  ><?php echo $cat->name; ?></a></td></tr>
						        <?php } } ?>      
						    </table>
						<?php } else { ?>
						    <table>
						        <tr><td class="cat"><a href="<?php echo get_category_link($cat_id); ?>"><?php echo get_cat_name($cat_id); ?></a></td></tr>
						    </table>
					<?php } ?>
				</div>
			</div>

			<!-- Side bar -->
			<?php get_sidebar(); ?>
		</div>

<?php get_footer(); ?>