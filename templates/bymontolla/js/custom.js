/*jQuery(document).ready(function($){*/
	jQuery(function() {
		jQuery("#menu-primary-navigation").attr('class',"navi-main");
		jQuery("#menu-primary-navigation li:nth-last-child(1)").attr('class',"menu-get-in-touch");
		jQuery(".page-header").hide();
		var jQueryel, leftPos, newWidth,
		jQuerymainNav = jQuery("ul.navi-main");

		jQuerymainNav.append("<li id='magic-line'></li>");
		var jQuerymagicLine = jQuery("#magic-line");
		jQuerymagicLine
		.width(jQuery("ul.navi-main li.active a").width())
		.css("left", jQuery(".active a").position().left)
		.data("origLeft", jQuerymagicLine.position().left)
		.data("origWidth", jQuerymagicLine.width());
		jQuery("ul.navi-main li a").hover(function() {
			jQueryel = jQuery(this);
			leftPos = jQueryel.position().left;
			newWidth = jQueryel.parent().width();
			jQuerymagicLine.stop().animate({
				left: leftPos,
				width: newWidth
			});
		}, function() {
			jQuerymagicLine.stop().animate({
				left: jQuerymagicLine.data("origLeft"),
				width: jQuerymagicLine.data("origWidth")
			});
		});		
	});
	jQuery(document).ready(function() {
		jQuery('.projects-list .box').addClass('others');
		jQuery('.projects-list .box:nth-child(3n)').addClass('last');
		jQuery('.home-latest-blog .box').addClass('others');
		jQuery('.home-latest-blog .box:nth-child(3n)').addClass('last');
		var container = jQuery('.projects-list');
		var elements = container.children();
		var oldWrapPos = 0;
		jQuery('.projects-list .box').click(function() {
	container.children().removeClass('selected'); // reset selected element
	jQuery(this).addClass('selected'); // mark new selected element
	var selectedPos = jQuery(this).index('.box'); // get selected position
	// find wrap element:
	//var containerWidth = container.width();
	//var elementsInRow = Math.floor(containerWidth / 100 );
	var elementsInRow = 3; // use this if container's width is fixed
	var row = Math.floor(selectedPos / elementsInRow) + 1;
	var wrapPos = (row * elementsInRow);
	// if selected is on last row, use as wrap the last element:
	var size = elements.length;
	if (wrapPos >= size) {
		wrapPos = size;
	}
	wrapPos = wrapPos - 1;
	console.log(selectedPos);
	console.log(elementsInRow);
	var pointerPos = 40 + ((selectedPos % elementsInRow) * 330)
	console.log(selectedPos % elementsInRow);
	console.log((selectedPos % elementsInRow) * 310);
	console.log('left: ' + pointerPos);
	console.log(size);
	});
		jQuery.ajaxSetup({
			cache: false
		});
		jQuery(".project-link").click(function(e) {
			var post_link = jQuery(this).attr("href");
			var post_loaddiv = jQuery(this).attr("rel");
			jQuery(".info-cl").prepend('<img  style="text-align:center;margin-top:10px;" id="theImg" src="http://new.montolla.tk/wp-content/themes/ByMontollav2/assets/img/ajax-loader.gif" />');
			jQuery(".info-cl").load(post_link);
			e.preventDefault();
		});

	// handle the mouseenter functionality
	jQuery(".box").mouseenter(function() {
		jQuery(this).addClass("hover");
	})
	// handle the mouseleave functionality
	.mouseleave(function() {
		jQuery(this).removeClass("hover");
	});
	});
	jQuery(window).resize(function() {
		var width = jQuery(window).width();
		var middleWidth = width - '965';
		var leftWidth = middleWidth / 2;
		jQuery('.info-cl').attr('style', 'width:' + width + 'px; margin-left:-' + leftWidth + 'px;');
	});
/*});*/