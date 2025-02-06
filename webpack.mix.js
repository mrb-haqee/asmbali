const mix = require("laravel-mix");
mix.styles(
    [
        "resources/asset/css/bootstrap.min.css",
        "resources/asset/css/animate.min.css",
        "resources/asset/css/magnific-popup.min.css",
        "resources/asset/css/icofont.min.css",
        "resources/asset/css/modal-video.min.css",
        "resources/asset/css/swiper.min.css",
        "resources/asset/css/aos.css",
    ],
    "public/css/plugins.css"
)
    .minify("public/css/plugins.css")
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

mix.styles(
    [
        "resources/asset/css/style.css",
        "resources/asset/css/responsive.css",
        "resources/asset/css/margin-paddings.css",
    ],
    "public/css/custom.css"
);

mix.copyDirectory("resources/asset/css/colors", "public/css/colors");
// mix.copyDirectory("resources/asset/js", "public/js");
// mix.copyDirectory("resources/asset/demo", "public/demo");
// mix.copyDirectory("resources/asset/fonts", "public/fonts");
// mix.copyDirectory("resources/asset/img", "public/img");
