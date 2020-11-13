import React, { useState, useEffect } from 'react';
import { BrowserRouter as Router, Route, Switch } from "react-router-dom";


import Header from './Damian/Header/Header.jsx';
import Footer from './Damian/Footer/Footer.jsx';
import Update from './Damian/Update/Update.jsx';
import Profile from './Damian/Profile/Profile.jsx';
// import Logout from '../Logout/Logout.jsx.js';
import Post from './Hilenn-comps/Post/Post';


export default function App() {

    const [user, setUser] = useState(null);
    const UserContext = createContext(user);
    return (
        <UserContext.Provider value={user}>
            <Router>

                <Header />



                <main>
                    <Switch>
                        <Route exact path="/" children={<Aboutus />} />
                        <Route path="/post" children={<Post />} />
                        <Route path="/profile" children={<Profile />} />
                        <Route path="/update" children={<Update />} />
                        <Route exact path="/post" children= {<TextContent/> }/>
                        <Route path="/" children={<Logout />} />
                    </Switch>
                </main>

                <Footer />

            </Router>
        </UserContext.Provider>
    )
}