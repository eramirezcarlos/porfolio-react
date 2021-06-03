import {Fragment } from 'react';
import Header from './Header';
import Welcome from './Welcome';
import About from './About';


const Layout = () =>{
    return(
    <Fragment>
        <Header />
        <Welcome />
        <About />


    </Fragment>


    );

}

export default Layout;