module.exports = function (grunt) {
    grunt.loadNpmTasks('grunt-contrib-stylus');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-htmlmin');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-html-validation');
    grunt.loadNpmTasks('grunt-ejs-render');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-connect');

    grunt.registerTask('default', [
        'stylus',
        'copy:favicon',
        'copy:fonts',
        'copy:images',
        'copy:js',
        'copy:locales',
        'render:dev',
        'copy:misc'
    ]);

    grunt.registerTask('test', [
        'default',
        'validation:dev'
    ]);

    grunt.registerTask('dist', [
        'clean',
        'css',
        'html',
        'js',
        'validation:dist',
        'copy:favicon',
        'copy:fonts',
        'copy:locales',
        'copy:misc'
    ]);

    grunt.registerTask('css', [
        'stylus',
        'cssmin'
    ]);

    grunt.registerTask('html', [
        'render:dist',
        'htmlmin'
    ]);

    grunt.registerTask('js', [
        'uglify'
    ]);

    grunt.registerTask('develop', [
        'connect',
        'watch'
    ]);

    grunt.config('pkg', grunt.file.readJSON('package.json'));
    grunt.config('metadata', grunt.file.readJSON('metadata.json'));
    grunt.initConfig({
        // Stylus Compiling
        stylus: {
            compile: {
                options: {
                    compress: false,
                    'resolve url': true,
                    use: ['nib'],
                    paths: ['stylus']
                },
                files: {
                    'compiled/css/main.css': 'src/stylus/main.styl'
                }
            }
        },
        // HTML Minify
        htmlmin: {
            compile: {
                options: {
                    removeComments: true,
                    collapseWhitespace: true,
                    collapseBooleanAttributes: true,
                    removeRedundantAttributes: true,
                    useShortDoctype: true,
                    keepClosingSlash: false,
                    caseSensitive: true
                },
                files: {
                    'compiled/index.html': 'compiled/index.html',
                    'compiled/faq.html': 'compiled/faq.html',
                    'compiled/tos.html': 'compiled/tos.html'
                }
            }
        },
        // CSS Minify
        cssmin: {
            compile: {
                files: {
                    'compiled/css/main.min.css': 'compiled/css/main.css'
                }
            }
        },
        // JS Minify
        uglify: {
            compile: {
                files: {
                    'compiled/js/main.min.js': 'src/js/main.js'
                }
            }
        },
        // Image (lossless) Compression
        imagemin: {
            main: {
                options: {
                    optimizationLevel: 3
                },
                files: [{
                    expand: true,
                    cwd: 'src/',
                    src: 'images/*.{png,jpg,gif,svg}',
                    dest: 'compiled/'
                }]
            }
        },
        // HTML5 Validation
        validation: {
            dev: {
                path: false,
                reportpath: false,
                stoponerror: false,
                files: {
                    src: [
                        'compiled/index.html',
                        'compiled/faq.html',
                        'compiled/tos.html'
                    ]
                }
            },
            dist: {
                path: false,
                reportpath: false,
                stoponerror: false,
                files: {
                    src: [
                        'compiled/index.html',
                        'compiled/faq.html',
                        'compiled/tos.html'
                    ]
                }
            }
        },
        // Dist Cleaning
        clean: ['compiled/'],
        // Asset Copying
        copy: {
            favicon: {
                expand: true,
                cwd: 'src/',
                src: 'favicon.ico',
                dest: 'compiled/'
            },
            fonts: {
                expand: true,
                cwd: 'src/',
                src: 'fonts/*',
                dest: 'compiled/'
            },
            images: {
                expand: true,
                cwd: 'src/',
                src: 'images/*',
                dest: 'compiled/'
            },
            js: {
                expand: true,
                cwd: 'src/',
                src: 'js/*',
                dest: 'compiled/'
            },
            misc: {
                expand: true,
                cwd: 'src/',
                src: ['update.json', 'update2.json', 'update3.json', 'update4.json', 'notification.json', 'sitemap.xml', 'robots.txt'],
                dest: 'compiled/'
            },
            locales: {
                expand: true,
                cwd: 'src/',
                src: 'locales/*/*',
                dest: 'compiled/'
            }
        },
        // Static Webserver
        connect: {
            server: {
                options: {
                    port: 8080,
                    base: 'compiled'
                }
            }
        },
        // EJS Rendering
        render: {
            dev: {
                files: {
                    'compiled/index.html': ['src/index.html'],
                    'compiled/faq.html': ['src/faq.html'],
                    'compiled/tos.html': ['src/tos.html']
                },
                options: {
                    data: {
                        dev: true,
                        pkg: grunt.config('pkg'),
                        meta: grunt.config('metadata')
                    }
                }
            },
            dist: {
                files: {
                    'compiled/index.html': ['src/index.html'],
                    'compiled/faq.html': ['src/faq.html'],
                    'compiled/tos.html': ['src/tos.html']
                },
                options: {
                    data: {
                        dev: false,
                        pkg: grunt.config('pkg'),
                        meta: grunt.config('metadata')
                    }
                }
            }
        },
        // Grunt Watch
        watch: {
            css: {
                spawn: false,
                files: ['src/stylus/*'],
                tasks: ['stylus']
            },
            js: {
                files: ['src/js/*'],
                tasks: ['copy:js']
            },
            images: {
                files: ['src/images/*'],
                tasks: ['copy:images']
            },
            html: {
                files: ['src/*.html'],
                tasks: ['render:dev']
            },
            templates: {
                files: ['src/templates/*'],
                tasks: ['render:dev']
            }
        }
    });
};
