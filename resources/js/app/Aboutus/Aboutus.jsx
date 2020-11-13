import React, { useState, useEffect } from 'react';

import Header from '../Header/Header.jsx';
import Footer from '../Footer/Footer.jsx';


export default function Aboutus() {

    const [user, setUser] = useState(null);
    const UserContext = createContext(user);
    
    return (
                <div>
                    <Header />
    
                    <main>
                        <p>Hello</p>
                    </main>
    
                    <Footer />
                </div>
            )
}