// webpack.config.js
const Encore = require('@symfony/webpack-encore');
const SpriteLoaderPlugin = require('svg-sprite-loader/plugin');

Encore.disableSingleRuntimeChunk()

  // directory where all compiled assets will be stored
  .setOutputPath('./local/build/')

  // what's the public path to this directory (relative to your project's document root dir)
  .setPublicPath('/local/build/')

  // empty the outputPath dir before each build
  .cleanupOutputBeforeBuild()

  .enableVueLoader()

  // will output as web/build/global.css
  .addStyleEntry('global', './local/assets/styles/app.scss')

  // will output as web/build/app.js
  .addEntry('main', './local/assets/scripts/main.js')

  // allow sass/scss files to be processed
  .enableSassLoader(() => { }, { resolveUrlLoader: false })
  .enablePostCssLoader()

  .addLoader({
    test: /\.svg$/,
    // include: 'local/assets/icons',
    use: [
      {
        loader: 'svg-sprite-loader',
        options: {
          extract: true,
          outputPath: 'icons/',
          spriteFilename: 'sprite.svg',
          runtimeCompat: true,
          esModule: false,
        },
      },
      'svgo-loader',
    ],
  })

  .addPlugin(
    new SpriteLoaderPlugin({
      plainSprite: true,
    })
  )

  .copyFiles({
    from: './local/assets/images',
    to: 'images/[path][name].[hash:8].[ext]',
    pattern: /\.(png|jpg|jpeg)$/
  })

  // allow legacy applications to use $/jQuery as a global variable
  //.autoProvidejQuery()

  // you can use this method to provide other common global variables,
  // such as '_' for the 'underscore' library
  .autoProvideVariables({
    $: 'jquery',
    jQuery: 'jquery',
    'window.jQuery': 'jquery',
    BX: 'BX',
    'window.BX': 'BX',
  })

  .enableSourceMaps(!Encore.isProduction())

  // https://webpack.js.org/plugins/define-plugin/
  .configureDefinePlugin((options) => {
    options.DEBUG = !Encore.isProduction();
  })

  // create hashed filenames (e.g. app.abc123.css)

  .configureFilenames({
    js: '[name].[hash:8].js',
  })

  .enableVersioning();

var config = Encore.getWebpackConfig();
config.externals = {
  jquery: 'jQuery',
  BX: 'BX',
};

// export the final configuration
module.exports = config;
