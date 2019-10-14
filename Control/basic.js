function addPage(page, book) {

	var id, pages = book.turn('pages');

	// Create a new element for this page
	var element = $('<div />', {});

	// Add the page to the flipbook
	if (book.turn('addPage', element, page)) {

		// Add the initial HTML
		// It will contain a loader indicator and a gradient
		element.html('<div class="gradient"></div><div class="loader"></div>');

		// Load the page
		loadPage(page, element);
	}

}

function loadPage(page, pageElement) {

	// Create an image element

	var img = $('<img />');

	img.mousedown(function(e) {
		e.preventDefault();
	});

	img.load(function() {
		
		// Set the size
		$(this).css({width: '100%', height: '100%'});

		// Add the image to the page after loaded

		$(this).appendTo(pageElement);

		// Remove the loader indicator
		
		pageElement.find('.loader').remove();
	});

	// Load the page

	img.attr('src', 'pages/' +  page + '.jpg');

}


function loadLargePage(page, pageElement) {
	
	var img = $('<img />');

	img.load(function() {

		var prevImg = pageElement.find('img');
		$(this).css({width: '90%', height: '100%'});
		$(this).appendTo(pageElement);
		prevImg.remove();
		
	});

	// Loadnew page
	
	img.attr('src', 'pages/' +  page + '-large.jpg');
}


function loadSmallPage(page, pageElement) {
	
	var img = pageElement.find('img');

	img.css({width: '100%', height: '100%'});

	img.unbind('load');
	// Loadnew page

	img.attr('src', 'pages/' +  page + '.jpg');
}



// http://code.google.com/p/chromium/issues/detail?id=128488
function isChrome() {

	return navigator.userAgent.indexOf('Chrome')!=-1;

}



$(function () {
	arr= window.location.href.split("#");
<<<<<<< HEAD
	if(arr[1]){
		$("#entry2").removeClass('hide');

	}
});

function bookEntry(){
	location.href = "story.php"
}
=======
	if(arr[1]==2){
		$("#entry2").removeClass('hide');
	}if(arr[1]==3){
		$("#entry2").removeClass('hide');
		$("#entry3").removeClass('hide');
	}
});


>>>>>>> 35245849ee1baa4238560e5f39a5c3606028f86d



function bookEntry2() {
<<<<<<< HEAD
	location.href = "story2.php"
=======
	location.href = "storyBook2.html";
}
function bookEntry(){
	location.href = "storyBook.html";
}
function bookEntry3(){
	alert("you already finish reading all stories!");
>>>>>>> 35245849ee1baa4238560e5f39a5c3606028f86d
}









