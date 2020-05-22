const path = require('path');
const VueLoaderPlugin = require('vue-loader/lib/plugin')
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

jsModule = {
   entry: './resources/js/app.js',
   output:{
       path: path.resolve(__dirname, 'public/js'),
       filename: 'app.js'
   },
   module: {
    rules: [
      {
        test: /\.vue$/,
        loader: [
            'vue-loader',
        ]
      }
    ]
  },
  plugins: [
    new VueLoaderPlugin()
  ],
  mode: 'development'
};

sassModule = {
    entry: './resources/sass/app.scss',
    output:{
        path: path.resolve(__dirname, 'public/css'),
    },
    plugins: [
      new MiniCssExtractPlugin({
        filename: "app.css"
      })
    ],
    module: {
      rules: [
        {
          test: /\.scss$/,
          use: [
            MiniCssExtractPlugin.loader,
            'css-loader',
            'sass-loader'
          ],
        },
      ],
    },
    mode: 'development'
};

module.exports = [
    jsModule,
    sassModule
]