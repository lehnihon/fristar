( function( $ ) {
	$(function() {

		$('.calculadora').on('click', function(){
			var area = $('.area').val()*685.5;
			var pessoas = $('.pessoas').val()*600;
			var aparelhos = $('.aparelhos').val()*600;
			var paredes = $('.paredes').val()*160;
			var vidros = $('.vidros').val()*320;

			$('.carga-total').text(parseInt(area+pessoas+aparelhos+paredes+vidros));
		});

        $('.videoWrapper').click(function () {
            $('.videoWrapper iframe').css("pointer-events", "auto");
        });
        $(".anima-a").css('visibility','hidden');
        $(".anima-b").css('visibility','hidden');
        $(".anima-c").css('visibility','hidden');
        $(".anima-d").css('visibility','hidden');
        $(".anima-e").css('visibility','hidden');
        $(".anima-f").css('visibility','hidden');
        $(".anima-g").css('visibility','hidden');
        $(".anima-h").css('visibility','hidden');
        $(".anima-i").css('visibility','hidden');
	});

	$(window).scroll(function() {
        if ($(this).scrollTop() > 500) {
			var FunctionOne = function () {
				var r = $.Deferred();

	        	$(".anima-a").css('visibility','visible');
	        	$(".anima-a").addClass('animated bounceInLeft');
	        	$(".anima-c").css('visibility','visible');
	        	$(".anima-c").addClass('animated bounceInRight');
				setTimeout(function () {
				r.resolve();
				}, 500);
				return r;
			};
	
			FunctionOne().done(
				function () {
		        	$(".anima-b").css('visibility','visible');
		        	$(".anima-b").addClass('animated fadeIn');
				}
			);

        }

        if ($(this).scrollTop() > 1400) {
        	$(".anima-h").css('visibility','visible');
        	$(".anima-h").addClass('animated bounceInLeft');
        	$(".anima-i").css('visibility','visible');
        	$(".anima-i").addClass('animated bounceInRight');		 
        }
	});

} )( jQuery );