const path = require('path');
const VueLoaderPlugin = require('vue-loader/lib/plugin')

module.exports = {
   entry: './resources/js/app.js',
   output:{
       path: path.resolve(__dirname, 'public/js'),
       filename: 'app.js'
   },
   module: {
    rules: [
      {
        test: /\.vue$/,
        loader: 'vue-loader'
      }
    ]
  },
  plugins: [
    new VueLoaderPlugin()
  ],
  mode: 'development'
};