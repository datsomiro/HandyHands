import React, {useState, useEffect} from 'react';
import {BrowserRouter as Router, Route, Switch} from "react-router-dom";

import  textContent from './Post/textContent.jsx';
import  selectCategory from './Post/selectCategory.jsx';
import  Image from './Post/Image.jsx';


export default function App() {

    return (
        <Router>

            <Header />

            <main>
                <Switch>
                     <Route exact path="/post" children={ <textContent/> }/>
                </Switch>
            </main>

        </Router>
    )
}