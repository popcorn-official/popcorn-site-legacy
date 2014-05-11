module.exports = function(grunt) {
  grunt.loadNpmTasks('grunt-contrib-stylus');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-htmlmin');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-html-validation');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-copy');
  
  grunt.registerTask('default', [
    'stylus',
    'copy:favicon',
    'copy:fonts',
    'copy:images',
    'copy:js',
    'copy:html',
    'copy:update'
  ]);

  grunt.registerTask('dev', [
    'default',
    'validation:dev'
  ]);

  grunt.registerTask('dist', [
    'css',
    'html',
    'js',
    'imagemin',
    'validation:dist',
    'copy:favicon',
    'copy:fonts',
    'copy:update'
  ]);

  grunt.registerTask('css', [
    'stylus',
    'cssmin'
  ]);

  grunt.registerTask('html', [
    'htmlmin'
  ]);

  grunt.registerTask('js', [
    'uglify'
  ]);

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
          'compiled/css/main.css' : 'src/stylus/main.styl'
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
          'compiled/index.html': 'src/index.html',
          'compiled/faq.html': 'src/faq.html',
          'compiled/tos.html': 'src/tos.html'
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
            'src/index.html',
            'src/faq.html',
            'src/tos.html'
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
      html: {
        expand: true,
        cwd: 'src/',
        src: ['faq.html', 'index.html', 'tos.html'],
        dest: 'compiled/'
      },
      update: {
        expand: true,
        cwd: 'src/',
        src: 'update.json',
        dest: 'compiled/'
      }
    },
    watch: {
      files: ['src/stylus/*'],
      tasks: ['stylus'],
    }
  });
};