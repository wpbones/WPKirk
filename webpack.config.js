var path = require("path")

module.exports = {
  entry: "./resources/assets/tsx/app.tsx",
  output: {
    path: path.join(__dirname, "/public/js")
  },
  resolve: {
    alias: {
      components: path.resolve(__dirname, "resources/assets/tsx/components")
    },
    extensions: ['.ts', '.tsx', '.js', '.json'],
  },
  module: {
    rules: [
      {
        test: /\.(ts|tsx)$/,
        exclude: /node_modules/,
        use: 'ts-loader',
      },
      {
        test: /\.less$/,
        use: [
          {
            loader: "style-loader"
          },
          {
            loader: "css-loader",
            options: {
              sourceMap: true,
              importLoaders: 2,
              modules: {
                localIdentName: "[local]___[hash:base64:5]"
              }
            }
          },
          {
            loader: "less-loader"
          }
        ]
      }
    ]
  }
}

