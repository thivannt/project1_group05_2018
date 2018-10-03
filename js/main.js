$(document).ready(function(){
	var fol=$('.fol').offset().top;
	var tag=1
	//scroll to element
	$(window).scroll(function(){
		if($('html,body').scrollTop()>=fol-60)
		{
			if(tag==1)
			{
				$('.fol').addClass('test');
				$('.scroll-top').css({"display":"block"});
				tag=0;
			}

		}
		else
			{
				if(tag==0)
				{
					$('.fol').removeClass('test');
					$('.scroll-top').css({"display":"none"});
					tag=1;
				}	

			}

			

	});
	//scroll to Top
	$('.scroll-top').click(function(){
		console.log('ok click');
		$('html,body').animate({scrollTop:0},400);
	});
	
})