import { Fragment } from 'react';
import Welcome from './Welcome';
import About from './About';
import Services from './Services';
import Work from './Work';
import Testimonial from './Testimonial';
import CtaArea from './CtaArea';
import Contact from './Contact';
import Footer from './Footer';
import Header from './Header';


const Layout = () =>{
    return(
    <Fragment>

        <Header />
        <Welcome />
        <About />
        <Services />
        <Work />
        <CtaArea />
        <Contact />
        <Footer />

    </Fragment>


    );

}

export default Layout;