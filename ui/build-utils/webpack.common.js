const commonPaths = require("./common-paths");
const webpack = require("webpack");
const htmlWebpackPlugin = require("html-webpack-plugin");

const config = {
  entry: {
    app: "./src/index.js",
    vendor: ["react", "react-dom", "react-router", "react-router-dom"]
  },
  output: {
    filename: "[chunkhash].bundle.js",
    path: commonPaths.outputPath
  },
  resolve: {
    extensions: [".js", ".jsx"]
  },
  module: {
    rules: [
      {
        test: /\.(jpe?g|png|gif|svg)$/i,
        use: [
          {
            loader: "url-loader",
            options: {
              limit: 1000
            }
          }
        ]
      },
      {
        test: /\.html$/,
        loader: "html-loader"
      }
    ]
  },
  plugins: [
    new webpack.ProgressPlugin(),
    new htmlWebpackPlugin({
      template: "public/index.html"
    }),
    new webpack.optimize.CommonsChunkPlugin({
      name: "vendor",
      filename: "vendor.js"
    })
  ]
};

module.exports = config;
