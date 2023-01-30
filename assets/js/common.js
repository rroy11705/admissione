
function stickyNav() {
    var wScroll = $(window).scrollTop();
    var screenHeight =  $(window).height();

    if (wScroll > screenHeight * 0.1) {
        $('#main-header .container').css({'margin': '8px 16px'});
        $('#main-header').addClass('backdrop-filter');
    } else {
        $('#main-header .container').css({'margin': '16px'});
        $('#main-header').removeClass('backdrop-filter');
    }
}

$(window).scroll(function () {
    stickyNav();
});

const observer = new IntersectionObserver(function (entries) {
    entries.forEach(entry => {
        entry.target.classList.toggle('is-visible', entry.isIntersecting);
        if (entry.isIntersecting) {
            observer.unobserve(entry.target);
        }
    });
}, {
    threshold: 0.1,
});

const fadeUpElements = document.querySelectorAll('.fade-up');

fadeUpElements.forEach(element => {
    const fadeUpChildren = element.querySelectorAll('.fade-up .fade-delay');
    fadeUpChildren.forEach((child, index) => {
        child.setAttribute('style', 'transition-delay: ' + index * 0.25 + 's');
    });
    observer.observe(element);
});

$(document).ready(function () {
    
    $(".contact-us-form").on("submit", function (e) {
        e.preventDefault();
        $loadingData = {
            autoCheck: 32,
            bgColor: "#ffffff00",
            bgOpacity: "0.5",
            fontColor: "#000",
            isOnly: true,
            size: "16",
            title: ""
        };
        $('.settings_page').loader($loadingData);
        var sendData = {
            "full_name": $(".contact-us-form [name='full_name']").val().trim(),
            "school": $(".contact-us-form [name='school']").val().trim(),
            "email": $(".contact-us-form [name='email']").val().trim(),
            "phone_no": $(".contact-us-form [name='phone_no']").val().trim(),
            "message": $(".contact-us-form [name='message']").val().trim()
        };
        $.ajax({
            type: "POST",
            url: 'includes/make_contact_request.php',
            headers: {
                'Content-Type': 'application/json'
            },
            dataType: 'json',
            data: JSON.stringify(sendData),
            success: function (data) {
                setTimeout(function () {
                    $.loader.close();
                    if (data['status'] === true) {
                        $(".contact-us-alert").empty()
                        $(".contact-us-alert").html(
                            `<span style="color: #2d4059">${data['message']}</span>`
                        ).addClass('success');
                    }
                    else {
                        $(".contact-us-alert").empty()
                        $(".contact-us-alert").html(
                            `<svg width="16" height="16" viewBox="0 0 15 15" fill="rgb(244, 244, 244, 1)" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0)"> <path d="M12.6864 15H2.36616C1.55555 14.9999 0.802743 14.5802 0.376418 13.8905C-0.0497926 13.201 -0.0886325 12.3399 0.273721 11.6147L5.43337 1.29405C5.82942 0.501035 6.63981 0 7.52627 0C8.41273 0 9.22311 0.501035 9.61917 1.29405L14.7788 11.6147C15.1412 12.3399 15.1023 13.201 14.6761 13.8905C14.2499 14.5802 13.497 14.9999 12.6864 15V15Z" fill="rgb(244, 244, 244, 1)""></path> <path d="M7.52627 3.74919C7.78467 3.74919 7.99418 3.9587 7.99418 4.2171V9.83197C7.99418 10.0904 7.78467 10.2999 7.52627 10.2999C7.26787 10.2999 7.05836 10.0904 7.05836 9.83197V4.2171C7.05836 3.9587 7.26787 3.74919 7.52627 3.74919Z" fill="rgb(221, 34, 51, 1)""></path> <path d="M7.05836 11.2357H7.99418V12.1715H7.05836V11.2357Z" fill="rgb(221, 34, 51, 1)""></path> </g> <defs> <clipPath id="clip0"> <rect width="15" height="15" fill="rgb(221, 34, 51, 1)""></rect> </clipPath> </defs> </svg>` +
                            ` <span>${data['message']}</span>`
                        ).addClass('alert');
                    }
                }, 1000);
            }, error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr, ajaxOptions, thrownError);
                $.loader.close();
                $(".contact-us-alert").empty()
                $(".contact-us-alert").html(
                    `<svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0)"> <path d="M12.6864 15H2.36616C1.55555 14.9999 0.802743 14.5802 0.376418 13.8905C-0.0497926 13.201 -0.0886325 12.3399 0.273721 11.6147L5.43337 1.29405C5.82942 0.501035 6.63981 0 7.52627 0C8.41273 0 9.22311 0.501035 9.61917 1.29405L14.7788 11.6147C15.1412 12.3399 15.1023 13.201 14.6761 13.8905C14.2499 14.5802 13.497 14.9999 12.6864 15V15Z" fill="rgb(244, 244, 244, 1)""></path> <path d="M7.52627 3.74919C7.78467 3.74919 7.99418 3.9587 7.99418 4.2171V9.83197C7.99418 10.0904 7.78467 10.2999 7.52627 10.2999C7.26787 10.2999 7.05836 10.0904 7.05836 9.83197V4.2171C7.05836 3.9587 7.26787 3.74919 7.52627 3.74919Z" fill="rgb(221, 34, 51, 1)""></path> <path d="M7.05836 11.2357H7.99418V12.1715H7.05836V11.2357Z" fill="rgb(221, 34, 51, 1)""></path> </g> <defs> <clipPath id="clip0"> <rect width="15" height="15" fill="rgb(221, 34, 51, 1)""></rect> </clipPath> </defs> </svg>` +
                    ` <span>Something went wrong! Please Try again later...</span>`
                ).addClass('alert');
            }
        });
    });
    $(".register-now-form").on("submit", function (e) {
        e.preventDefault();
        $loadingData = {
            autoCheck: 32,
            bgColor: "#ffffff00",
            bgOpacity: "0.5",
            fontColor: "#000",
            isOnly: true,
            size: "16",
            title: ""
        };
        $('.settings_page').loader($loadingData);
        var sendData = {
            "full_name": $(".register-now-form [name='full_name']").val().trim(),
            "email": $(".register-now-form [name='email']").val().trim(),
            "phone_no": $(".register-now-form [name='phone_no']").val().trim(),
            "preferred_course": $(".register-now-form [name='preferred_course']").val().trim()
        };
        $.ajax({
            type: "POST",
            url: 'includes/make_register_request.php',
            headers: {
                'Content-Type': 'application/json'
            },
            dataType: 'json',
            data: JSON.stringify(sendData),
            success: function (data) {
                setTimeout(function () {
                    $.loader.close();
                    if (data['status'] === true) {
                        $(".register-now-alert").empty()
                        $(".register-now-alert").html(
                            `<span style="color: #2d4059">${data['message']}</span>`
                        ).addClass('success');
                    }
                    else {
                        $(".register-now-alert").empty()
                        $(".register-now-alert").html(
                            `<svg width="16" height="16" viewBox="0 0 15 15" fill="rgb(244, 244, 244, 1)" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0)"> <path d="M12.6864 15H2.36616C1.55555 14.9999 0.802743 14.5802 0.376418 13.8905C-0.0497926 13.201 -0.0886325 12.3399 0.273721 11.6147L5.43337 1.29405C5.82942 0.501035 6.63981 0 7.52627 0C8.41273 0 9.22311 0.501035 9.61917 1.29405L14.7788 11.6147C15.1412 12.3399 15.1023 13.201 14.6761 13.8905C14.2499 14.5802 13.497 14.9999 12.6864 15V15Z" fill="rgb(244, 244, 244, 1)""></path> <path d="M7.52627 3.74919C7.78467 3.74919 7.99418 3.9587 7.99418 4.2171V9.83197C7.99418 10.0904 7.78467 10.2999 7.52627 10.2999C7.26787 10.2999 7.05836 10.0904 7.05836 9.83197V4.2171C7.05836 3.9587 7.26787 3.74919 7.52627 3.74919Z" fill="rgb(221, 34, 51, 1)""></path> <path d="M7.05836 11.2357H7.99418V12.1715H7.05836V11.2357Z" fill="rgb(221, 34, 51, 1)""></path> </g> <defs> <clipPath id="clip0"> <rect width="15" height="15" fill="rgb(221, 34, 51, 1)""></rect> </clipPath> </defs> </svg>` +
                            ` <span>${data['message']}</span>`
                        ).addClass('alert');
                    }
                }, 1000);
            }, error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr, ajaxOptions, thrownError);
                $.loader.close();
                $(".register-now-alert").empty()
                $(".register-now-alert").html(
                    `<svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0)"> <path d="M12.6864 15H2.36616C1.55555 14.9999 0.802743 14.5802 0.376418 13.8905C-0.0497926 13.201 -0.0886325 12.3399 0.273721 11.6147L5.43337 1.29405C5.82942 0.501035 6.63981 0 7.52627 0C8.41273 0 9.22311 0.501035 9.61917 1.29405L14.7788 11.6147C15.1412 12.3399 15.1023 13.201 14.6761 13.8905C14.2499 14.5802 13.497 14.9999 12.6864 15V15Z" fill="rgb(244, 244, 244, 1)""></path> <path d="M7.52627 3.74919C7.78467 3.74919 7.99418 3.9587 7.99418 4.2171V9.83197C7.99418 10.0904 7.78467 10.2999 7.52627 10.2999C7.26787 10.2999 7.05836 10.0904 7.05836 9.83197V4.2171C7.05836 3.9587 7.26787 3.74919 7.52627 3.74919Z" fill="rgb(221, 34, 51, 1)""></path> <path d="M7.05836 11.2357H7.99418V12.1715H7.05836V11.2357Z" fill="rgb(221, 34, 51, 1)""></path> </g> <defs> <clipPath id="clip0"> <rect width="15" height="15" fill="rgb(221, 34, 51, 1)""></rect> </clipPath> </defs> </svg>` +
                    ` <span>Something went wrong! Please Try again later...</span>`
                ).addClass('alert');
            }
        });
    });
    $('.hamburger').on('click', function () {
        $('.nav-links-container').css({ 'right': '0' });
    });

    $('.hamburger-cross').on('click', function () {
        $('.nav-links-container').css({ 'right': '-90vw' });
    });


    // smooth scroll

    $('a[button-target]').on('click', function() {
        $this = $(this);
        $target = $this.attr('button-target');
        // remove active from other a tags and add active to this a tag
        $('.nav-links-container a').removeClass('active');
        $this.addClass('active');
        $('html,body').animate({
            scrollTop: $($target).offset().top
        }, 'slow');
    });

    window.scrollTo(0, 0);
    
    const items = document.querySelectorAll(".faq-cards button");

    function toggleFaqCard() {
        const itemToggle = this.getAttribute('aria-expanded');

        for (i = 0; i < items.length; i++) {
            items[i].setAttribute('aria-expanded', 'false');
        }

        if (itemToggle == 'false') {
            this.setAttribute('aria-expanded', 'true');
        }
    }

    items.forEach(item => item.addEventListener('click', toggleFaqCard));

});

document.addEventListener( 'DOMContentLoaded', function () {
    new Splide('#testimonials-splide', {
        type: 'loop',
        perPage: 1,
        focus: 'center',
        autoplay: true,
        interval: 5000,
        flickMaxPages: 3,
        updateOnMove: true,
        pagination: false,
        padding: '25%',
        throttle: 500,
        autoplay: true,
        updateOnMove: true,
        pagination: true,
        breakpoints: {
        1440: {
            perPage: 1,
            padding: '30%'
            },
        820: {
            perPage: 1,
            padding: '0%',
            }
        }
    }).mount();
});
