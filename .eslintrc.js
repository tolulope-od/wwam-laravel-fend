module.exports = {
  parser: '@babel/eslint-parser',
  extends: ['airbnb-base', 'plugin:react/recommended'],
  plugins: ['react', '@babel'],
  rules: {
    'react/jsx-filename-extension': [1, { extensions: ['.js', '.jsx'] }],
    'no-unused-vars': ['error', { varsIgnorePattern: 'history' }],
    'import/no-named-as-default': 'off',
    'class-methods-use-this': 'off',
    'import/prefer-default-export': 'off',
    'no-underscore-dangle': 'off',
    'react/display-name': 'off',
    indent: ['error', 2],
  },
  env: {
    es6: true,
    browser: true,
    jest: true,
  },
  parserOptions: {
    ecmaVersion: 2020,
    sourceType: 'module',
    ecmaFeatures: {
      jsx: true,
      arrowFunctions: true,
    },
  },
};
