var $ = jQuery;

$(document).ready(function () {
    let productsLS = JSON.parse(localStorage.getItem('carrito'));
    let count = productsLS.length;
    document.getElementById("count").innerHTML = count;  
    
    $('.go-to').click(function () {
		$("html, body").delay(100).animate({scrollTop: $('#init').offset().top }, 1200);
		return false;
	});
    
    $('.go-to-top').click(function () {
		$("html, body").delay(100).animate({scrollTop: $('#app').offset().top }, 1200);
		return false;
	});
    
    if ($('.circular-chart').length){
        $('.circular-chart').waypoint(function() {
            
            var $this = $(this.element),
                percentage = $this.data('percentage');
            
            $($this).find('.circle').attr('stroke-dasharray', percentage + ', 100').addClass('animate');
            
            $({ Counter: 0 }).animate({ Counter: percentage }, {
                duration: 2000,
                easing: 'swing',
                step: function () {
                    if (percentage == Math.floor(percentage)) {
                        $($this).find('.percentage').text(Math.ceil(this.Counter*1) + '%');
                    } else {
                        $($this).find('.percentage').text(Math.ceil(this.Counter*10)/10 + '%');
                    }
                }
            });
            
            this.destroy();
            
        }, { offset: '80%' });
    }
    
    if ($('.all-products').length){
        
        checkWidth();
        $(window).resize(checkWidth);
        
    }
    
    $(".toggle .title").click(function(){
        $(this).next().slideToggle(300, function(){
            $(this).parent().toggleClass('active', $(this).is(':visible'));
        });
    });

    //Iniciar slider
    if ($('.slider').length) {
        $('.slider').slick({
            accessibility: false,
            adaptiveHeight: true
        });
    }
    //Fin

    
    
    $(".quantity input").inputFilter(function(value) {
        return /^\d*$/.test(value) && (parseInt(value) > 0); });
    
    // $(".quantity .inc").click(function(){
    //     var input = $(this).parent().find('input'),
    //         value = input.val();
    //     value++;
    //     input.val(value);
    // });
    
    // $(".quantity .des").click(function(){
    //     var input = $(this).parent().find('input'),
    //         value = input.val();
    //     value--;
    //     if ( value >= 1 ) {
    //         input.val(value);
    //     }
    // });
    
});

(function($) {
  $.fn.inputFilter = function(inputFilter) {
    return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      }
    });
  };
}(jQuery));

function checkWidth() {
    
    var windowsize = $(window).width();
    
    if (windowsize > 768) {
        
        $('#init >div:nth-child(even)').each(function() {
            $(this).find('.image').prependTo($(this));
        });
        
    } else {
        
        $('#init >div:nth-child(even)').each(function() {
            $(this).find('.image').appendTo($(this));
        });
        
    }
}