<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/img/shotcut.png"/>

    <!-- Css -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/child.css">

    <!-- Font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Font-awesome -->
    <script src="https://kit.fontawesome.com/9806fd3724.js" crossorigin="anonymous"></script>

    <!-- Thumbnail -->
    <?php $img_src = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
    <meta property="og:image" content="<?php echo $img_src; ?>" />
    <meta property="og:discription" content="<?php the_excerpt(); ?>" />

    <title><?php the_title(); ?></title>
    
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
            <!-- Single -->
            <div class="single">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php setpostview(get_the_ID()); ?>
                    <div class="single-head">
                        <a href="https://flyawayads.com/">Trang chủ</a>
                        <span class="material-symbols-outlined">chevron_right</span>
                        <a href="https://flyawayads.com/category/bai-viet/">Bài viết</a>
                        <span class="material-symbols-outlined">chevron_right</span>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                    <h1><?php the_title(); ?></h1>
                    <div class="single-infor">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 14 ); ?>&nbsp;<?php the_author(); ?><span class="material-symbols-outlined">schedule</span><?php the_time(); ?>&nbsp;<?php the_date("d/m/Y") ?>
                                    <span class="material-symbols-outlined">visibility</span>
                                    <?php echo getpostviews(get_the_ID()) ?>
                    </div>
                    <iframe src="https://www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>&width=450&layout=standard&action=like&size=small&share=true&height=35&appId" width="450" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        <hr>

                        <!-- Content -->
                        <b id="single-discription"><?php the_excerpt(); ?></b>
                        <div class="single-content" style="margin-top: 20px;">
                            <?php the_content(); ?>
                        </div>

                        <!-- Tags -->
                        <div class="tags">
                            <?php the_tags( '<div><button>', '</button><button>', '</button></div>' ); ?>
                        </div>

                        <!-- Share -->
                        <div class="share">
                            <div class="share-button">
                                <div class="button_share share-icon">
                                    <i class="fa-solid fa-share-nodes"></i>
                                </div>
                                <div class="arrow-right"></div>
                            </div>
                            <a class="button_share facebook" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">
                                <i class="fa-brands fa-facebook-f"></i>             
                            </a>
                            <a class="button_share twitter" target="_blank" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>&via=TWITTER-HANDLER">
                                <i class="fa-brands fa-twitter"></i>         
                            </a>
                            <a class="button_share instagram" target="_blank" href="">
                                <i class="fa-brands fa-instagram"></i>                 
                            </a>
                        </div>
                        <br>
                        
                        <!-- Comments -->
                        <div class="comments" style="margin: auto;">
                            <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="5">
                            </div>
                        </div>
                <?php endwhile;?>
                <?php endif; ?>
            </div>

            <!-- New posts -->
            <div class="category">
                <!-- New posts -->
                <div class="posts">
                    <h2 style="margin: 20px 0 10px 0;padding-left: 3px;border-left: 5px solid var(--main-color1);">Bài viết mới nhất</h2>
                    <?php
                        $categories = get_the_category($post->ID);
                        if ($categories) 
                        {
                            $category_ids = array();
                            foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                     
                            $args=array(
                            'category__in' => $category_ids,
                            'post__not_in' => array($post->ID),
                            'showposts'=>5, // Số bài viết bạn muốn hiển thị.
                            'caller_get_posts'=>1
                            );
                            $my_query = new wp_query($args);
                            if( $my_query->have_posts() ) 
                            {
                                echo '<ul style="list-style-type: none;">';
                                while ($my_query->have_posts())
                                {
                                    $my_query->the_post();
                                    ?>
                                    <li>
                                        <div class="posts-list">
                                            <h3>
                                                <a id="post-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h3>
                                            <div id="post-time-view">
                                                    <span class="material-symbols-outlined">schedule</span>
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
                                    </li>
                                    <?php
                                }
                                echo '</ul>';
                            }
                        }
                    ?>
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

            <?php get_sidebar(); ?>
        </div>
        <?php get_footer(); ?>
    </div>
</body>
</html>