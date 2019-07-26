const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const ProgressBarPlugin = require('progress-bar-webpack-plugin');

module.exports = {
    mode: 'production',
    entry: [
        './src/js/main.js',
        './src/css/main.scss'
    ],
    stats: {
        colors: true,
        errors: true,
        warnings: true
    },
    output: {
        filename: 'dist/js/main.js',
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
                use: [
                    {
                        loader: MiniCssExtractPlugin.loader
                    },
                    {
                        loader: 'css-loader'
                    },
                    {
                        loader: 'postcss-loader',
                        options: {
                            plugins: [
                                require('autoprefixer')({}),
                                require('cssnano')({ preset: 'default' })
                            ],
                            minimize: true
                        }
                    },
                    {
                        loader: 'sass-loader',
                        options: {
                            implementation: require('sass')
                        }
                    }
                ]
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
    plugins: [
        new ProgressBarPlugin({
            format: 'Building: [:bar] (:percent | :elapsed seconds)',
            width: 100,
            complete: '#',
            incomplete: '-'
        }),
        new MiniCssExtractPlugin({
            filename: './dist/css/main.min.css'
        })
    ]
};
