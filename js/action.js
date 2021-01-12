function openNav() {
    document.getElementById("mySidenav").style.width = "75vw";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

var dropdown = document.getElementsByClassName("dropdown-btn");

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
}

var prevScrollpos = window.pageYOffset;

window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-120px";
    }
    prevScrollpos = currentScrollPos;

    if (currentScrollPos == 0) {
        document.getElementById("navbar").style.backgroundColor = "transparent";
    } else {
        document.getElementById("navbar").style.backgroundColor = "white";
    }
}

$(document).ready(function () {
    var scroll_pos = 0;
    $(document).scroll(function () {
        scroll_pos = $(this).scrollTop();
        if (scroll_pos > 0) {
            $('.nav-link, .nav-toggler').css('color', '#333');
            $('.logo-img').attr('src', 'img/logo3.webp');
        } else {
            $('.nav-link, .nav-toggler').css('color', '#fff');
            $('.logo-img').attr('src', 'img/logo.webp');
        }
    });
});

$(document).ready(function () {
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        centerMode: true,
        centerPadding: '60px',
        focusOnSelect: true,
    });
});