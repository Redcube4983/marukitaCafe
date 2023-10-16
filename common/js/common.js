// JavaScript Document
$(window).on('load resize', function() {  
    $('#global-nav .global-nav.parent .arrow').off();
    $('#global-nav .global-nav.parent').off();
    $('#footer-sitemap .footer-sitemap li.parent .arrow').off();
  if (window.matchMedia('(max-width:767px)').matches) {
    // SPの処理
        $('#global-nav .global-nav.parent .arrow').on('click', function(){
            $(this).parent().next('.child').toggleClass('open').slideToggle(300);
            $(this).toggleClass('open');
            if ($(this).next('.child').hasClass('open')) {
              //open表示中の場合
              $(this).next('.child').css('display', '');
            } else {
              //open非表示の場合
              
            }
         });
   
        $('#footer-sitemap .footer-sitemap li.parent .arrow').on('click', function(){
            $(this).parent().next('.child').toggleClass('open').slideToggle(300);
            $(this).toggleClass('open');
            if ($(this).next('.child').hasClass('open')) {
              //open表示中の場合
              $(this).next('.child').css('display', '');
            } else {
              //open非表示の場合
              
            }
         });

  } else if (window.matchMedia('(max-width:959px)').matches) {
    // TABの処理
        $('#global-nav .global-nav.parent .arrow').on('click', function(){
            $(this).parent().next('.child').toggleClass('open').slideToggle(300);
            $(this).toggleClass('open');
            if ($(this).next('.child').hasClass('open')) {
              //open表示中の場合
              $(this).next('.child').css('display', '');
            } else {
              //open非表示の場合
              
            }
         });
            if ($('.toggle-wrap').hasClass("open")) {
              //open表示中の場合
              $(".global-nav").removeClass('open');
            } else {
              //open非表示の場合
              $("body").removeClass('fixed');
            }
        
        $('#footer-sitemap .footer-sitemap li.parent .arrow').on('click', function(){
            $(this).parent().next('.child').toggleClass('open').slideToggle(300);
            $(this).toggleClass('open');
            if ($(this).next('.child').hasClass('open')) {
              //open表示中の場合
              $(this).next('.child').css('display', '');
            } else {
              //open非表示の場合
              
            }
         });
  } else if (window.matchMedia('(min-width:960px)').matches) {
    // PCの処理
        var ua = navigator.userAgent;
        if (ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) {
          // スマートフォン用コード
            $('#global-nav .global-nav.parent .arrow').on('click', function(){
            $(this).parent().next('.child').toggleClass('open').slideToggle(300);
            $(this).toggleClass('open');
            if ($(this).next('.child').hasClass('open')) {
              //open表示中の場合
              $(this).next('.child').css('display', '');
            } else {
              //open非表示の場合

            }
            });
            
 
          $('#footer-sitemap .footer-sitemap li.parent .arrow').on('click', function(){
            $(this).parent().next('.child').toggleClass('open').slideToggle(300);
            $(this).toggleClass('open');
            if ($(this).next('.child').hasClass('open')) {
              //open表示中の場合
              $(this).next('.child').css('display', '');
            } else {
              //open非表示の場合
              
            }
          });
        } else if (ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0) {
          // タブレット用コード
            $('#global-nav .global-nav.parent .arrow').on('click', function(){
            $(this).parent().next('.child').toggleClass('open').slideToggle(300);
            $(this).toggleClass('open');
            if ($(this).next('.child').hasClass('open')) {
              //open表示中の場合
              $(this).next('.child').css('display', '');
            } else {
              //open非表示の場合

            }
            });
            if ($('.toggle-wrap').hasClass("open")) {
              //open表示中の場合
             
              $(".global-nav").removeClass('open');
            } else {
              //open非表示の場合
              $("body").removeClass('fixed');
            }
            
            $('.footer-sitemap li.main-navi.parent .arrow').on('click', function(){
            $(this).parent().next('.child').toggleClass('open').slideToggle(300);
            $(this).toggleClass('open');
            if ($(this).next('.child').hasClass('open')) {
              //open表示中の場合
              $(this).next('.child').css('display', '');
            } else {
              //open非表示の場合
              
            }
            });
            
        } else {
          // PC用コード
            $('#global-nav .global-nav.parent .arrow').removeClass('open');
            $('#global-nav .global-nav.parent .child').css('display', 'none');
            $('#global-nav .global-nav.parent').hover(function(){
                $("ul:not(:animated)", this).slideDown("fast");
            }, function(){
                $(".child",this).slideUp("fast");
            });
            if ($('.toggle-wrap').hasClass("open")) {
              //open表示中の場合
              $('body').removeClass('fixed').css('top',0 + 'px');
              $('#header-right').removeClass('open').css('display', 'none');
              $('.toggle-wrap').removeClass('open');
                
            } else {
              //open非表示の場合
              $("body").removeClass('fixed');
            }
        }
  }
});


jQuery(function($){
    var scrollPos;//グローバルで初期かしておかないと上にもどっちゃう
    $('#header-toggle').on('click', function() {
        $('#header-right').toggleClass('open').slideToggle(500);
        $('.toggle-wrap').toggleClass('open');
        if($('body').hasClass('fixed')){
            $('body').removeClass('fixed').css('top',0 + 'px');
            window.scrollTo( 0 , scrollPos );//初期化
            $('.animate-right').removeClass('fixed');
            $('.animate-bottom').removeClass('fixed');
            $('.animate-left').removeClass('fixed');
            $('.animate-fade').removeClass('fixed');
        }else{
            scrollPos = $(window).scrollTop();//現在のスクロール位置
            $('body').addClass('fixed').css('top',-scrollPos + 'px');
            $('.animate-right').addClass('fixed');
            $('.animate-bottom').addClass('fixed');
            $('.animate-left').addClass('fixed');
            $('.animate-fade').addClass('fixed');
        }
    });
});


$(document).ready(function() {
    var list = $('.list').innerWidth();
    var panNavi = $('#panNavi').innerWidth();
    var scrollLeft = list - panNavi;
    $('.list').scrollLeft(list - scrollLeft);
});
