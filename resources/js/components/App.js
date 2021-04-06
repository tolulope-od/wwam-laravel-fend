import React from 'react';
import ReactDOM from 'react-dom';

import Landing from './layout/Landing.jsx';
import LandingFooter from './layout/LandingFooter.jsx';

const App = () => (
  <div>
      <Landing />
      <LandingFooter />
  </div>
);

export default App;

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}
