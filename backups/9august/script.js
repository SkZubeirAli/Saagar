//** STICKY OR FIXED JS

$(window).on('scroll', function(){
    
    if ($(this).scrollTop() > 120){  
      $('.sticky-header').addClass('active');         
    }
    else
    {
      $('.sticky-header').removeClass('active'); 
    }
}); 

    // for header appearance on bar click
    
    $(document).ready(function() {
        $(".open-close-btn").on('click touchstart', function(e) {
            e.preventDefault();
            var $overlay = $(".overlay");
            if ($overlay.hasClass("overlay-open")) {
                $overlay.removeClass("overlay-open").addClass("overlay-close");
                setTimeout(function() {
                    $overlay.removeClass("overlay-close").fadeOut(300);
                }, 500); // Match this duration with CSS transition duration
            } else {
                $overlay.fadeIn(300).addClass("overlay-open");
            }
            $("#hamburger-icon").toggleClass("hamburger-open");
        });
    });
    
    // for home page animated slider
    
    $(document).ready(function() {
            var curPage = 1;
            var numOfPages = $(".skw-page").length;
            var animTime = 300;
            var scrolling = false;
            var pgPrefix = ".skw-page-";

            function pagination() {
                scrolling = true;
                $(pgPrefix + curPage).removeClass("inactive").addClass("active");
                $(pgPrefix + (curPage - 1)).addClass("inactive");
                $(pgPrefix + (curPage + 1)).removeClass("active");
                setTimeout(function() {
                    scrolling = false;
                }, animTime);
            };

            function navigateUp() {
                if (curPage === 1) return;
                curPage--;
                pagination();
            };

            function navigateDown() {
                if (curPage === numOfPages) return;
                curPage++;
                pagination();
            };

            function isSliderInView() {
                var slider = $(".home_slider");
                var sliderTop = slider.offset().top;
                var sliderBottom = sliderTop + slider.outerHeight();
                var scrollTop = $(window).scrollTop();
                var scrollBottom = scrollTop + $(window).height();

                return (scrollTop >= sliderTop && scrollBottom <= sliderBottom);
            }

            $(document).on("mousewheel DOMMouseScroll", function(e) {
                if (scrolling || !isSliderInView()) return;
                if (e.originalEvent.wheelDelta > 0 || e.originalEvent.detail < 0) {
                    navigateUp();
                } else { 
                    navigateDown();
                }
            });

            $(document).on("keydown", function(e) {
                if (scrolling || !isSliderInView()) return;
                if (e.which === 38) {
                    navigateUp();
                } else if (e.which === 40) {
                    navigateDown();
                }
            });
        });

        // GSAP code for header
        console.clear();

        gsap.registerPlugin(ScrollTrigger);

        const cards = gsap.utils.toArray(".card");
        gsap.set(cards, { xPercent: 0, yPercent: 100, autoAlpha: 1 });

        const tl = gsap.timeline({
          defaults: {
            duration: 0.02,
            ease: "power1.inOut"
          },
          scrollTrigger: {
            trigger: ".wrapper",
            start: "top top",
            endTrigger: "#third_section",  // End animation at the second section
            end: "bottom bottom",
            pin: ".home_slider",
            pinSpacing: true,
            scrub: false,
            markers: false,
          }
        });

        cards.forEach((card, i) => {
          tl.to(
            card,
            {
              y: 0, // Adjust to match desired animation
              yPercent: 0
            },
            "<"
          ).to(card, {
            autoAlpha: 1,
            duration: 1
          });
        });




    // for animated polyline line animation when section is reach
    
    // script.js

    document.addEventListener("DOMContentLoaded", function () {
        const sections = document.querySelectorAll('.b-section-panel');
    
        const observerOptions = {
            root: null, // Use the viewport as the container
            rootMargin: '0px',
            threshold: 0.5 // Trigger when at least 50% of the section is in view
        };
    
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const svg1 = entry.target.querySelector('.b-section-panel__border-line');
                    const svg2 = entry.target.querySelector('.b-section-panel__border-line_2');
                    
                    if (svg1) {
                        svg1.classList.add('animate-border');
                    }
                    
                    if (svg2) {
                        svg2.classList.add('animate-border');
                    }
    
                    observer.unobserve(entry.target); // Stop observing after the animation is triggered
                }
            });
        }, observerOptions);
    
        sections.forEach(section => {
            observer.observe(section);
        });
    });



    // for 3 divs animation on home page
    
    document.addEventListener('DOMContentLoaded', function() {
        const animatedElements = document.querySelectorAll('.animate-on-scroll');
    
        function checkScroll() {
        const triggerBottom = window.innerHeight / 5 * 4;
        animatedElements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
    
            if(elementTop < triggerBottom) {
            element.classList.add('scroll_up');
            } else {
            element.classList.remove('scroll_up');
            }
        });
        }
    
        window.addEventListener('scroll', checkScroll);
        checkScroll(); // Initial check on page load
    });
    
    document.addEventListener('DOMContentLoaded', function() {
        const animatedElements = document.querySelectorAll('.animate-on-scroll-down');
    
        function checkScroll() {
        const triggerBottom = window.innerHeight / 5 * 4;
        animatedElements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
    
            if(elementTop < triggerBottom) {
            element.classList.add('scroll_down');
            } else {
            element.classList.remove('scroll_down');
            }
        });
        }
    
        window.addEventListener('scroll', checkScroll);
        checkScroll(); // Initial check on page load
    });
    
    // to change background color on click to slide in three animated divs
    
$(document).ready(function() {
    // Background colors array
    const backgroundColors = [ "#483e31" , "#443f38"];

    const owl = $('#three_animated_carousel');
    owl.owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    owl.on('changed.owl.carousel', function(event) {
        // Get the index of the current slide
        const currentIndex = event.item.index;
        const normalizedIndex = currentIndex % backgroundColors.length;

        // Change the background color of the section element
        $('.three_animated_section').css('background-color', backgroundColors[normalizedIndex]);
    });

    // Initialize with the first background color
    $('.three_animated_section').css('background-color', backgroundColors[1]);
});

	/*--to change background color on click or on slide --*/

    // owl carousel
    
    
    /*$(document).ready(function(){
        $("#three_animated_carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: false,
            dots: false,
            autoplayTimeout: 5000,
            autoplayHoverPause: false,
            mouseDrag: false, // Disable drag
            touchDrag: false, // Disable touch drag
            responsive:{
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            },
            onTranslated: updateCarouselItems,
            onInitialized: updateCarouselItems
        });
    
        function updateCarouselItems(event) {
            var items = $('#three_animated_carousel .owl-item');
            items.removeClass('odd even');
            items.each(function(index) {
                if (index % 2 === 0) {
                    $(this).addClass('even');
                } else {
                    $(this).addClass('odd');
                }
            });
        }
    });*/

  
    $(document).ready(function(){
        $("#our_works_carousel").owlCarousel({
            loop:true,
            margin:0,
            nav:false, // Add navigation buttons
            autoplay:true,
            dots:true,
            autoplayTimeout:5000,
            autoplayHoverPause:false,
            animateOut: 'animated-out', // Use the CSS class for the out animation
            animateIn: 'animated-in', // Use the CSS class for the in animation
            smartSpeed: 1500, // Transition speed in milliseconds
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });
    
    });

  
    $(document).ready(function(){
        $("#what_we_do_images_slider").owlCarousel({
        loop:true,
        margin:0,
        nav:true, // Show navigation buttons
        autoplay:true, // Autoplay
        dots:false,
        autoplayTimeout:3000, // Autoplay interval in milliseconds
        autoplayHoverPause:true, // Pause autoplay on hover
        responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
        }
        });
        owl.on('resized.owl.carousel', function(event) {
            var viewportWidth = $(window).width();
            if (viewportWidth <= 600) {
                // Custom transform for mobile view
                $('.owl-stage').css('transform', 'translate3d(-1344px, 0px, 0px)');
            } else if (viewportWidth > 600 && viewportWidth <= 1000) {
                // Custom transform for tablet view
                $('.owl-stage').css('transform', 'translate3d(-1315px, 0px, 0px)');
            } else {
                // Custom transform for desktop view
                $('.owl-stage').css('transform', 'translate3d(-1095px, 0px, 0px)');
            }
        });
    });

    $(document).ready(function(){
        $("#training_slider").owlCarousel({
        loop:true,
        margin:10,
        nav:true, // Show navigation buttons
        autoplay:true, // Autoplay
        dots:false,
        autoplayTimeout:3000, // Autoplay interval in milliseconds
        autoplayHoverPause:true, // Pause autoplay on hover
        responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
        }
        });
    });
    
    $(document).ready(function(){
        $("#testimonial_slider").owlCarousel({
        loop:true,
        margin:10,
        nav:false, // Show navigation buttons
        autoplay:true, // Autoplay
        dots:false,
        autoplayTimeout:3000, // Autoplay interval in milliseconds
        autoplayHoverPause:true, // Pause autoplay on hover
        responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2
        }
        }
        });
    });
    
    
    
    
    
    // for input file on career page
    
    function showFileName() {
        const fileInput = document.getElementById('fileUpload');
        const fileName = fileInput.files.length > 0 ? fileInput.files[0].name : 'Upload Portfolio - Pdf, Doc, Docs, Ppt.';
        document.getElementById('fileUploadInfo').textContent = fileName;
    }
    
    // fancy box image gallery for work page
    
    $(document).ready(function() {
      $('[data-fancybox="image"]').fancybox({
        buttons : [
          'slideShow',
          'share',
          'zoom',
          'fullScreen',
          'download',
          'thumbs',
          'close'
        ],
        loop: true,
        arrows: true // Ensuring arrows are enabled
      });
    });
    
    
    // aos animation for once only
    
    AOS.init({
      once: true // Animation will only happen once
    });
    
    