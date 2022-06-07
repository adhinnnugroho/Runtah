$(".pc_slider").owlCarousel({
    loop: true,
    margin: 0,
    items: 2,
    autoplay: true,
    nav: false,
    dots: false,
    autoplayHoverPause: true,
    autoplaySpeed: 800,
    responsive: {
        0: {
            items: 2,
            dots: false,
        },
        767: {
            items: 2,
            dots: false,
        },
        992: {
            items: 2,
        },
        1200: {
            items: 2,
        },
        1500: {
            items: 2,
        },
    },
});

$(".mobile_slider").owlCarousel({
    loop: true,
    margin: 0,
    items: 1,
    autoplay: true,
    nav: false,
    dots: false,
    autoplayHoverPause: true,
    autoplaySpeed: 800,
    responsive: {
        0: {
            items: 1,
            dots: false,
        },
        767: {
            items: 1,
            dots: false,
        },
        992: {
            items: 1,
        },
        1200: {
            items: 1,
        },
        1500: {
            items: 1,
        },
    },
});

// Tour Version Mobile
$(".mainmenu").owlCarousel({
    loop: false,
    margin: 10,
    stagePadding: 10,
    items: 10,
    autoplay: false,
    nav: false,
    dots: false,
    autoplayHoverPause: true,
    autoplaySpeed: 800,
    responsive: {
        0: {
            items: 10,
            dots: false,
        },
        767: {
            items: 10,
            dots: false,
        },
        992: {
            items: 10,
        },
        1200: {
            items: 10,
        },
        1500: {
            items: 10,
        },
    },
});
$(".mobile_menu").owlCarousel({
    loop: false,
    margin: 10,
    stagePadding: 10,
    items: 3,
    autoplay: false,
    nav: false,
    dots: false,
    autoplayHoverPause: true,
    autoplaySpeed: 800,
    responsive: {
        0: {
            items: 3,
            dots: false,
        },
        767: {
            items: 3,
            dots: false,
        },
        992: {
            items: 3,
        },
        1200: {
            items: 3,
        },
        1500: {
            items: 3,
        },
    },
});

$("#showPass").on("input", function () {
    let pass = $("#password");
    if ($("#showPass").is(":checked")) {
        pass.prop("type", "text");
    } else {
        pass.prop("type", "password");
    }
});

$("#lihat_password").on("input", function () {
    const password = $("#show_password");
    if ($("#lihat_password").is(":checked")) {
        password.prop("type", "text");
    } else {
        password.prop("type", "password");
    }
});

// sampah

!(function ($) {
    "use strict";
    // Porfolio isotope and filter
    $(document).ready(function () {
        var portfolioIsotope = $(".nama_sampah").isotope({
            itemSelector: ".portfolio-item",
            layoutMode: "fitRows",
        });

        $(".menu a").on("click", function () {
            $(".menu a").removeClass("filter-active");
            $(this).addClass("filter-active");

            portfolioIsotope.isotope({
                filter: $(this).data("filter"),
            });
            aos_init();
        });
    });
    // Init AOS
    function aos_init() {
        AOS.init({
            duration: false,
            once: false,
            mirror: false,
        });
    }
    $(document).ready(function () {
        aos_init();
    });
})(jQuery);

$("#Logout").on("click", function (e) {
    e.preventDefault();
    const link = $(this).attr("href");
    Swal.fire({
        title: "",
        text: "kamu mau logout??",
        icon: "question",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, Logout",
    }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = link;
        }
    });
});

$("#btn-upload").on("click", function () {
    $("#input-foto").trigger("click");
});
$("#input-foto").on("change", function () {
    let input = $("#input-foto");
    if (input.prop("files") && input.prop("files")[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $("#preview-profile").prop("src", e.target.result);
        };

        reader.readAsDataURL(input.prop("files")[0]);
    }
});
$("#btnUpload").on("click", function () {
    $("#inputFoto").trigger("click");
});
$("#inputFoto").on("change", function () {
    let input = $("#inputFoto");
    if (input.prop("files") && input.prop("files")[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $("#preview").prop("src", e.target.result);
        };

        reader.readAsDataURL(input.prop("files")[0]);
    }
});
// function for qty chekout
$("#minus_button").on("click", function () {
    const qty = Number($("#qty").text());
    if (qty == 1) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Untuk Chekout Sampah ini minimal berat 1kg',
        })
    } else {
        $("#qty").text(qty - 1);
        $("#berat").val(qty - 1)
    }
});

$("#tambah_button").on("click", function () {
    const qty = Number($("#qty").text());
    $("#qty").text(qty + 1);
    $("#berat").val(qty + 1)
});