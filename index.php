<?php get_header(); ?><section class="fixedPosts"><div class="moving-bg"><div class="container"><div class="allFixedPosts wow fadeInLeft owl-carousel owl-theme"> <?php query_posts(array('post_type'=>'post', 'posts_per_page'=>15 ,'meta_key'=>'fixed')); if (have_posts()) : while (have_posts()) : the_post(); ?><div class="service-section3"> <a href="<?the_permalink()?>"><div class="imgSection3"> <?the_post_thumbnail('fixed1')?><h3><?=wp_trim_words(get_the_title(),10,' ')?></h3></div> </a><div class="Bottom"><ul><li> <i class="fas fa-chevron-circle-left"></i> <? foreach (array_slice(get_the_terms($post->ID,'category', ''),0,1) as $cat) { ?> <a href="<?=get_term_link($cat)?>"><?=$cat->name?></a> <? } ?></li><li> <i class="fas fa-user-alt"></i> <a href="#"><?=get_the_author()?></a></li></ul></div><div class="smallContainer"><div class="socialShares3"><ul><li class="social-facebook3 wow fadeInRight"> <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank"> <i class="fab fa-facebook-f"></i> </a></li><li class="social-twitter3 wow fadeInRight"> <a href="http://twitter.com/share?url=<? the_permalink(); ?>" target="_blank"> <i class="fab fa-twitter"></i> </a></li><li class="social-whatsapp3 wow fadeInRight"> <a href=https://web.whatsapp.com://send?text=<? the_title(); ?> - <? the_permalink(); ?>> <i class="fab fa-whatsapp"></i> </a></li><div class="clr"></div></ul></div><div class="postInfo3"><ul><li><i class="fas fa-arrow-circle-down"></i><?=(int)get_post_meta($post->ID,'download',1);?></li><li> <i class="far fa-clock"></i> منذ <?php echo human_time_diff( date('U', strtotime($post->post_date)), current_time('timestamp') ); ?></li><li><i class="fas fa-comments"></i><?=get_comments_number()?></li><li> <span class="views2"> <i class="fa fa-eye"></i> <?=(get_post_meta($post->ID,'views',1) == '' ? 0 : get_post_meta($post->ID,'views',1))?> </span></li></ul></div><div class="readMore3"> <a href="<?the_permalink()?>"><span>إقرأ الموضوع كاملا</span></a></div></div></div> <?php endwhile; endif; wp_reset_query(); ?></div></div></div> </section><?if(YC_GetOpt('indexAd1') != '') { ?><center><?=YC_GetOpt('indexAd1')?></center> <? } ?><section class="categories"><div class="container"><div class="lineSeparator1"><span>HELAL NET</span></div><h2 class="categoriesTitle">إكتشف <span>أقسامنا</span></h2><p class="catExplain"><?=YC_GetOpt('explaining')?></p><div class="categoriesAll"> <?php foreach (get_categories(array('taxonomy'=>'category','hide_empty'=>0)) as $cat) { $catid = $cat->term_id; $catname = $cat->name; ?><div class="theCategory"><div class="imgCatCont"><img data-src="<?=get_term_meta($cat->term_id,'imageCat',1)?>"></div> <a href="<?=get_term_link($cat)?>"><?=$cat->name?></a></div> <? } ?></div></div> </section><?if(YC_GetOpt('indexAd2') != '') { ?><center><?=YC_GetOpt('indexAd2')?></center> <? } ?><section class="mostViewed" data-style="background: url(<?=get_template_directory_uri()?>/Inc/img/stripe-bg.jpg) repeat-x scroll left top, rgb(240, 240, 240) url(<?=get_template_directory_uri()?>/Inc/img/stripe-bg-opp.jpg) repeat-x scroll right bottom;"><div class="container"><div class="mostViewedTitle"><div class="lineSeparator1"><span>HELAL NET</span></div><h2 class="service-title2 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.3s">المواضيع الأكثر مشاهدة</h2></div><div class="mostViewedPosts wow fadeInUpBig"><div class="leftBlock"> <?php query_posts(array( 'post_type'=>'post' , 'posts_per_page'=>2 , 'meta_key'=>'views')); if (have_posts()) : while (have_posts()) : the_post(); ?><div class="service-section class7"> <a href="<?the_permalink()?>"><div class="imgSection class6"> <?the_post_thumbnail('most1')?></div><div class="authorTime class5"><ul><li><i class="fas fa-user-alt"></i><a href="#"><?=get_the_author()?></a></li><li> <i class="far fa-clock"></i> منذ <?php echo human_time_diff( date('U', strtotime($post->post_date)), current_time('timestamp') ); ?></li></ul></div><div class="titleContent class4"> <a href="<?the_permalink()?>"><h3><?the_title()?></h3><p><?=wp_trim_words(get_the_content(),15,'..')?></p> </a></div><div class="postInfo class3"><ul><li> <span class="liCont"> <i class="fas fa-chevron-circle-left"></i> <?php foreach (array_slice(get_the_terms($post->ID,'category', ''),0,1) as $cat) { $catid = $cat->term_id; $catname = $cat->name; ?> <a href="<?=get_term_link($cat)?>"><?=$cat->name?></a> <? } ?> </span></li><li> <span class="liCont"> <i class="fas fa-arrow-circle-down"></i><?=(int)get_post_meta($post->ID,'download',1);?> </span></li><li><span class="liCont"><i class="fas fa-comments"></i><?=get_comments_number()?></span></li><li> <span class="liCont"> <span class="views3"> <i class="fa fa-eye"></i> <?=(get_post_meta($post->ID,'views',1) == '' ? 0 : get_post_meta($post->ID,'views',1))?> </span> </span></li></ul></div><div class="socialShares class2"><ul><li class="social-facebook"> <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank"> <i class="fab fa-facebook-f"></i> </a></li><li class="social-twitter"> <a href="http://twitter.com/share?url=<? the_permalink(); ?>" target="_blank"> <i class="fab fa-twitter"></i> </a></li><li class="social-whatsapp"> <a href=https://web.whatsapp.com://send?text=<? the_title(); ?> - <? the_permalink(); ?> target='_blank'> <i class="fab fa-whatsapp"></i> </a></li><div class="clr"></div></ul></div><div class="readMore4 class1"> <a href="<?the_permalink()?>"><span>إقرأ المزيد</span></a> <i class="fas fa-angle-right"></i></div></a></div><?php endwhile; endif; wp_reset_query(); ?></div><div class="centerBlock"> <?php if ( array_key_exists('page', $_GET) ) { $paged = $_GET['page']; } else {$paged = 1; } $loop = 0; $temp = $wp_query; $wp_query = null; $args = array( 'post_type'=>'post' , 'posts_per_page'=>1 , 'meta_key' => 'views' ); $wp_query = new WP_Query(); $wp_query->query( $args );while ($wp_query->have_posts()) : $wp_query->the_post(); ?><div class="service-section class10"> <a href="<?the_permalink()?>"><div class="imgSection class11"> <?the_post_thumbnail('center1')?></div><div class="authorTime class12"><ul><li><i class="fas fa-user-alt"></i><a href="#"><?=get_the_author()?></a></li><li> <i class="far fa-clock"></i> منذ <?php echo human_time_diff( date('U', strtotime($post->post_date)), current_time('timestamp') ); ?></li></ul></div><div class="titleContent class13"> <a href="<?the_permalink()?>"><h3><?the_title()?></h3><p><?=wp_trim_words(get_the_content(),60,'..')?></p> </a></div><div class="postInfo class14"><ul><li> <i class="fas fa-chevron-circle-left"></i> <?php foreach (array_slice(get_the_terms($post->ID,'category', ''),0,1) as $cat) { $catid = $cat->term_id; $catname = $cat->name; ?> <a href="<?=get_term_link($cat)?>"><?=$cat->name?></a> <? } ?></li><li> <i class="fas fa-arrow-circle-down"></i><?=(int)get_post_meta($post->ID,'download',1);?></li><li><i class="fas fa-comments"></i><?=get_comments_number()?></li><li> <span class="views3 class15"> <i class="fa fa-eye"></i> <?=(get_post_meta($post->ID,'views',1) == '' ? 0 : get_post_meta($post->ID,'views',1))?> </span></li></ul></div><div class="socialShares class16"><ul><li class="social-facebook"> <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank"> <i class="fab fa-facebook-f"></i> </a></li><li class="social-twitter"> <a href="http://twitter.com/share?url=<? the_permalink(); ?>" target="_blank"> <i class="fab fa-twitter"></i> </a></li><li class="social-whatsapp"> <a href=https://web.whatsapp.com://send?text=<? the_title(); ?> - <? the_permalink(); ?> target='_blank'> <i class="fab fa-whatsapp"></i> </a></li><div class="clr"></div></ul></div><div class="readMore4 class17"> <a href="<?the_permalink()?>"><span>إقرأ المزيد</span></a> <i class="fas fa-angle-right"></i></div></a></div><? $i = $i + 0.2; endwhile; ?></div><div class="rightBlock"> <?php query_posts(array( 'post_type'=>'post' , 'posts_per_page'=>2 , 'meta_key'=>'views')); if (have_posts()) : while (have_posts()) : the_post(); ?><div class="service-section class7"> <a href="<?the_permalink()?>"><div class="imgSection class6"> <?the_post_thumbnail('most1')?></div><div class="authorTime class5"><ul><li><i class="fas fa-user-alt"></i><a href="#"><?=get_the_author()?></a></li><li> <i class="far fa-clock"></i> منذ <?php echo human_time_diff( date('U', strtotime($post->post_date)), current_time('timestamp') ); ?></li></ul></div><div class="titleContent class4"> <a href="<?the_permalink()?>"><h3><?the_title()?></h3><p><?=wp_trim_words(get_the_content(),15,'..')?></p> </a></div><div class="postInfo class3"><ul><li> <span class="liCont"> <i class="fas fa-chevron-circle-left"></i> <?php foreach (array_slice(get_the_terms($post->ID,'category', ''),0,1) as $cat) { $catid = $cat->term_id; $catname = $cat->name; ?> <a href="<?=get_term_link($cat)?>"><?=$cat->name?></a> <? } ?> </span></li><li> <span class="liCont"> <i class="fas fa-arrow-circle-down"></i><?=(int)get_post_meta($post->ID,'download',1);?> </span></li><li><span class="liCont"><i class="fas fa-comments"></i><?=get_comments_number()?></span></li><li> <span class="liCont"> <span class="views3"> <i class="fa fa-eye"></i> <?=(get_post_meta($post->ID,'views',1) == '' ? 0 : get_post_meta($post->ID,'views',1))?> </span> </span></li></ul></div><div class="socialShares class2"><ul><li class="social-facebook"> <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank"> <i class="fab fa-facebook-f"></i> </a></li><li class="social-twitter"> <a href="http://twitter.com/share?url=<? the_permalink(); ?>" target="_blank"> <i class="fab fa-twitter"></i> </a></li><li class="social-whatsapp"> <a href=https://web.whatsapp.com://send?text=<? the_title(); ?> - <? the_permalink(); ?> target='_blank'> <i class="fab fa-whatsapp"></i> </a></li><div class="clr"></div></ul></div><div class="readMore4 class1"> <a href="<?the_permalink()?>"><span>إقرأ المزيد</span></a> <i class="fas fa-angle-right"></i></div></a></div> <?php endwhile; endif; wp_reset_query(); ?></div><div class="downBlock"> <?php query_posts(array( 'post_type'=>'post' , 'posts_per_page'=>4 , 'meta_key'=>'views')); if (have_posts()) : while (have_posts()) : the_post(); ?><div class="service-section class7 classs7"> <a href="<?the_permalink()?>"><div class="imgSection class6"> <?the_post_thumbnail('most1 ')?></div><div class="authorTime class5"><ul><li><i class="fas fa-user-alt"></i><a href="#"><?=get_the_author()?></a></li><li> <i class="far fa-clock"></i> منذ <?php echo human_time_diff( date('U', strtotime($post->post_date)), current_time('timestamp') ); ?></li></ul></div><div class="titleContent class4"> <a href="<?the_permalink()?>"><h3><?the_title()?></h3><p><?=wp_trim_words(get_the_content(),15,'..')?></p> </a></div><div class="postInfo class3"><ul><li> <span class="liCont"> <i class="fas fa-chevron-circle-left"></i> <?php foreach (array_slice(get_the_terms($post->ID,'category', ''),0,1) as $cat) { $catid = $cat->term_id; $catname = $cat->name; ?> <a href="<?=get_term_link($cat)?>"><?=$cat->name?></a> <? } ?> </span></li><li> <span class="liCont"> <i class="fas fa-arrow-circle-down"></i><?=(int)get_post_meta($post->ID,'download',1);?> </span></li><li><span class="liCont"><i class="fas fa-comments"></i><?=get_comments_number()?></span></li><li> <span class="liCont"> <span class="views3"> <i class="fa fa-eye"></i> <?=(get_post_meta($post->ID,'views',1) == '' ? 0 : get_post_meta($post->ID,'views',1))?> </span> </span></li></ul></div><div class="socialShares class2"><ul><li class="social-facebook"> <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank"> <i class="fab fa-facebook-f"></i> </a></li><li class="social-twitter"> <a href="http://twitter.com/share?url=<? the_permalink(); ?>" target="_blank"> <i class="fab fa-twitter"></i> </a></li><li class="social-whatsapp"> <a href=https://web.whatsapp.com://send?text=<? the_title(); ?> - <? the_permalink(); ?> target='_blank'> <i class="fab fa-whatsapp"></i> </a></li><div class="clr"></div></ul></div><div class="readMore4 class1 classMobile"> <a href="<?the_permalink()?>"><span>إقرأ المزيد</span></a> <i class="fas fa-angle-right"></i></div></a></div><?php endwhile; endif; wp_reset_query(); ?></div></div> <?if(YC_GetOpt('indexAd3') != '') { ?><center><?=YC_GetOpt('indexAd3')?></center> <? } ?></div> </section><section class="services"><div class="container"><div class="lineSeparator1"><span>HELAL NET</span></div><h2 class="service-title wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.3s">مواضيعنا</h2><div class="all-services wow fadeInUpBig"><div class="container2"> <? if ( array_key_exists('page', $_GET) ) { $paged = $_GET['page']; } else {$paged = 1; } $loop = 0; $temp = $wp_query; $wp_query = null; $args = array( 'post_type'=>'post', 'posts_per_page'=>15, 'paged' => $paged ); $wp_query = new WP_Query(); $wp_query->query( $args );while ($wp_query->have_posts()) : $wp_query->the_post(); ?><div class="service-section"> <a href="<?the_permalink()?>"><div class="imgSection"> <?the_post_thumbnail('normal1')?></div><div class="authorTime"><ul><li><i class="fas fa-user-alt"></i><a href="#"><?=get_the_author()?></a></li><li> <i class="far fa-clock"></i> منذ <?php echo human_time_diff( date('U', strtotime($post->post_date)), current_time('timestamp') ); ?></li></ul></div><div class="titleContent"> <a href="<?the_permalink()?>"><h3><?the_title()?></h3><p><?=wp_trim_words(get_the_content(),15,'..')?></p> </a></div><div class="postInfo"><ul><li> <span class="liCont"> <i class="fas fa-chevron-circle-left"></i> <?php foreach (array_slice(get_the_terms($post->ID,'category', ''),0,1) as $cat) { $catid = $cat->term_id; $catname = $cat->name; ?> <a href="<?=get_term_link($cat)?>"><?=$cat->name?></a> <? } ?> </span></li><li> <span class="liCont"> <i class="fas fa-arrow-circle-down"></i><?=(int)get_post_meta($post->ID,'download',1);?> </span></li><li><span class="liCont"><i class="fas fa-comments"></i><?=get_comments_number()?></span></li><li> <span class="liCont"> <span class="views3"> <i class="fa fa-eye"></i> <?=(get_post_meta($post->ID,'views',1) == '' ? 0 : get_post_meta($post->ID,'views',1))?> </span> </span></li></ul></div><div class="socialShares"><ul><li class="social-facebook"> <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank"> <i class="fab fa-facebook-f"></i> </a></li><li class="social-twitter"> <a href="http://twitter.com/share?url=<? the_permalink(); ?>" target="_blank"> <i class="fab fa-twitter"></i> </a></li><li class="social-whatsapp"> <a href=https://web.whatsapp.com://send?text=<? the_title(); ?> - <? the_permalink(); ?> target='_blank'> <i class="fab fa-whatsapp"></i> </a></li><div class="clr"></div></ul></div><div class="readMore4"> <a href="<?the_permalink()?>"><span>إقرأ المزيد</span></a> <i class="fas fa-angle-right"></i></div></a></div><? $i = $i + 0.2; endwhile; ?></div></div><div class="paginationPages"> <?php paginate(); ?> <? $wp_query = null; $wp_query = $temp; ?></div></div><?if(YC_GetOpt('indexAd4') != '') { ?><center><?=YC_GetOpt('indexAd4')?></center> <? } ?> </section><section class="contactWithUs" data-style='background: url(<?=get_template_directory_uri()?>/Inc/img/bg-contact.jpg) no-repeat center center;'><div class="overlay"><div class="container"><div class="lineSeparator"><span>HELAL NET</span></div><h3 class="headline">إتصل بنا</h3><div class="rightSide"><form action="" method="post" class="wpcf7-form" novalidate="novalidate"> <? if( isset($_POST['username']) ) { ?> <?php $msg = $_POST['subject'];$msg = wordwrap($msg,70);mail(get_option('admin_email'),"رسالة من".$_POST['username'],$msg); ?><div class="alert alert-success">لقد تم إرسال رسالتك بنجاح وسوف يتم الرد عليك خلال 24 ساعة</div> <? } ?><div class="row"><div class="wgl_col-12"> <span class="wpcf7-form-control-wrap text-759"> <input type="text" name="username" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="اسمك الكامل"> </span></div><div class="wgl_col-12"> <span class="wpcf7-form-control-wrap email-613"> <input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="بريدك الإلكتروني"> </span></div><div class="wgl_col-12"> <span class="wpcf7-form-control-wrap textarea-497"><textarea name="subject" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="إكتب رسالتك"></textarea></span></div></div><p class="buttttton"> <span class="ajax-loader"><i class="fa fa-paper-plane"></i></span> <input type="submit" value="إرسال الرسالة " class="wpcf7-form-control wpcf7-submit"></p><div class="wpcf7-response-output wpcf7-display-none"></div></form></div><div class="leftSide"><div class="location"> <i class="fas fa-map-marker-alt"></i><h4>العنوان</h4><p><?=YC_GetOpt('contact_id')?></p></div><div class="mailing"> <i class="fas fa-envelope"></i><h4>البريد الإلكتروني</h4><p><?=YC_GetOpt('contact_email')?></p></div><div class="phoneNumber"> <i class="fas fa-phone"></i><h4>رقم الهاتف</h4><p><?=YC_GetOpt('contact_mob')?></p></div></div></div></div> </section><?php get_footer(); ?>