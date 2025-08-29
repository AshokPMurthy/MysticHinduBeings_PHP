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

    // "OwlCarousel" item clicked; display the "data-" attributes in the "modal".
    $('.btn-main').click(function() {

        // get the data-attributes
        var url = $(this).data("url");
        var title = $(this).data("title");
        var desc = $(this).data("desc");
        //alert("url : " + url + "  title : " + title + "  desc : " + desc);
        
        // Get the modal title
        const modalTitle = document.getElementById('exampleModalTitle');
        modalTitle.textContent = title; // Output: Modal Title
        modalTitle.setAttribute('style','font-weight:bold; margin-left:370px;');

        // Get the "img" inside modal body
        const modalImage = document.getElementById('exampleModalImage');
        modalImage.src = url;

        // Get the "h4" inside modady body
        const modalDesc = document.getElementById('exampleModalDesc');
        modalDesc.textContent = desc; // Output: description
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