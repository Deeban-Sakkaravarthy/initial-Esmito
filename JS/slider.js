$(document).ready(function(){
    $('#myCarousel').carousel('pause');
	$('#myCarousel').on('slid.bs.carousel', function () 
    {
        console.log("sliding ended");
        $('#myCarousel').carousel('pause');
        currentIndex = $('div.active').index() + 1;
        if (currentIndex == 1)
        {
        	$('video').get(0).play();
        	$('video').get(1).pause();
        }
        else

        {

        	$('video').get(1).play();
        	$('video').get(0).pause();
        }
    });
	$('video').on('play', function (e) 
	{
		$('#myCarousel').carousel('pause');	
	});
	$('video').on('ended', function (e) 
	{
    	$('#myCarousel').carousel('cycle');
	});
});
})