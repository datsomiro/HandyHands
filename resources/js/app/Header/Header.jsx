import React, { useState, useEffect } from 'react';
import { Link } from 'react-router-dom';

export default function Header() {

    return (
        <header>

           
            <div class="header">
                <img src="{{ asset('img/logo.png') }}" alt="logo" class="logo" />
            
                <nav>
                    <Link to="/"><button class="float">About us</button></Link>
                    <Link to="/post"><button class="float">Post</button></Link>
                    <Link to="/profile"><button class="float">Profile</button></Link>
                    <Link to="/update"><button class="float">update</button></Link>
                    <Link to="/"><button class="float">Logout</button></Link>
                </nav>
            </div>

        </header>
    )

}
