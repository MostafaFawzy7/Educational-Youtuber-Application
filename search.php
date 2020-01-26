<?php  get_header() ?>
<?php  wp_reset_query(); ?>
<div class="page-blog">

  <div class="container">

    <?if(YC_GetOpt('searchPageAd1') != '') { ?>

       <center class='ad300'><?=YC_GetOpt('searchPageAd1')?></center>
    
    <? } ?>
    
    <h2> نتائج البحث عن  / <? the_search_query() ?> </h2>
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

      <? if (have_posts()) {
            while(have_posts()) {
              the_post();  
      ?>

        <div class="service-section wow fadeInUp">
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

        <? } } ?>
    
    </div>
     
    <div class="pagination">
        <?=YC_SearchPagination() ?>
    </div> 


    <?if(YC_GetOpt('searchPageAd2') != '') { ?>

       <center class='ad300'><?=YC_GetOpt('searchPageAd2')?></center>
    
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