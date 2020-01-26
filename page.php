<?
if( $_POST['sendcomment'] ) { ?>
<?
if( is_user_logged_in() ) {
global $current_user;
$data = array(
'comment_post_ID' => $post->ID,
'comment_author' => $current_user->user_login,
'comment_author_email' => $current_user->user_email,
'comment_content' => $_POST['comment'],
'user_id' => $current_user->ID,
'comment_date' => $time,
'comment_approved' => 1,
);
}else {
$current_user = get_userdata(10);
$data = array(
'comment_post_ID' => $post->ID,
'comment_author' => $current_user->user_login,
'comment_author_email' => $current_user->user_email,
'comment_content' => $_POST['comment'],
'user_id' => $current_user->ID,
'comment_date' => $time,
'comment_approved' => 1,
);
}
wp_insert_comment($data);
?>
<? header('Location: '.get_the_permalink().''); ?>
<? } ?>
<?php get_header(); ?>
<? wpb_set_post_views(get_the_ID()); ?>
<? wp_reset_query(); ?>

<div class="breadCrump">
  <div class="container">
    <ul>
      <li><a class="wow fadeInRight" href="<?=home_url()?>">الرئيسية</a><i class="fas fa-angle-double-left"></i></li>
      <li class="wow fadeInRight"><? the_title() ?></li>
    </ul>
  </div>
</div>

  <section class="single">
    <div class="container">
      <div class="singleContainer">
        <div class="right">   
          <h1 class="titleNewsSingle wow fadeInRight"><a href="<?the_permalink(get_the_ID())?>"><?php the_title() ?></a></h1>
           <!-- 
            ===================
            ==== post info 
            ====================
           -->

           <?if(YC_GetOpt('singleAd1') != '') { ?>

             <center><?=YC_GetOpt('singleAd1')?></center>
          
           <? } ?> 

           <div class="informat">

              <div class="back">
                 <?if(get_the_post_thumbnail_url() != '') { ?>
                    <img data-src="<?php the_post_thumbnail_url('single1') ?>">
                  <? } ?>
                 <span class="image-title"><?=YC_GetOpt('image-news-title')?></span>
              </div>

              <div class="postMediaInfo">
                  <div class="timeInfoDiv wow fadeInRight">
                      <i class="far fa-clock"></i>
                      منذ <?php echo human_time_diff( date('U', strtotime($post->post_date)), current_time('timestamp') ); ?>
                  </div>
                  <div class="postInfoSingle wow fadeInLeft">
                      <span class="commentsNumber"><i class="fas fa-comments"></i> <?=get_comments_number()?></span>
                      <span class="downloaded"><i class="fas fa-arrow-circle-down"></i><?=(int)get_post_meta($post->ID,'download',1)?></span>
                      <span class="views">
                          <i class="fa fa-eye"></i> 
                          <?=(get_post_meta($post->ID,'views',1) == '' ? 0 : get_post_meta($post->ID,'views',1))?>
                      </span>
                      <span class="publisher"><i class="fas fa-user-alt"></i> <a href="#"><?=get_the_author()?></a></span> 
                  </div>
                  <div class="socialShares4">
                    <ul>
                        <li class="social-facebook4 wow fadeInRight">
                            <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank">
                                <i class="fab fa-facebook-f"></i> فيس بوك
                            </a>
                        </li>
                        
                        <li class="social-twitter4 wow fadeInRight">
                            <a href="http://twitter.com/share?url=<? the_permalink(); ?>" target="_blank">
                                <i class="fab fa-twitter"></i> تويتر
                            </a>
                        </li>
                        
                        <li class="social-whatsapp4 wow fadeInRight">
                            <a href=https://web.whatsapp.com://send?text=<? the_title(); ?> - <? the_permalink(); ?>>
                                <i class="fab fa-whatsapp"></i> واتس اب 
                            </a>
                        </li>
                        
                        <div class="clr"></div>

                    </ul>
                  </div>
              </div>
           
           </div> 

          <?if(YC_GetOpt('singleAd3') != '') { ?>

             <center><?=YC_GetOpt('singleAd3')?></center>
          
          <? } ?>
          
          <? wp_reset_query(); ?>

          <div class="content">
              <h2><?the_title()?></h2>
              <p class="contentText"><? the_content(); ?></p>  
          </div>

        

          <?if(YC_GetOpt('singleAd4') != '') { ?>

             <center><?=YC_GetOpt('singleAd4')?></center>
          
          <? } ?>  

          <div class="video">
              <?=get_post_meta($post->ID,'video',1)?>
          </div>

          <?if(YC_GetOpt('singleAd5') != '') { ?>

             <center><?=YC_GetOpt('singleAd5')?></center>
          
          <? } ?>
              <!--  
               =============
                comments
                ==============
               -->             
              
              <div class="postComments">
                  <?php comments_template(); ?>   
              </div>

              <?if(YC_GetOpt('singleAd6') != '') { ?>

                 <center><?=YC_GetOpt('singleAd6')?></center>
              
              <? } ?>

              <?if(YC_GetOpt('singleAd7') != '') { ?>

                 <center><?=YC_GetOpt('singleAd7')?></center>
              
              <? } ?>

            

              <div class="Inner-single" id="CatBox">    
                  <div  class="singlePane active">
                    <div class="side-title  wow fadeInRight"><h3>مقالات ذات صله</h3></div>
                      <div class="articles view1  wow fadeInRight">
                        <div class="allarticle owl-carousel owl-theme">
                              <? foreach (get_posts(array('post_type'=>'post','posts_per_page'=>12)) as $post) { setup_postdata($post); ?>
                                <div class="article">
                                    <a href="<? the_permalink(); ?>" title="<? the_title(); ?>">
                                      <?if(has_post_thumbnail()) { ?>
                                         <div class="img-elem"><?=get_the_post_thumbnail();?></div>
                                      <? } else { ?>
                                          <div class="img-elem"><img data-src="<?=YC_GetOpt('defultImg')?>"></div>
                                      <? } ?> 
                                       <div class="title"><? the_title(); ?></div>
                                       <div class="time">
                                          <i class="far fa-clock"></i>
                                          منذ <?php echo human_time_diff( date('U', strtotime($post->post_date)), current_time('timestamp') ); ?>
                                       </div>
                                    </a>
                                </div>
                              <? } ?>
                        </div>
                      </div>
                  </div>
              </div>

              <div class="linksButton">
                  <a href="#"><i class="fas fa-external-link-alt"></i> عرض الروابط</a>
              </div>

              <?if(YC_GetOpt('linkPageAd8') != '') { ?>

                  <center><?=YC_GetOpt('linkPageAd8')?></center>
            
              <? } ?>

              <div class="linksPage">

                  <div class="closePop">
                      <a href="#">
                          <i class="fas fa-times"></i>
                      </a>
                  </div>

                  <div class="container">
                    
                      <? wp_reset_query(); ?>

                      <!-- Download Links And Information   -->

                      <div class="tableList">
                      
                          <?if(YC_GetOpt('linkPageAd5') != '') { ?>

                              <center><?=YC_GetOpt('linkPageAd5')?></center>
                        
                          <? } ?>

                          <?if(YC_GetOpt('linkPageAd6') != '') { ?>

                             <center><?=YC_GetOpt('linkPageAd6')?></center>
                          
                          <? } ?>
                          
                          <? if( !empty(get_post_meta($post->ID,'downloads',1)) ){ ?> 
                            <div class="story downloadss">
                              <h2>روابط التحميل</h2>
                              <div>
                                <ul class="table">
                                  <li>
                                    <span>#</span>
                                    <span>إسم الملف</span>
                                    <span>ملحوظة</span>
                                    <span>حجم الملف</span>
                                    <span>روابط التحميل </span>
                                  </li>
                                  <? $i = 1;?>
                                    <? foreach( get_post_meta($post->ID,'downloads',1) as $link){ ?>
                                    <? if($link['name'] !='') { ?>
                                      <li>
                                        <span><?=$i?></span>
                                        <span><?=$link['name']?></span>
                                        <span><?=$link['note']?></span>
                                        <span><?=$link['size']?></span>
                                        <span class="downLoaad"><a target="_blank" href="<?=$link['link']?>">إضغط هنا لدخول الرابط</a></span>
                                      </li>
                                      <? } ?>
                                  <? $i++; } ?>
                                </ul>
                              </div>
                            </div>
                          <? } ?>

                          <?if(YC_GetOpt('linkPageAd7') != '') { ?>

                              <center><?=YC_GetOpt('linkPageAd7')?></center>
                      
                          <? } ?>
                          
                          <?if(YC_GetOpt('linkPageAd8') != '') { ?>

                              <center><?=YC_GetOpt('linkPageAd8')?></center>
                          
                          <? } ?>
                        

                      </div>

                      <div class="counter">
                      
                          <?if(YC_GetOpt('linkPageAd1') != '') { ?>

                             <center><?=YC_GetOpt('linkPageAd1')?></center>
                          
                          <? } ?>

                          <?if(YC_GetOpt('linkPageAd2') != '') { ?>

                             <center><?=YC_GetOpt('linkPageAd2')?></center>
                          
                          <? } ?>

                          <div class="caution">من فضلك إنتظر  ...</div>
                          <div class="counting"><span>5</span></div>
                          
                          <?if(YC_GetOpt('linkPageAd3') != '') { ?>

                             <center><?=YC_GetOpt('linkPageAd3')?></center>
                          
                          <? } ?>

                          <?if(YC_GetOpt('linkPageAd4') != '') { ?>

                             <center class='afterCounter'><?=YC_GetOpt('linkPageAd4')?></center>
                          
                          <? } ?>
                
                      </div>

                  </div>

              </div>

        </div>

          <!------------------------------------------------- Left Side List ------------------------------------------------->

        <div class="left">

              <?if(YC_GetOpt('singleAd9') != '') { ?>

                 <center class='ad300'><?=YC_GetOpt('singleAd9')?></center>
              
             <? } ?>

            <h3 class="choosen"><i class="fa fa-cog"></i>مواضيع مختارة</h3>
          
            <ul class="sideList">
              <?php 
                 query_posts(array(
                      'post_type'=>'post', 
                      'orderby' => 'rand',
                      'posts_per_page'=>6
                      )); ?>
              <?php 
                 if(have_posts()) {
                    while(have_posts()) {
                       the_post(); ?>
                    <div class="service-section class7 classs7 classSingle">
                      <a href="<?the_permalink()?>">
                        <div class="imgSection class6 classIpad">
                          <?the_post_thumbnail('sideSing1')?>
                        </div>
                        <div class="authorTime class5">
                          <ul>
                            <li><i class="fas fa-user-alt"></i><a href="#"><?=get_the_author()?></a></li>
                            <li>
                               <i class="far fa-clock"></i>
                              منذ <?php echo human_time_diff( date('U', strtotime($post->post_date)), current_time('timestamp') ); ?>
                            </li>
                          </ul>
                        </div>
                        <div class="titleContent class4">
                            <a href="<?the_permalink()?>">
                              <h3><?the_title()?></h3>
                              <p><?=wp_trim_words(get_the_content(),15,'..')?></p>
                            </a>
                        </div>
                        <div class="postInfo class3">
                          <ul>
                            <li>
                                <span class="liCont">
                                  <i class="fas fa-chevron-circle-left"></i>
                                  <?php 
                                    foreach (array_slice(get_the_terms($post->ID,'category' , ''),0,1) as $cat) {
                                      $catid = $cat->term_id;
                                      $catname = $cat->name; ?>
                                      <a href="<?=get_term_link($cat)?>"><?=$cat->name?></a>
                                  <? } ?>
                                </span>
                            </li>
                            
                            <li>
                              <span class="liCont">
                                <i class="fas fa-arrow-circle-down"></i><?=(int)get_post_meta($post->ID,'download',1);?>
                              </span>
                            </li>
                            
                            <li><span class="liCont"><i class="fas fa-comments"></i><?=get_comments_number()?></span></li>
                            <li>
                              <span class="liCont">
                                <span class="views3">
                                    <i class="fa fa-eye"></i> 
                                    <?=(get_post_meta($post->ID,'views',1) == '' ? 0 : get_post_meta($post->ID,'views',1))?>
                                </span>
                              </span>
                            </li>
                          </ul>
                        </div>
                        <div class="socialShares class2">
                            <ul>
                                <li class="social-facebook">
                                    <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                
                                <li class="social-twitter">
                                    <a href="http://twitter.com/share?url=<? the_permalink(); ?>" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                
                                <li class="social-whatsapp">
                                    <a href=https://web.whatsapp.com://send?text=<? the_title(); ?> - <? the_permalink(); ?> target='_blank'>
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </li>
                                
                                <div class="clr"></div>
                            </ul>
                        </div>

                        <div class="readMore4 class1">
                          <a href="<?the_permalink()?>"><span>إقرأ المزيد</span></a>
                          <i class="fas fa-angle-right"></i>
                        </div>

                      </a>
                    </div> 
              <? } } wp_reset_query(); ?>
            </ul>

            <?if(YC_GetOpt('singleAd10') != '') { ?>

               <center class='ad300'><?=YC_GetOpt('singleAd10')?></center>
            
            <? } ?> 

          </div>
        </div>
      </div>
  </section>
  
<?php get_footer(); ?>
