const presets = [
  [
    "@babel/env",
    {
      targets: {
        edge: "15",
        firefox: "60",
        chrome: "66",
        ie: "11",
        safari: "10",
        opera: "54", 
      },
      useBuiltIns: "usage",
    },
  ],
];
//           "> 0.25%, not dead"

const plugins = ['@babel/plugin-transform-react-jsx']

module.exports = { presets, plugins };