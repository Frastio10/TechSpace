$('.popup-trigger').hover(function() {
	$(this).children('.popup-content').toggleClass('d-none');
});

$('.playbutton').click(function(event) {
	$('.video-backdrop').addClass('active');	
	let data = $('.video-close').data('target');
	$('.video-target').attr('src',data);
});

$('.video-popup').click(function(event) {
	/* Act on the event */
	event.stopPropagation();
});

$('.video-close, .video-backdrop').click(function(event) {
	$('.video-backdrop').removeClass('active')
	$('.video-target').attr('src','');	
});

 $('.image-hover').click(function(event) {
 	let source  = $(this).children('img').attr('src');
 	$('.image-modalview-backdrop').addClass('active');
 	$('#image-modal').attr('src', source);
 	//console.log(source);
 	//alert(source);
 });

 $('.image-modalview-backdrop').click(function(event) {
 	$('.image-modalview-backdrop').removeClass('active');
 });

 $('.close-popup').click(function(event) {
 	$('.image-modalview-backdrop').removeClass('active');
 });

$('.image-modalview').click(function(event) {
	event.stopPropagation();
});