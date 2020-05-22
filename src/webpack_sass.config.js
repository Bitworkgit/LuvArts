const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
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