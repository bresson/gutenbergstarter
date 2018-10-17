module.exports = {
    entry: './src/index.js',
    output: {
        path: __dirname + '/dist', 
        filename: 'build.js'
    },

    module: {
        rules: [
            {
                test: /.js$/,
                loader: 'babel-loader',
                exclude: /node_modules/
            }
        ]
    }
}