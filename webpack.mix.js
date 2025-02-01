const mix = require("laravel-mix");
mix.styles(
    [
        "resources/asset/css/animate.min.css",
        "resources/asset/css/bootstrap.min.css",
        "resources/asset/css/icofont.min.css",
        "resources/asset/css/magnific-popup.css",
        "resources/asset/css/margin-paddings.css",
        "resources/asset/css/modal-video.min.css",
        "resources/asset/css/swiper.min.css",
        "resources/asset/css/style.css",
        "resources/asset/css/responsive.css",
    ],
    "public/css/all.css"
)
    .minify("public/css/all.css")
    .options({
        processCssUrls: false,
        postCss: [
            require("cssnano")({
                preset: [
                    "default",
                    {
                        discardComments: {
                            removeAll: true,
                        },
                    },
                ],
            }),
        ],
    });
mix.copyDirectory("resources/asset/js", "public/js");
mix.copyDirectory("resources/asset/css/colors", "public/css/colors");
mix.copyDirectory("resources/asset/demo", "public/demo");
mix.copyDirectory("resources/asset/fonts", "public/fonts");
mix.copyDirectory("resources/asset/img", "public/img");
