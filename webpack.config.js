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
    entry: ['./src/js/main.js', './src/css/main.scss'],
    stats: {
        colors: true,
        errors: true,
        warnings: true
    },
    output: {
        filename: './dist/js/main.js',
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
            },
            {
                test: /\.(jpe?g|png|gif|woff|woff2|eot|ttf|svg)(\?[a-z0-9=.]+)?$/,
                use: [{ loader: 'file-loader', 
                    options: { 
                        outputPath: './dist/img',
                        name: '[name].[ext]',
                        path: path.resolve(__dirname, 'dist'),
                        publicPath: '../../dist/img' 
                    }
                }] 
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
        new CleanTerminalPlugin({
            message: 'Terminal cleaned'
        }),
        new MiniCssExtract({
            filename: './dist/css/main.min.css'
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
            new OptimizeCSSAssets({
                cssProcessor: require('cssnano'),
                cssProcessorPluginOptions: {
                    preset: ['default', { discardComments: { removeAll: true } }],
                }
            })
        ]
    }
};
