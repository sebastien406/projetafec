export default {
  presets: [
    ['@babel/preset-env', { targets: { node: 'current' } }]
  ],
};

// Explications :

// @babel/preset-env : Ce preset permet de convertir le code moderne en code compatible avec l'environnement cible. Ici, { targets: { node: 'current' } } signifie que Babel va transpiler le code pour qu'il soit compatible avec la version actuelle de Node.js.
// export default : Comme ton projet utilise "type": "module" dans package.json, tu dois utiliser la syntaxe ES Modules (export default) au lieu de module.exports.


// Pourquoi babel.config.js est Nécessaire pour Tes Tests ?

// Jest et ES Modules : Jest a besoin de Babel pour comprendre et exécuter du code utilisant les modules ES (import/export). Sans Babel, Jest ne pourrait pas transpiler ce code et échouerait avec des erreurs comme SyntaxError: Cannot use import statement outside a module.
// Transpilation du Code Source : Si ton code source utilise des fonctionnalités modernes de JavaScript, Babel les convertit en une version compatible avec l'environnement d'exécution de Jest.
