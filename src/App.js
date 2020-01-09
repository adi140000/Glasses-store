import React from 'react';
import './style/App.scss';
import Main from './components/main/Main'
import {
  BrowserRouter as Router,
  Switch,
  Route
} from "react-router-dom";

function App() {
  return (
    <Router>
      <Switch>          
          <Route exect render={()=><div>woww</div>} path="/products">
            
          </Route>
          <Route  path="/">
            <Main/>
          </Route>
        </Switch>
    </Router>
  );
}

export default App;
