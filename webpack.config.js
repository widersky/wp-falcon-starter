const path = require('path');
const UglifyJS = require('uglifyjs-webpack-plugin');
const MiniCssExtract = require("mini-css-extract-plugin");
const OptimizeCSSAssets = require("optimize-css-assets-webpack-plugin");

module.exports = {
    entry: ['./js/src/main.js', './css/src/main.scss'],
    stats: {
        colors: true,
        errors: true,
        warnings: true
    },
    output: {
        filename: './js/dist/main.js',
        path: path.resolve(__dirname)
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: "babel-loader",
                    options: {
                        presets: ['@babel/preset-env']
                    }
                }
            },
            {
                test: /\.(sass|scss)$/,
                use: [MiniCssExtract.loader, 'css-loader', 'sass-loader']
            }
        ]
    },
    plugins: [
        new MiniCssExtract({
            filename: './css/dist/main.min.css'
        })
    ],
    optimization: {
        minimizer: [
            new UglifyJS({
                cache: true,
                parallel: true
            }),
            new OptimizeCSSAssets({})
        ]
    }
};
