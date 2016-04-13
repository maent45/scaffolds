module.exports = function(grunt) {
    require('jit-grunt')(grunt);

    grunt.initConfig({
        less: {
            development: {
                options: {
                    compress: true,
                    yuicompress: true,
                    optimization: 2
                },
                files: {
                    "themes/superior-scaffolding/css/main.css": "themes/superior-scaffolding/less/main.less",
                    "themes/superior-scaffolding/css/homepage.css": "themes/superior-scaffolding/less/homepage.less",
                    "themes/superior-scaffolding/css/residential.css": "themes/superior-scaffolding/less/residential.less" // destination file and source file
                }
            }
        },
        watch: {
            styles: {
                files: ['less/**/*.less'], // which files to watch
                tasks: ['less'],
                options: {
                    nospawn: true
                }
            }
        }
    });

    grunt.registerTask('default', ['less', 'watch']);
};