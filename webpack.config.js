const path = require("path");

module.exports = {
    mode: "production",
    entry: {
        index: path.resolve(__dirname, "src", "js", "main.js"),
    },
    output: {
        filename: "main.js",
        path: path.resolve(__dirname, "dist"),
    },
    optimization: {
        minimize: false, // <—- disables uglify.
    }
}