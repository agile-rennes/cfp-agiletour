const path = require('path');

var webpack = require('webpack');

module.exports = {
    entry: './src/app.js',
    output: {
        path: path.resolve(__dirname, 'bin'),
        filename: 'app.bundle.js'
    },
    plugins: [
        new webpack.ProvidePlugin({
            jQuery: "jquery"
        })
    ]
};
