//shrink navbar size when scrolled
// $(document).ready(function () {
//     var scrollTop = 0;
//     $(window).scroll(function () {
//         scrollTop = $(window).scrollTop();
//         $('.counter').html(scrollTop);

//         if (scrollTop >= 100) {
//             $('#navbar').addClass('scrolled-nav');
//         } else if (scrollTop < 100) {
//             $('#navbar').removeClass('scrolled-nav');
//         }

//     });

// });

// add padding top to show content behind navbar

$("body").css("padding-top", $(".navbar").outerHeight() + "px");

// detect scroll top or down

if ($(".navbar").length > 0) {
  // check if element exists

  var last_scroll_top = 0;

  $(window).on("scroll", function () {
    scroll_top = $(this).scrollTop();

    if (scroll_top < last_scroll_top) {
      $(".navbar").removeClass("scrolled-down").addClass("scrolled-up");
    } else {
      $(".navbar").removeClass("scrolled-up").addClass("scrolled-down");
    }

    last_scroll_top = scroll_top;
  });
}

// ----------Navbar overlay ---------

function openNav() {
  document.getElementById("collapsibleNavbar").style.width = "100%";
}

function closeNav() {
  document.getElementById("collapsibleNavbar").style.width = "0%";
}

// ------------dropdown display on hover-------------------

const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function () {
  if (this.matchMedia("(min-width: 990px)").matches) {
    $dropdown.hover(
      function () {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
        $this.find($dropdownMenu).addClass(showClass);
      },
      function () {
        const $this = $(this);
        $this.removeClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "false");
        $this.find($dropdownMenu).removeClass(showClass);
      }
    );
  } else {
    $dropdown.off("mouseenter mouseleave");
  }
});
