import { Fragment } from 'react';
import Header from './Header';
import Welcome from './Welcome';
import About from './About';
import Services from './Services';
import Work from './Work';
import Testimonial from './Testimonial';
import CtaArea from './CtaArea';
import Contact from './Contact';
import Footer from './Footer';

const Layout = () =>{
    return(
    <Fragment>

        <Header />
        <Welcome />
        <About />
        <Services />
        <Work />
        <Testimonial />
        <CtaArea />
        <Contact />
        <Footer />

    </Fragment>


    );

}

export default Layout;