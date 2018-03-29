const path = require('path');
const webpack = require('webpack');
const extractSass = require("extract-text-webpack-plugin");
const minifyPlugin = require("babel-minify-webpack-plugin");
const autoprefixer = require('autoprefixer');


const env = {
    'process.env': {
        NODE_ENV: JSON.stringify(process.env.NODE_ENV || 'development')
    }
};

module.exports = {
    entry: './assets/scripts/main.js',
    output: {
        filename: 'scripts/main.js',
        path: path.resolve(__dirname, 'dist'),
        publicPath: 'wp-content/themes/portfolio'
    },

    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: "babel-loader"
            },

            {
                test: /\.scss$/,
                exclude: /node_modules/,
                use: extractSass.extract({
                    fallback: "style-loader",
                    use:
                    [
                        { loader: "css-loader", options: { sourceMap: true } },
                        { loader: "postcss-loader", options: { sourceMap: true } },
                        { loader: "sass-loader", options: { sourceMap: true } }
                    ]
                })
            }
        ]
    },
    stats: {
        children: false,
        performance: true,
        colors: true,
        chunks: true,

    },
    plugins: [
        new extractSass("styles/main.css"),
        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery',
            'window.jQuery': 'jquery',
            Popper: ['popper.js', 'default'],
            Util: "exports-loader?Util!bootstrap/js/dist/util",
            Dropdown: "exports-loader?Dropdown!bootstrap/js/dist/dropdown",
        }),
        //new minifyPlugin()
    ]

};
