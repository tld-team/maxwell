// webpack.mix.js

let mix = require('laravel-mix');

mix
    .js('assets/src/js/gallery.js', 'assets/dist/js/gallery.js')
    // .js('assets/src/js/admin.js','assets/dist/js/admin.js') // sluzi da dashboard deo
    // .js('assets/src/js/auth.js','assets/dist/js/auth.js')
    // .js('assets/src/js/glightbox.js','assets/dist/js/glightbox.js')
    .js('assets/src/js/head.js','assets/dist/js/head.js')
    // .js('assets/src/js/swiper.js','assets/dist/js/swiper.js')
    .js('assets/src/js/swiper.js','assets/dist/js/swiper.js')
    .js('assets/src/js/feedback_swiper.js','assets/dist/js/feedback_swiper.js')
    .js('assets/src/js/testimonials_swiper.js','assets/dist/js/testimonials_swiper.js')
    .js('assets/src/js/testimonials.js','assets/dist/js/testimonials.js')
    .js('assets/src/js/testimonial_directory.js','assets/dist/js/testimonial_directory.js')
    .js('assets/src/js/hero_swiper.js','assets/dist/js/hero_swiper.js')
    .js('assets/src/js/theme.js','assets/dist/js/theme.js')
    .js('assets/src/js/custom_dashboard.js','assets/dist/js/custom_dashboard.js')

