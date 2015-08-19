module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    jshint: {
      src: ['js/main.js'],
      options: {
        "bitwise": true, // Prohibit bitwise operators (&, |, ^, etc.)
        "curly": true, // Require curly braces for each new block/scope
        "eqeqeq": true, // Must have 3x == for comparisons
        "forin": true, // Require filtering for-in loops with obj.hasOwnProperty()
        "funcscope": true, // Can access variables outside scope they were declared in
        "loopfunc":true, // Allows functions inside loops
        "latedef": true, // Can't use variable before definition
        "noarg": true, // Can't use arguments.caller/callee
        "nonew": true, // Can't use constructor functions for side effects
        "regexp": true, // If the . should not be allowed in regexp literals 
        "scripturl": true, // Get rid of script-targeted url errors
        "undef": false, // No explicitly undeclared variables
        "unused": false // Warning when there's declared but unused variables
      }
    },
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        src: 'js/main.js',
        dest: 'js/build/main.min.js'
      }
    },
    imagemin: {
      
    },
    postcss: {
      options: {
        processors: [
          require('autoprefixer-core')({browsers: 'last 2 versions'}),
          //require('cssnano')()
          ]
      },
      dist: {
        src: 'css/main.css'
      } 
    },
    watch: {
      files: ['js/main.js'],
      tasks: ['jshint']
    }
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-postcss');

  // Default task(s).
  grunt.registerTask('default', ['jshint', 'uglify']);
};