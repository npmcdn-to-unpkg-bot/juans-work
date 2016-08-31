

// Drop Down Menu
$(".drop").hover(
	function(){
		$(this).children(".sub").slideDown(200);
	},
	function(){
		$(this).children(".sub").slideUp(200);
	}

);



// set the images in order
function setMegaOrder(){
	// the image thats next to the active image will always be on the right
	$(".mega-drop-slider li.active").next().addClass("next-mega-image").fadeOut();
	// the image thats prior to the active image will always be on the left
	$(".mega-drop-slider li.active").prev().addClass("prev-mega-image").fadeOut();

	// if the active image is the first image (and has no prior images)
	if ($(".mega-drop-slider li.active").is(":first-of-type")){
		// set the last image in the list to the prev image
		$(".mega-drop-slider li:last-of-type").addClass("prev-mega-image").fadeOut();
	// if the active image is the last image (and has no next image)
	} else if ($(".mega-drop-slider li.active").is(":last-of-type"))
	{
		// set the first image to be next
		$(".mega-drop-slider li:first-of-type").addClass("next-mega-image").fadeOut();
	}
	// otherwise
	else
	{
		// do nothing :)
	}
}

// move forward functionality
function megaNextAction(){
	$(".mega-drop-columns.text .active").css("display","none");
	$(".active").addClass("prev-mega-image").removeClass("active").fadeOut();
	$(".next-mega-image").addClass("active").removeClass("next-mega-image").fadeIn();
	$(".prev-mega-image").removeClass("prev-mega-image").fadeOut();
	$(".mega-drop-columns.text .active").css("display","block");
	setMegaOrder();
}

// move backwards functionality
function megaBackAction(){
	$(".mega-drop-columns:last-of-type .active").css("display","none");
	$(".active").addClass("next-mega-image").removeClass("active").fadeOut();
	$(".prev-mega-image").addClass("active").removeClass("prev-mega-image").fadeIn();
	$(".next-mega-image").removeClass("next-mega-image").fadeOut();
	$(".mega-drop-columns:last-of-type .active").css("display","block");
	setMegaOrder();
}

// connect the next button to the move forward functionality
$("#mega-drop-next").click(function(){
	megaNextAction();
});

// connect the back button to the move back functionality
$("#mega-drop-back").click(function(){
	megaBackAction();
});

// set the first image in the slider to active
$(".mega-drop-slider li:first-of-type").addClass("active");

// put the rest of the images in order
setMegaOrder();
