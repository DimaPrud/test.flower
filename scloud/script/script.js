$(document).on('click', '.tab_nav ul li', function () {
    let tab = $(this).attr('data-target');
    $('.tab_nav ul li').removeClass('action');
    $(this).addClass('action');
    $('.tabs_content div.tabs-content_element').removeClass('action');
    $('.tabs_content div[data-href=' + tab + ']').addClass('action');
});

/* ########################################## */

$(document).ready(function(){
    $('.gallery_element').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        dotsClass: 'dots'
    });
});

/*###########################################################*/



let slideIndex = 1;
showSlides(slideIndex);

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let title = document.getElementsByClassName("comparison-table_mobil_title");
    let prof = document.getElementsByClassName("comparison-table_mobil_prof");
    let corp = document.getElementsByClassName("comparison-table_mobil_corp");
    let color = document.getElementsByClassName("comparison-table_submit");

    let slideIndex = n

    for (let slide of title) {
        slide.style.display = "none";
    }

    for (let slide of prof) {
        slide.style.display = "none";
    }

    for (let slide of corp) {
        slide.style.display = "none";
    }

    for (let slide of color) {
        slide.style.backgroundColor = "#999999";
    }

    title[slideIndex - 1].style.display = "block";
    prof[slideIndex - 1].style.display = "block";
    corp[slideIndex - 1].style.display = "block";
    color[slideIndex - 1].style.backgroundColor = "#FF6600";
}



$(document).on('click', '.tab_nav ul li', function () {
    let tab = $(this).attr('data-target');
    $('.tab_nav ul li').removeClass('action');
    $(this).addClass('action');
    $('.tabs_content div.tabs-content_element').removeClass('action');
    $('.tabs_content div[data-href=' + tab + ']').addClass('action');
});

$(document).on('click', '.tab_nav ul li', function () {
    let tab = $(this).attr('data-target');
    $('.tab_nav ul li').removeClass('action');
    $(this).addClass('action');
    $('.tabs_content div.tabs-content_element').removeClass('action');
    $('.tabs_content div[data-href=' + tab + ']').addClass('action');
});

// /*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/

showeSlides(slideIndex);

function nextSlide() {
    showeSlides(slideIndex += 1);
}


function previousSlide() {
    showeSlides(slideIndex -= 1);
}


function currenteSlide(n) {
    showeSlides(slideIndex = n);
}


function showeSlides(n) {

    let img = document.getElementsByClassName("gallery_image");

    let slideIndex = n

    if (n > img.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = img.length
    }

    for (let slide of img) {
        slide.style.display = "none";
    }

    img[slideIndex - 1].style.display = "block";
}
/* ############################# */
//
// $(document).on('click', '#arrow_left', function () {
//     let tab = $(this).attr('data-image');
//     $('#arrow_left').removeClass('action');
//     $(this).addClass('action');
//     $('.tabs_content div.tabs-content_element').removeClass('action');
//     $('.gallery_element img[data-image=' + tab + ']').addClass('action');
// });
//
// $(document).on('click', '#arrow_right', function () {
//     let tab = $(this).attr('data-image');
//     $('#arrow_right').removeClass('action');
//     $(this).addClass('action');
//     $('.gallery_element img').removeClass('action');
//     $('.gallery_element img[data-image=' + tab + ']').addClass('action');
// });