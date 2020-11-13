import React, {useState, useEffect} from 'react';
import {BrowserRouter as Router, Route, Switch} from "react-router-dom";

import  TextContent from './Post/TextContent';
import  SelectCategory from './Post/SelectCategory';
import  Image from './Post/Image';


export default function App() {

    return (
        <Router>

          <Image/>

          <SelectCategory />

            <main>
                <Switch>
    <Route exact path="/post" children= {<TextContent/> }/>
                </Switch>
            </main>

        </Router>
    )
}