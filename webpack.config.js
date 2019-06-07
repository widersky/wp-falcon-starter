const path = require('path');
const UglifyJS = require('uglifyjs-webpack-plugin');
const MiniCssExtract = require('mini-css-extract-plugin');
const OptimizeCSSAssets = require('optimize-css-assets-webpack-plugin');
const BrowserSync = require('browser-sync-webpack-plugin');
const CleanTerminalPlugin = require('clean-terminal-webpack-plugin');

const config = {
    url: 'http://purewp.local/'
}

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
    devServer: {
        historyApiFallback: true,
        compress: true,
        port: 9000,
        https: config.url.indexOf('https') > -1 ? true : false,
        proxy: {
            '*': {
                'target': config.url,
                'secure': false
            },
            '/': {
                target: config.url,
                secure: false
            }
        },
    },
    plugins: [
        new CleanTerminalPlugin(),
        new MiniCssExtract({
            filename: './css/dist/main.min.css'
        }),
        new BrowserSync( {
                proxy: config.url,
                files: [
                    '**/*.php'
                ],
                reloadDelay: 0
            }
        )
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
