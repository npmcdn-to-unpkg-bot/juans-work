$(document).ready( function(){

// Find  the width of the images
var imgWidth = $(".j-slider li img").width();
var imgHeight = $(".j-slider li img").height();

// Turn all li's into slides
$(".j-slider li").addClass("slider-image slides");



// Add the height and width to the gallery based in the image dimensions
$("head").append("<style type='text/css'>.j-slider, .slides {width: "+imgWidth+"px; height: "+imgHeight+"px;overflow:visible}</style>");

// Add nav buttons
$(".j-slider").append("<span class='j-slide-back'>Back</span><span class='j-slide-next'> Next</span>");

// Add class of active to the first image only once
$(".j-slider li:first-of-type").one().addClass("active");

// Add the proper classes to maintain order
var properOrder = function(){
	// Add a class of next slide to the next slide
	$(".active").next("li").addClass("next-slide");

	// Add a class of previous-slide slide to the previous slide
	$(".active").prev("li").addClass("previous-slide");
}
// Set prev to last li when first li is active
var properRotate = function(){
	// Locate the first image
	var firstImg = $(".j-slider li:first-of-type");

	// Locate last image
	var lastImg = $(".j-slider li:last-of-type");

	// Switch classes depending on direction of slide
	if ($(firstImg).hasClass("active")){
		$(lastImg).addClass("previous-slide");
	}

	// Switch classes depending on direction of slide
	if ($(lastImg).hasClass("active")){
		$(firstImg).addClass("next-slide");
	}
}
// Clear all inline styles
var clearInline = function(){
	$(".next-slide").css("left", "auto");
}
// add functionality to the back button
$(".j-slide-back").bind("click" , function(){

	// clear next slide
	$(".next-slide").removeClass("next-slide");
	// create new next slide
	$(".active").removeClass("active").addClass("next-slide");
	// create new active slide
	$(".previous-slide").addClass("active").removeClass("previous-slide");

	//make sure everything gets put in the proper order
 	properOrder();
 	// if we hit the end or beginning of the list, set the proper pattern
	properRotate();
 	return false;
});
// add functionality to the next button
$(".j-slide-next").bind("click",  function(){
	// clear previous slide
	$(".previous-slide").removeClass("previous-slide");
	// create new previous slide
	$(".active").addClass("previous-slide").removeClass("active");
	// create new active slide
	$(".next-slide").addClass("active").removeClass("next-slide");

	//make sure everything gets put in the proper 
 	properOrder();
 	// if we hit the end or beginning of the list, set the proper pattern
	properRotate();
 	return false;
});
//make sure everything gets put in the proper 
properOrder();
// if we hit the end or beginning of the list, set the proper pattern
properRotate();
});


// Lettering
$(".font-tastic").lettering();

