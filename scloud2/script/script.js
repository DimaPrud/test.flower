//
// //container-7
//
//
//
// //container-8
//
// function timework(n) {
//     let slidess = document.getElementsByClassName("section_container-8_img");
//     let color = document.getElementsByClassName("section_container-8_submit");
//
//     slideIndex = n
//
//     for (let slide of slidess) {
//         slide.style.display = "none";
//     }
//
//     for (let slide of color) {
//         slide.style.backgroundColor = "#999999";
//     }
//
//     slidess[slideIndex - 1].style.display = "block";
//     color[slideIndex - 1].style.backgroundColor = "#FF6600";
// }
//
// //container-9
//
// showeSlides(slideIndex);
//
// function nextSlide() {
//     showeSlides(slideIndex += 1);
// }
//
//
// function previousSlide() {
//     showeSlides(slideIndex -= 1);
// }
//
//
// function currenteSlide(n) {
//     showeSlides(slideIndex = n);
// }
//
//
// function showeSlides(n) {
//
//     let img = document.getElementsByClassName("section_container-8_img");
//     let color = document.getElementsByClassName("section_container-8_submit");
//
//     if (n > img.length) {
//         slideIndex = 1
//     }
//     if (n < 1) {
//         slideIndex = img.length
//     }
//
//     for (let slide of img) {
//         slide.style.display = "none";
//     }
//
//
//     if (n > color.length) {
//         slideIndex = 1
//     }
//     if (n < 1) {
//         slideIndex = color.length
//     }
//
//     for (let slide of color) {
//         slide.style.backgroundColor = "#999999";
//     }
//
//
//     img[slideIndex - 1].style.display = "block";
//     color[slideIndex - 1].style.backgroundColor = "#FF6600";
// }
//
// /*########################*/
//
//
// $(document).ready(function(){
//     $('.multiple-items').slick({
//         infinite: true,
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         arrows: true,
//         dots: true,
//         dotsClass: 'navInput'
//     });
// });
//
// $(document).ready(function() {
//     $('.section_container-7_wrapper-for-slider').slick({
//         dots: false,
//         infinite: true,
//         speed: 300,
//         slidesToShow: 1,
//         centerMode: true,
//         variableWidth: true
//     });
// });


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
//
// // container-5 + container-6
// let slideIndex = 1;
// showSlides(slideIndex);
//
// function currentSlide(n) {
//     showSlides(slideIndex = n);
// }
//
// function showSlides(n) {
//     let slides = document.getElementsByClassName("section_container-6_element");
//     let color = document.getElementsByClassName("section_container-5_submit");
//     slideIndex = n
//
//     for (let slide of slides) {
//         slide.style.display = "none";
//     }
//
//     for (let slide of color) {
//         slide.style.borderColor = "#EAEAEA";
//     }
//
//     slides[slideIndex - 1].style.display = "flex";
//     color[slideIndex - 1].style.borderColor = "#FF6600";
// }
//
// //container-7
//
// function table(n) {
//     let title = document.getElementsByClassName("container-7_mobil_title");
//     let prof = document.getElementsByClassName("container-7_mobil_prof");
//     let corp = document.getElementsByClassName("container-7_mobil_corp");
//     let color = document.getElementsByClassName("section_container-7_submit");
//
//     slideIndex = n
//
//     for (let slide of title) {
//         slide.style.display = "none";
//     }
//
//     for (let slide of prof) {
//         slide.style.display = "none";
//     }
//
//     for (let slide of corp) {
//         slide.style.display = "none";
//     }
//
//     for (let slide of color) {
//         slide.style.backgroundColor = "#999999";
//     }
//
//     title[slideIndex - 1].style.display = "block";
//     prof[slideIndex - 1].style.display = "block";
//     corp[slideIndex - 1].style.display = "block";
//     color[slideIndex - 1].style.backgroundColor = "#FF6600";
// }
//
// //container-8
//
// function timework(n) {
//     let slidess = document.getElementsByClassName("section_container-8_img");
//     let color = document.getElementsByClassName("section_container-8_submit");
//
//     slideIndex = n
//
//     for (let slide of slidess) {
//         slide.style.display = "none";
//     }
//
//     for (let slide of color) {
//         slide.style.backgroundColor = "#999999";
//     }
//
//     slidess[slideIndex - 1].style.display = "block";
//     color[slideIndex - 1].style.backgroundColor = "#FF6600";
// }
//
// //container-9

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

    let img = document.getElementsByClassName("gallery_element");
    // let color = document.getElementsByClassName("d");

    if (n > img.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = img.length
    }

    for (let slide of img) {
        slide.style.display = "none";
    }


    // if (n > color.length) {
    //     slideIndex = 1
    // }
    // if (n < 1) {
    //     slideIndex = color.length
    // }
    //
    // for (let slide of color) {
    //     slide.style.backgroundColor = "#999999";
    // }


    img[slideIndex - 1].style.display = "block";
    // color[slideIndex - 1].style.backgroundColor = "#FF6600";
}
//
// /*########################*/


