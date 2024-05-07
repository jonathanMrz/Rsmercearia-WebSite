$(document).ready(function(){
	$(".veen .rgstr-btn button").click(function(){
		$('.veen .wrapper').addClass('move');
		$(".veen .login-btn button").removeClass('active');
		$(this).addClass('active');
	});
	$(".veen .login-btn button").click(function(){
		$('.veen .wrapper').removeClass('move');
		$(".veen .rgstr-btn button").removeClass('active');
		$(this).addClass('active');
	});
});

