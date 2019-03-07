var $ = jQuery;

$(document).ready(function () {
    
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
        
        
        $('#init >div:nth-child(even)').each(function() {
            $(this).find('.image').prependTo($(this));
        });
        
    }
    
});

