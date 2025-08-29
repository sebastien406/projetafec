## This is my Afec Project
Here is my **project description**

Dans le fichier babel.config.js a la racine du projet
export default {
  presets: [
    ['@babel/preset-env', { targets: { node: 'current' } }]
  ],
};

------------------------------------------------------------------------------------------------------

Dans le fichier jest.config.js a la racine du projet 
export default {
  testEnvironment: 'jest-environment-jsdom',
  transform: {
    '^.+\.js$': 'babel-jest',
  },
};

------------------------------------------------------------------------------------------------------

Dans le fichier package.json
  "test": "jest",
    "test:watch": "jest --watch",
    "test:coverage": "jest --coverage"

------------------------------------------------------------------------------------------------------

Le npm a faire avant de tout lancer
npm install --save-dev @babel/core @babel/preset-env babel-jest jest jest-environment-jsdom

------------------------------------------------------------------------------------------------------

Puis npm test

------------------------------------------------------------------------------------------------------

Une fois que le test reussi, faire 
npm run test:coverage

------------------------------------------------------------------------------------------------------

Si tout fonctionne faire 
npm run test:watch