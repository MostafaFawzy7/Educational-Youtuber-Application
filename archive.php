<?php  get_header() ?>
<?php  wp_reset_query(); ?>
<?php  $obj = get_queried_object(); ?>

<div class="page-blog">

<?if(YC_GetOpt('catPageAd1') != '') { ?>

   <center class='ad300'><?=YC_GetOpt('catPageAd1')?></center>

<? } ?>

  <div class="container">
    <h2> <i class="fa fa-newspaper-o"></i> <?=$obj->name?> </h2>
      <?php 
  if( ! wp_is_mobile() ) {
  if( get_option( 'blog_1' ) !='' ):
  echo '<center>'.get_option( 'blog_1') . '</center>';
  endif;
  } else {
  if( get_option( 'blog_1_mob' ) !='' ):
  echo '<center>'.get_option( 'blog_1_mob') . '</center>';
  endif;
  } ?>

    <div class="allBlogs">
       <?php if($obj->taxonomy =='category') {  ?>
       <?php 
            query_posts( array(
                 'post_type'=>'post',
                 'posts_per_page'=>9,
                  'cat' => $obj->term_id
                ) );
            if(have_posts()):
               $i = 0;
              while(have_posts()):
                the_post(); ?>
                
                  <div class="service-section">
                      <a href="<?the_permalink()?>">
                        <div class="imgSection">
                          <?the_post_thumbnail()?>
                        </div>
                        <div class="authorTime">
                          <ul>
                            <li><i class="fas fa-user-alt"></i><a href="#"><?=get_the_author()?></a></li>
                            <li>
                               <i class="far fa-clock"></i>
                              منذ <?php echo human_time_diff( date('U', strtotime($post->post_date)), current_time('timestamp') ); ?>
                            </li>
                          </ul>
                        </div>
                        <div class="titleContent">
                            <a href="<?the_permalink()?>">
                              <h3><?the_title()?></h3>
                              <p><?=wp_trim_words(get_the_content(),15,'..')?></p>
                            </a>
                        </div>
                        <div class="postInfo">
                          <ul>
                            <li>
                                <span class="liCont">
                                  <i class="fas fa-chevron-circle-left"></i>
                                  <?php 
                                    foreach (array_slice(get_the_terms($post->ID,'category', ''),0,1) as $cat) {
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
                        <div class="socialShares">
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

                        <div class="readMore4">
                          <a href="<?the_permalink()?>"><span>إقرأ المزيد</span></a>
                          <i class="fas fa-angle-right"></i>
                        </div>

                      </a>
                  </div>

                <?
                $i = $i + 0.2;
              endwhile;
            endif;
            wp_reset_query();
      ?>
      <? } else { ?>
      <?php 
            query_posts( array(
                 'post_type'=>'album',
                 'posts_per_page'=>8,
                  'tax_category' => $obj->slug
                ) );
            if(have_posts()):
               $i = 0;
              while(have_posts()):
                the_post(); ?>
                
                    <div class="service-section">
                      <a href="<?the_permalink()?>">
                        <div class="imgSection">
                          <?the_post_thumbnail()?>
                        </div>
                        <div class="authorTime">
                          <ul>
                            <li><i class="fas fa-user-alt"></i><a href="#"><?=get_the_author()?></a></li>
                            <li>
                               <i class="far fa-clock"></i>
                              منذ <?php echo human_time_diff( date('U', strtotime($post->post_date)), current_time('timestamp') ); ?>
                            </li>
                          </ul>
                        </div>
                        <div class="titleContent">
                            <a href="<?the_permalink()?>">
                              <h3><?the_title()?></h3>
                              <p><?=wp_trim_words(get_the_content(),15,'..')?></p>
                            </a>
                        </div>
                        <div class="postInfo">
                          <ul>
                            <li>
                                <span class="liCont">
                                  <i class="fas fa-chevron-circle-left"></i>
                                  <?php 
                                    foreach (array_slice(get_the_terms($post->ID,'category', ''),0,1) as $cat) {
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
                        <div class="socialShares">
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

                        <div class="readMore4">
                          <a href="<?the_permalink()?>"><span>إقرأ المزيد</span></a>
                          <i class="fas fa-angle-right"></i>
                        </div>

                      </a>
                    </div>

                <?
                $i = $i + 0.2;
              endwhile;
            endif;
            wp_reset_query();
      ?>
       <? } ?>
    </div>
     <div class="pagination">
       <?=YC_ArchivePagination()?>
     </div>
    
    <?if(YC_GetOpt('catPageAd2') != '') { ?>

       <center class='ad300'><?=YC_GetOpt('catPageAd2')?></center>
    
    <? } ?>

  </div>
        
  <?php 
  if( ! wp_is_mobile() ) {
  if( get_option( 'blog_2' ) !='' ):
  echo '<center>'.get_option( 'blog_2') . '</center>';
  endif;
  } else {
  if( get_option( 'blog_2_mob' ) !='' ):
  echo '<center>'.get_option( 'blog_2_mob') . '</center>';
  endif;
  } ?>

</div>
<?php get_footer() ?>