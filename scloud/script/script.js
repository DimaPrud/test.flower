// container-5 + container-6
let slideIndex = 1;
showSlides(slideIndex);

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let slides = document.getElementsByClassName("section_container-6_element");
    let color = document.getElementsByClassName("section_container-5_submit");
    slideIndex = n

    for (let slide of slides) {
        slide.style.display = "none";
    }

    for (let slide of color) {
        slide.style.borderColor = "#EAEAEA";
    }

    slides[slideIndex - 1].style.display = "flex";
    color[slideIndex - 1].style.borderColor = "#FF6600";
}

//container-7

function table(n) {
    let title = document.getElementsByClassName("container-7_mobil_title");
    let prof = document.getElementsByClassName("container-7_mobil_prof");
    let corp = document.getElementsByClassName("container-7_mobil_corp");
    let color = document.getElementsByClassName("section_container-7_submit");

    slideIndex = n

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

//container-8

function timework(n) {
    let slidess = document.getElementsByClassName("section_container-8_img");
    let color = document.getElementsByClassName("section_container-8_submit");

    slideIndex = n

    for (let slide of slidess) {
        slide.style.display = "none";
    }

    for (let slide of color) {
        slide.style.backgroundColor = "#999999";
    }

    slidess[slideIndex - 1].style.display = "block";
    color[slideIndex - 1].style.backgroundColor = "#FF6600";
}



/* Вызываем функцию, которая реализована ниже: */
showSlides(slideIndex);

function nextSlide() {
    showSlide(slideIndex += 1);
}

function previousSlide() {
    showSlide(slideIndex -= 1);
}




function showSlide(n) {
    let slides = document.getElementsByClassName("item");

    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }

    for (let slide of slides) {
        slide.style.display = "none";
    }

    slides[slideIndex - 1].style.display = "block";
}

// $(document).ready(function(){
//     $('.section_container-8_element').slick({
//         infinite: true,
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         arrows: true,
//         dots: true,
//         dotsClass: 'section_container-8_input'
//     });
// });

//
// $(document).on('click', '#leave_request_bottom', function(){
//     $('#leave_request_menu').toggle();
// });
//
// $(document).on('click', '#leave_summary_bottom', function(){
//     $('#leave_summary_menu').toggle();
// });
//
// $(document).on('click', 'html',  function(e){
//     let block1 = $('.leave_bottom a');
//     let block2 = $('.headRight form');
//     if((!block1.is(e.target) && block1.has(e.target).length === 0) && (!block2.is(e.target) && block2.has(e.target).length === 0)) {
//         $('.headRight form').hide();
//     }
// });
//
//


$(document).ready(function(){
    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        dotsClass: 'navInput'
    });
});

$(document).ready(function() {
    $('.section_container-7_wrapper-for-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        centerMode: true,
        variableWidth: true
    });
});
