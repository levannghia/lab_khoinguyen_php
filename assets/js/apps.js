/* Validation form */
ValidationFormSelf("validation-newsletter");
ValidationFormSelf("validation-cart");
ValidationFormSelf("validation-user");
ValidationFormSelf("validation-contact");

/* Exists */
$.fn.exists = function(){
    return this.length;
};

/* Back to top */
NN_FRAMEWORK.BackToTop = function(){
    $(window).scroll(function(){
        if(!$('.scrollToTop').length) $("body").append('<div class="scrollToTop"><img src="'+GOTOP+'" alt="Go Top"/></div>');
        if($(this).scrollTop() > 100) $('.scrollToTop').fadeIn();
        else $('.scrollToTop').fadeOut();
    });

    $('body').on("click",".scrollToTop",function() {
        $('html, body').animate({scrollTop : 0},800);
        return false; 
    });
};

/* Alt images */
NN_FRAMEWORK.AltImages = function(){
    $('img').each(function(index, element) {
        if(!$(this).attr('alt') || $(this).attr('alt')=='')
        {
            $(this).attr('alt',WEBSITE_NAME);
        }
    });
};

/* Fix menu */
NN_FRAMEWORK.FixMenu = function(){
    $(window).scroll(function(){
        if($(window).scrollTop() >= $(".header").height()) $(".menu").css({position:"fixed",left:'0px',right:'0px',top:'0px',zIndex:'999'});
        else $(".menu").css({position:"relative"});
    });
};

/* Mmenu */
NN_FRAMEWORK.Mmenu = function(){
    if($("#menu_bootstrap").exists())
    {
        $('#menu_bootstrap').mmenu({
            extensions	: ['position-left','fx-menu-slide', 'shadow-panels', 'listview-large' ],
            iconPanels	: false,
            counters	: true,
            keyboardNavigation : {
                enable	: true,
                enhance	: true
            },
            navbar : {
                title : 'Menu'
            },
            navbars     : true
        }, {
            searchfield : {
                clear : true,
            }
        });
    }
};

/* Tabs */
NN_FRAMEWORK.Tabs = function(){
    if($(".ul-tabs-pro-detail").exists())
    {
        $(".ul-tabs-pro-detail li").click(function(){
            var tabs = $(this).data("tabs");
            $(".content-tabs-pro-detail, .ul-tabs-pro-detail li").removeClass("active");
            $(this).addClass("active");
            $("."+tabs).addClass("active");
        });
    }
};

/* Photobox */
NN_FRAMEWORK.Photobox = function(){
    if($(".album-gallery").exists())
    {
        $('.album-gallery').photobox('a',{thumbs:true,loop:false});
    }
};

/* Search */
NN_FRAMEWORK.Search = function(){
    if($(".icon-search").exists())
    {
        $(".icon-search").click(function(){
            if($(this).hasClass('active'))
            {
                $(this).removeClass('active');
                $(".search-grid").stop(true,true).animate({opacity: "0",width: "0px"}, 200);   
            }
            else
            {
                $(this).addClass('active');                            
                $(".search-grid").stop(true,true).animate({opacity: "1",width: "230px"}, 200);
            }
            document.getElementById($(this).next().find("input").attr('id')).focus();
            $('.icon-search i').toggleClass('fa fa-search fa fa-times');
        });
    }
};

/* Videos */
NN_FRAMEWORK.Videos = function(){
    if($(".video").exists())
    {
        $('[data-fancybox="video"]').fancybox({
            transitionEffect: "fade",
            transitionDuration: 800,
            animationEffect: "fade",
            animationDuration: 800,
            arrows: true,
            infobar: false,
            toolbar: true,
            hash: false
        });
    }

    if($(".flip-items").exists())
    {
        $('[data-fancybox="video"]').fancybox({
            transitionEffect: "fade",
            transitionDuration: 800,
            animationEffect: "fade",
            animationDuration: 800,
            arrows: true,
            infobar: false,
            toolbar: true,
            hash: false
        });
    }
};

/* Owl pro detail */
NN_FRAMEWORK.OwlProDetail = function(){
    if($(".owl-thumb-pro").exists())
    {
        $('.owl-thumb-pro').owlCarousel({
            items: 4,
            lazyLoad: false,
            mouseDrag: true,
            touchDrag: true,
            margin: 10,
            smartSpeed: 250,
            nav: false,
            dots: false
        });
        $('.prev-thumb-pro').click(function() {
            $('.owl-thumb-pro').trigger('prev.owl.carousel');
        });
        $('.next-thumb-pro').click(function() {
            $('.owl-thumb-pro').trigger('next.owl.carousel');
        });
    }
};



NN_FRAMEWORK.iniAll = function(){
    $(document).scroll(function () {
        var $nav = $(".menu");
        var $header = $("header");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        $header.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });

    function isEmpty(o,t){return""==o&&(void 0!==t&&alert(t),!0)}
    $("#btn_checknb").click(function(){
        var id = $("#mathe").val();
        var name = $("#tenkh").val();
        if(isEmpty($('#mathe').val(), "Nhập mã thẻ.")){ $('#mathe').focus(); return false; }  
        window.location = "bao-hanh?id_card=" + id +"&name="+ name;
    });

    if($("#counter").exists())
    {
        var isCouter = 0;
        $(window).scroll(function() {
            var oTop = $('#counter').offset().top - window.innerHeight;
            if (isCouter == 0 && $(window).scrollTop() > oTop) {
                $('.counter-value').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                    },
                    {
                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                    }
                    });
                });
                isCouter = 1;
            }
        });
}
    
};


NN_FRAMEWORK.Slide = function(){
    if($(".slide__slideshow").exists())
    {
        var slider = tns({
            container: '.slide__slideshow',
            items: 1,
            slideBy: 1,
            loop: true,
            rewind: true,
            autoplay: true,
            mouseDrag: true,
            arrowKeys: true,
            axis: 'horizontal', // horizontal | vertical
            gutter: 0,
            edgePadding: 0,
            speed: 500,
            autoplayTimeout: 5000,
            autoplayButtonOutput: false,
            nav: false,
            controls: false,
          });

        $('.slide_prev').click(function() {
            slider.goTo("prev");
            
        });
        $('.slide_next').click(function() {
            slider.goTo("next");
        });
    }

    if($(".slide__news").exists())
    {
        var slider5 = tns({
            container: '.slide__news',
            items: 3,
            slideBy: 1,
            loop: true,
            rewind: true,
            autoplay: true,
            mouseDrag: true,
            arrowKeys: true,
            axis: 'vertical', // horizontal | vertical
            gutter: 0,
            edgePadding: 0,
            speed: 500,
            autoplayTimeout: 5000,
            autoplayButtonOutput: false,
            nav: false,
            controls: false,
          });
    }

    if($(".slide__feedback").exists())
    {
        var slide_feedback = tns({
            container: '.slide__feedback',
            items: 2,
            slideBy: 1,
            loop: true,
            rewind: true,
            autoplay: true,
            mouseDrag: true,
            arrowKeys: true,
            axis: 'vertical', // horizontal | vertical
            gutter: 0,
            edgePadding: 0,
            speed: 500,
            autoplayTimeout: 5000,
            autoplayButtonOutput: false,
            nav: false,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                    gutter: 10
                },
                700: {
                    items: 2,
                },
                900: {
                    items: 2,
                }
            }
          });
    }

    if($(".doitac_list").exists())
    {
        var slide_doitac = tns({
            container: '.doitac_list',
            items: 5,
            slideBy: 1,
            loop: true,
            rewind: true,
            autoplay: true,
            mouseDrag: true,
            arrowKeys: true,
            axis: 'horizontal', // horizontal | vertical
            gutter: 12,
            edgePadding: 0,
            speed: 500,
            autoplayTimeout: 5000,
            autoplayButtonOutput: false,
            nav: false,
            controls: false,
            responsive: {
                0: {
                    items: 2,
                    gutter: 10
                },
                700: {
                    items: 3,
                    gutter: 10
                },
                900: {
                    items: 5,
                    gutter: 12,
                }
            }
          });
    }
}

if($(".show_spnb").exists())
{
    $(".show_spnb").each(function(){
        var list = $(this).data("list");
        loadPagingAjax("ajax/ajax_product.php?perpage=8&idList="+list,'.show_spnb-'+list);
    })
}

NN_FRAMEWORK.Flipster = function(){
    if($(".flipster").exists())
    {
        var flipContainer = $('.flipster'),
            flipItemContainer = flipContainer.find('.flip-items'),
            flipItem = flipContainer.find('li');

        flipContainer.flipster({
            itemContainer: flipItemContainer,
            itemSelector: flipItem,
            loop: 2,
            start: 2,
            style: 'infinite-carousel',
            scrollwheel: true,
            // nav: 'after',
            // buttons: true,
            autoplay: 5000,
            touch: true,
        });
    }
}

/* Ready */
$(document).ready(function(){
    NN_FRAMEWORK.AltImages();
    NN_FRAMEWORK.BackToTop();
    NN_FRAMEWORK.Mmenu();
    NN_FRAMEWORK.OwlProDetail();
    NN_FRAMEWORK.Tabs();
    NN_FRAMEWORK.Videos();
    NN_FRAMEWORK.Photobox();
    NN_FRAMEWORK.Flipster();
    NN_FRAMEWORK.Slide();
    NN_FRAMEWORK.Search();
    NN_FRAMEWORK.iniAll();
});