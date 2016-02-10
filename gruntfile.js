"use strict";

module.exports = function (grunt) {

    var default_theme_path = "themes/ip/";

    // load grunt tasks
    require("load-grunt-tasks")(grunt);

    grunt.initConfig({

        config: {
            src: "themes/ip",
            dest: "themes/ip"
        },
        jshint: {
            options: {
                jshintrc: ".jshintrc"
            },
            all: [
                "themes/ip/js/app.js"
            ]
        },
        sass: {
            dist: {
                options: {
                    style: "compressed",
                    compass: true,
                    sourcemap: false
                },
                files: {
                    "themes/ip/css/app.min.css": "themes/ip/scss/app.scss"
                }
            }
        },
        uglify: {
            dist: {
                files: {
                    "themes/ip/js/dependencies.min.js": [
                        "themes/vendor/jquery/dist/jquery.js",
                        "themes/vendor/tether/dist/js/tether.js",
                        "themes/vendor/bootstrap/dist/js/bootstrap.js"
                    ],
                    "themes/ip/js/prism.min.js": [
                        "themes/vendor/prism/components/prism-core.js",
                        "themes/vendor/prism/components/prism-clike.js",
                        "themes/vendor/prism/components/prism-markup.js",
                        "themes/vendor/prism/plugins/line-numbers/prism-line-numbers.js",
                        "themes/vendor/prism/components/prism-css.js",
                        "themes/vendor/prism/components/prism-javascript.js",
                        "themes/vendor/prism/components/prism-git.js",
                        "themes/vendor/prism/components/prism-markdown.js",
                        "themes/vendor/prism/components/prism-php.js",
                        "themes/vendor/prism/components/prism-php-extras.js",
                        "themes/vendor/prism/components/prism-scss.js",
                        "themes/vendor/prism/components/prism-sql.js"
                    ],
                    "themes/ip/js/app.min.js": [
                        "themes/ip/js/app.js"
                    ]
                },
                options: {
                    sourceMap: "themes/ip/js/app.min.js.map",
                    sourceMappingURL: "/themes/ip/js/app.min.js.map"
                }
            }
        },
        watch: {
            sass: {
                files: [
                    "themes/ip/scss/*.scss"
                ],
                tasks: ["sass"]
            },
            js: {
                files: [
                    "<%= jshint.all %>"
                ],
                tasks: ["jshint", "uglify"]
            }
        },
        clean: {
            dist: [
                "themes/ip/fonts/font-awesome/*",
                "themes/ip/css/*.min.css",
                "themes/ip/css/*.min.css.map",
                "themes/ip/js/*.min.js",
                "themes/ip/js/*.min.js.map"
            ]
        }
    });

    // Register tasks
    grunt.registerTask("build", [
        "clean",
        "sass",
        "jshint",
        "uglify"
    ]);
    grunt.registerTask("dev", [
        "build",
        "watch"
    ]);

};
