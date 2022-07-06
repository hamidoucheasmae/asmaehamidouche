/*

Titan Slider JS
Version 1.0
Made by Themanoid

*/

(function($) {

    "use strict"; // Strict mode

    var slider      = $('.slider'),
        slides      = slider.find('.slides'),
        slide       = slider.find('.slide'),
        sliderWidth = slider.width(),
        len         = slide.length,
        current     = 1,
        first       = slide.filter(':first'),
        last        = slide.filter(':last'),
        mousePos    = { x: -1, y: 0 };

    first.before(last.clone(true));
    last.after(first.clone(true));

    slider.attr('data-index', current);
    slide.eq(0).addClass('active');

    if(slide.eq(0).hasClass('dark'))
      $('body').addClass('dark-hero');

    slider.on('mousemove', function(e){
      var s       = $(this),
          sOffset = s.offset();

      mousePos.x = e.pageX - sOffset.left;
      mousePos.y = e.pageY - sOffset.top;

      if(mousePos.x > s.width()/2) {
        s.find('.slides').css('cursor', 'url(/modules/titan-slider/slide-right-dark.png) 5 -25, e-resize');
        if($('body').hasClass('dark-hero'))
          s.find('.slides').css('cursor', 'url(/modules/titan-slider/slide-right.png) 5 -25, e-resize');
        s.addClass('next').removeClass('previous');
      } else {
        s.find('.slides').css('cursor', 'url(/modules/titan-slider/slide-left-dark.png) 5 -25, w-resize');
        if($('body').hasClass('dark-hero'))
          s.find('.slides').css('cursor', 'url(/modules/titan-slider/slide-left.png) 5 -25, w-resize');
        s.addClass('previous').removeClass('next');
      }
      if(mousePos.y > (s.height() - 15)) {
        s.css('cursor', 'default');
      }
    });

    slider.on('click', function(){
      var slider      = $(this),
          cycle       = false,
          delta       = slider.hasClass('next') ? 1 : -1,
          slides      = slider.find('.slides'),
          slide       = slider.find('.slide'),
          sliderWidth = slider.width();

      current += delta;

      slide.removeClass('active');
      slide.eq(current).addClass('active');

      cycle = !!(current === 0 || current > len);
      if (cycle) {
        current = (current === 0)? len : 1;
        slide.eq(current).addClass('active');
      }

      slides.velocity({left: "+=" + (-sliderWidth * delta) }, { duration: '1000', easing: 'easeInOutQuart', complete: function() {
        slide.eq(current).find('video').trigger('pause');

        if (cycle) {
          slides.velocity({left: -sliderWidth * current}, { duration: '0'}); // Give new position
        }

        slider.attr('data-index', current);

        if(slide.eq(current).has('video'))
          slide.eq(current).find('video').trigger('play');

        if(slide.eq(current).hasClass('dark'))
          $('body').addClass('dark-hero');
        else
          $('body').removeClass('dark-hero');
      }});
    });

    $(window).on('resize', function(){
      slider.each(function(e){
        var thisSlider      = $(this),
            thisSlides      = thisSlider.find('.slides'),
            thisSlide       = thisSlider.find('.slide'),
            thisSliderWidth = thisSlider.width(),
            curSlide        = parseInt(thisSlider.attr('data-index')),
            thisLen         = thisSlide.length,
            thisSlidesWidth = thisLen*thisSlider.width();

        thisSlides.width(sliderWidth*thisLen);
        thisSlide.width(100/thisLen+'%');

        thisSlides.css({ left: -thisSliderWidth * curSlide, width: thisSlidesWidth });
      });
    });

})(jQuery);
