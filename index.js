$(document).ready(function() {

    // banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    });

    // Initialize "top sale" owl carousel
    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0:{
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });

    // isotope filter for "Special Price" brands
    // search for element with class = "grid" and class = "grid-item" underneath it.
    var $grid = $(".grid").isotope( {
        itemSelector: '.grid-item',
        layoutMode: 'fitRows' 
    });

    // filter items on button click of "Apple", "Samsung", or "Redmi"
    $(".button-group").on("click", "button", function() {
        var filterValue = $(this).attr("data-filter");
        $grid.isotope({filter: filterValue});
    });

    
    // Initialie "new phones" owl carousel
    $("#new-phones .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0:{
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });

    
    // Initialie "blogs" owl carousel
    $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0:{
                items: 1
            },
            600: {
                items: 3
            }
        }
    });

    // "Go to Site" button clicked; Redirect to URL of Park in "Modal"
    $('.park').click(function() {
        // get the data-attributes
        var url = $(this).data("url");
        var caption = $(this).data("caption");
        //alert("url : " + url + "  caption : " + caption);

        // show the modal
        $('.bg-modal').show();
        
        // Hide the "Video" control
        $('#divVideo video').hide();

        // Show the "iFrame" control
        $('.divIframe').show();

        // show the "park_url" that was clicked in the "iFrame"
        $('#frame').attr("src", url);

        // hide the carousel, so that it WONT shine thru the park.
        $('.owl-carousel').hide();
    });

    // "View Document" button clicked; Show "mp4" of Document in "Modal"
    $('.doc').click(function() {
        // get the data-attributes
        var url = $(this).data("url");
        var title = $(this).data("title");
        //alert("url : " + url + "  title : " + title);

        // show the modal
        $('.bg-modal').show();
        
        // Show the "Video" control
        $('#divVideo video').show();

        // Hide the "iFrame" control
        $('.divIframe').hide();
        
        // load the url with mp4 in the "video"
        var $video = $('#divVideo video');
        videoSrc = $('source', $video).attr('src', url);
        $video[0].load();
        $video[0].play();

        // hide the carousel, so that it WONT shine thru the park.
        $('.owl-carousel').hide();
    });

    // Whenever a "X" button is clicked. Hide "Modal"
    $('.close-modal').click(function() {
        //alert('close-modal button clicked');

        // hide the modal
        $('.bg-modal').hide();

        // show the carousel
        $('.owl-carousel').show();

        // reload page, so you can dismiss black overlay
        location.reload();
    });


});//end- $(document).ready


/*
// Whenever a "Go to Site" button is clicked. Popup the "Modal Background"
var elems = document.getElementsByClassName('btn');
for (var i = 0, len = elems.length|0; i < len; i = i+1|0) {
    elems[i].addEventListener('click', function() {
        document.querySelector('.bg-modal').style.display = 'flex';
    });
} //end- for


// Whenever a "X" button is clicked. Hide the "Modal Background"
document.querySelector('.close-modal').addEventListener('click', function() {
    document.querySelector('.bg-modal').style.display = 'none';
});
*/