<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <? if (is_home()) { ?> 
      <?php $title_home = get_option('s_title_home');
      if(!empty($title_home)){ ?>
        <title><?php echo $title_home; ?></title>
      <?php }else{ ?>
        <title><?php bloginfo('name'); ?></title>
      <?php } ?>
      <?php $description_home = get_option('s_description_home');
      if(!empty($description_home)){ ?>
        <meta name="description" itemprop="description" content="<?php echo $description_home; ?>" />
      <?php }else{ ?>
        <meta name="description" itemprop="description" content="<?php bloginfo('description'); ?>" />
      <?php } ?>
      <?php $tags_home = get_option('s_tags_home');
      if(!empty($tags_home)){ ?>
        <meta name="keywords" itemprop="keywords" content="<?php echo $tags_home; ?>" />
      <?php } ?>
      <link rel="canonical" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />        
      <?php $logo = get_option('logo'); ?>
      <?php if(!empty($logo)) { ?>
      <meta property="og:image" content="<?php echo $logo; ?>" />
      <?php } ?>
      <?php $title_home = get_option('s_title_home');
      if(!empty($title_home)){ ?>
        <meta property="og:title" content="<?php echo $title_home?>" />
      <?php }else{ ?>
      <meta property="og:title" content="<?php bloginfo('name'); ?>" />
      <?php } ?>
      <?php $description_home = get_option('s_description_home');
      if(!empty($description_home)){ ?>
        <meta property="og:description" content="<?php echo $description_home; ?>"/>
      <?php }else{ ?>
        <meta property="og:description" content="<?php bloginfo('description'); ?>"/>
      <?php } ?>
      <meta property="og:type" content="website" />
      <meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
      <?php $title_home = get_option('s_title_home');
      if(!empty($title_home)){ ?>
        <meta property="og:site_name" content="<?php echo $title_home; ?>" />
      <?php }else{ ?>
        <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
      <?php } ?>
  <? }else{ ?> 
    <?php wp_head(); ?>
  <? } ?> 

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonYSous">
  <link href="https://fonts.googleapis.com/css?family=Tajawal:700" rel="stylesheet">
    
  <style type="text/css">
      
      <?require(get_template_directory().'/Inc/css/owl.carousel.min.css');?>
      <?require(get_template_directory().'/Inc/css/owl.theme.default.min.css');?>
      <?php if(!wp_is_mobile()) {  ?>
        <?require(get_template_directory().'/style.css');?>
        <?require(get_template_directory().'/Inc/css/animate.css');?>
      <?php  } else { ?>
        <?require(get_template_directory().'/styleMobile.css');?>
      <?php } ?>
      section.mostViewed {
          overflow: hidden;
          padding: 30px 0 50px;
          margin-top: 50px;
      }
      section.contactWithUs {
          position: relative;
          background-size: cover !important;
          direction: rtl;
          font-family: sky,tahoma;
      }
      section.fixedPosts:after {
          content: '';
          display: block;
          height: 144px;
          width: 100%;
          background: url(<?=get_template_directory_uri()?>/Inc/img/black_pattern_upper@2x.png);
          position: absolute;
          bottom: 0;
          pointer-events: none;
          left: 0;
          right: 0;
          z-index: 99;
          transform: rotate(-180deg);
          background-position: center top;
          background-size: 610px 144px;
          background-repeat-x: repeat;
          background-repeat-y: no-repeat;
          filter: brightness(0) invert(1);
      }
    </style>


    <script type="text/javascript">

      <?require(get_template_directory().'/Inc/js/jquery-1.8.2.min.js');?>
      <?require(get_template_directory().'/Inc/js/owl.carousel.min.js');?>
      <?require(get_template_directory().'/Inc/js/wow.min.js');?>

      $(function(){

          $( window ).on('scroll',function(){
             if( $(this).scrollTop() > 10 ){
              
                $('[data-src]').each(function(){
               
                  $(this).attr('src',$(this).data('src'));
                  $(this).removeAttr('data-src');
                 
                });
                 
                $('[data-style]').each(function(){
               
                  $(this).attr('style',$(this).data('style'));
                  $(this).removeAttr('data-style');
                 
                });
              }
          });

          $('.allarticle').owlCarousel({
              items:3,
              loop:true,
              autoplay:true,
              nav:false,
              dots:true,
              responsive : {
                0:{
                  items:1
                },
                480:{
                  items:2
                },
                700:{
                  items:3
                },
                970:{
                  items:3
                }
              }
          });

          $('.allFixedPosts').owlCarousel({
              items:4,
              loop:true,
              autoplay:true,
              nav:false,
              dots:true,
              responsive : {
                0:{
                  items:1
                },
                480:{
                  items:2
                },
                700:{
                  items:3
                },
                970:{
                  items:3
                }
              }
          });

          $('.wpcf7-form input, .wpcf7-form textarea').each(function(els, el){
            $(el).focus(function(){
                $(this).css('background-color','rgba(255, 255, 255, 0.2)');
            });
            $(el).focusout(function(){
                $(this).css('background-color','rgba(255,255,255,.1)');
            });
          });

          $('.pagination a').each(function(){
            var str = $(this).attr('href');
            var num = $(this).html();
            var newHref = str.replace("/?s", "/page/"+num+"?s");
            $(this).attr('href',newHref);
          });

          $('.linksButton').click(function(e){
              e.preventDefault();
              $('.linksPage').addClass('popUp');
              var $counter = 5;
              setInterval(function(){ 
                $counter = $counter - 1;
                  $('.counting > span').text($counter);
                  if($counter == -1){
                    $('.counter').css('display','none');
                    $('.tableList').css('display','block');
                  }
              },1000);
          });

          $('.closePop').click(function(e){
              e.preventDefault();
              $('.linksPage').removeClass('popUp');
          });

          $('.downLoaad').click(function(){
              <? wpb_set_post_downloads(get_the_ID()); ?>
          });

          $('.icon').click(function(e){
            e.preventDefault();
            $('#search-box').toggleClass('active');
          });

          var fixedHeader = $('header');
          $(window).on('scroll' , function(){
            if($(this).scrollTop() > 40) {
              fixedHeader.addClass('fixedHeader');
            }
            if($(this).scrollTop() < 40) {
              fixedHeader.removeClass('fixedHeader');
            }
          });

          $('.bars').click(function(){
            $('.mobileMenuu').addClass('translating');
          });

          $('.closeMenu').click(function(){
            $('.mobileMenuu').removeClass('translating');
          });


      });



      new WOW().init();

    </script>

 </head>