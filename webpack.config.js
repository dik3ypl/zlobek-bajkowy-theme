const path = require('path');
console.log(path.resolve(__dirname, 'assets/js'))
module.exports = {
    entry: './src/scripts/index.js',
    output: {
        filename: 'index.js',
        path: path.resolve(__dirname, 'assets/js')
    },
    mode: 'development'
};