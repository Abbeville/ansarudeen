const cssImport = require('postcss-import')
const cssNesting = require('postcss-nesting')
const mix = require('laravel-mix');
const path = require('path');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .postCss('resources/css/app.css', 'public/css', [
        //
    ])
    .sourceMaps(true, 'source-map')
    .options({
        postCss: [
            cssImport(),
            cssNesting()
        ]
    });

    if (mix.inProduction()) {
        mix.options({
            cssNano: {
                discardComments: {
                    removeAll: true,
                },
            }
        })
        .version();
    } else {
        mix.webpackConfig({
            devtool: 'inline-source-map'
        })
        .browserSync({
            injectChanges: true,
            port: 3000,
            https: true,
            proxy: 'https://kniva-ma.lndo.site',
            open: false
        });
    }
