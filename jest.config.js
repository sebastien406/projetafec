export default {
  testEnvironment: 'jest-environment-jsdom',
  transform: {
    '^.+\\.js$': 'babel-jest',
  },
};

// Explications:

// Environnement de Test : 
// Ton projet utilise du code qui interagit avec le DOM (comme ta modale). Jest a besoin de jsdom pour simuler un navigateur et permettre l'exécution de tests sur ce type de code.

// Transpilation : 
// Comme ton projet utilise des modules ES (import/export), Jest doit utiliser Babel pour transpiler ce code en quelque chose qu'il peut exécuter.

// Couverture de Code : 
// Tu veux mesurer la couverture de tes tests. La configuration de Jest te permet de spécifier où stocker ces rapports et quels fichiers analyser.
