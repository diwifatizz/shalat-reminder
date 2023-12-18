(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($("#spinner").length > 0) {
                $("#spinner").removeClass("show");
            }
        }, 1);
    };
    spinner(0);

    // Fixed Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $(".sticky-top").addClass("shadow-sm").css("top", "0px");
        } else {
            $(".sticky-top").removeClass("shadow-sm").css("top", "-200px");
        }
    });

    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $(".back-to-top").fadeIn("slow");
        } else {
            $(".back-to-top").fadeOut("slow");
        }
    });
    $(".back-to-top").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
        return false;
    });

    // Latest-news-carousel
    $(".latest-news-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 2000,
        center: false,
        dots: true,
        loop: true,
        margin: 25,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>',
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 4,
            },
        },
    });

    // What's New carousel
    $(".whats-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 2000,
        center: false,
        dots: true,
        loop: true,
        margin: 25,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>',
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 2,
            },
            1200: {
                items: 2,
            },
        },
    });

    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $(".btn-play").click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $("#videoModal").on("shown.bs.modal", function (e) {
            $("#video").attr(
                "src",
                $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0"
            );
        });

        $("#videoModal").on("hide.bs.modal", function (e) {
            $("#video").attr("src", $videoSrc);
        });
    });
})(jQuery);

// Fungsi untuk mendapatkan waktu dan tanggal aktual
function getCurrentTime() {
    const now = new Date();
    const hours = now.getHours().toString().padStart(2, "0");
    const minutes = now.getMinutes().toString().padStart(2, "0");
    const seconds = now.getSeconds().toString().padStart(2, "0");
    const formattedTime = `${hours}:${minutes}:${seconds}`;

    const day = now.toLocaleDateString("id-ID", { weekday: "short" });
    const date = now.toLocaleDateString("id-ID", {
        day: "numeric",
        month: "numeric",
        year: "numeric",
    });
    const formattedDate = `${day}. ${date}`;

    document.getElementById("current-time").textContent = formattedTime;
    document.getElementById("current-date").textContent = formattedDate;
}

// Fungsi untuk mendapatkan waktu dan tanggal aktual
function getCurrentDateTime() {
    const now = new Date();
    const time = now.toLocaleTimeString("en-US", { hour12: false });
    const date = now.toLocaleDateString("en-US", {
        weekday: "short",
        day: "2-digit",
        month: "2-digit",
        year: "numeric",
    });

    // Perbarui elemen HTML dengan ID yang sesuai
    document.getElementById("current-time").textContent = time;
    document.getElementById("current-date").textContent = date;
}

// Panggil fungsi pertama kali dan set interval untuk memperbarui waktu setiap detik
getCurrentDateTime();
setInterval(getCurrentDateTime, 1000);
