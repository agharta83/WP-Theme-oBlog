// See http://brunch.io for documentation.
exports.files = {
  javascripts: {joinTo: 'app.js'},
  stylesheets: {
    joinTo: {
      // Contiendra tous les fichiers CSS / SCSS de app
      'css/app.css': /^app/,
      // Contiendra tous les fichiers CSS de node-modules
      'css/vendor.css': /^node_modules/
    }
  }
};

exports.plugins = {
  copycat: {
    "fonts": ["node_modules/font-awesome/fonts"]
  },
  browserSync: {
    files: ["*"]
  }
};

exports.npm = {
  styles: {
    // Je récupére mes CSS depuis node_modules
    "normalize.css": ["normalize.css "],
    "font-awesome": ["css/font-awesome.css"]
  }
};
