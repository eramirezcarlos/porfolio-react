import WebDevelopment from '../assets/img/service/web_development.png';
import PHPDevelopment from '../assets/img/service/php_image.png';
import AppDevelopment from '../assets/img/service/app_development.png';
import SeoDevelopment from '../assets/img/service/seo_image.png';
import IsoMorphicImage from '../assets/img/service/isomorphic_image.png';




const Services = () => {

    return(

        <div id="services" className="services-area section-padding">
            <div className="container">
                <div className="row">
                    <div className="col-md-12 col-sm-12 col-xs-12">
                        <div className="section-title">
                            <h2>What I do</h2>
                        </div>
                    </div>
                </div> 
                <div className="container">
                    <div className="row row-eq-height">
        
                        <div  className="col-md-4 col-sm-6"> 
                            <div className="single-service text-center wow fadeInUp makeMaxHeight" data-wow-delay="0.4s">
                                <div className="service-img" style={{backgroundImage: `url(${WebDevelopment})`}}></div>
                                <h3>Web Development</h3>
                                <p>Built, created and maintained websites. It included aspects such as web design, web publishing,
                                    web programming, and database management.</p>
                                <div className="service-overlay text-left">
                                    <ul className="clearfix">
                                        <li><i className="fa fa-long-arrow-right"></i> Product Design and Implementation</li>
                                        <li><i className="fa fa-long-arrow-right"></i> Database Architecture</li>
                                        <li><i className="fa fa-long-arrow-right"></i> Custom Web Design</li>
                                        <li><i className="fa fa-long-arrow-right"></i> Responsive Web Design</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div  className="col-md-4 col-sm-6"> 
                            <div className="single-service text-center wow fadeInUp makeMaxHeight" data-wow-delay="1.0s">
                                <div className="service-img" style={{backgroundImage: `url(${PHPDevelopment})`}}></div>
                                <h3>PHP Development</h3>
                                <p>Developed Applications using PHP for Industries such as communications, transportation, e-commerce and
                                    recruiting.</p>
                                <div className="service-overlay text-left">
                                    <ul className="clearfix">
                                        <li><i className="fa fa-long-arrow-right"></i> LAMPStack/LEMPStack PHP</li>
                                        <li><i className="fa fa-long-arrow-right"></i>PHP Frameworks (CodeIgniter, Laravel, Zend</li>
                                        <li><i className="fa fa-long-arrow-right"></i> Webserver Administration</li>
                                        <li><i className="fa fa-long-arrow-right"></i>Database Administration</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div className="col-md-4 col-sm-6">
                            <div className="single-service text-center wow fadeInUp makeMaxHeight" data-wow-delay="0.6s">
                                <div className="service-img" style={{backgroundImage: `url(${SeoDevelopment})`}}></div>
                                <h3>Seo Optimization</h3>
                                <p>Implemented techniques and tactics to increase the amount of visitors to my websites.</p>
                                <div className="service-overlay text-left">
                                    <ul className="clearfix">
                                        <li><i className="fa fa-long-arrow-right"></i> Best Web Practices Applied</li>
                                        <li><i className="fa fa-long-arrow-right"></i> Accessible</li>
                                        <li><i className="fa fa-long-arrow-right"></i> Well Customized pages</li>
                                        <li><i className="fa fa-long-arrow-right"></i> Powerful Performance</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
        
                    </div> 
                </div>
                <div className="container ">
                <div className="row row-eq-height">
    
                    <div className="col-md-4 col-sm-6"> 
                        <div className="single-service text-center wow fadeInUp makeMaxHeight" data-wow-delay="0.8s">
                            <div className="service-img" style={{backgroundImage: `url(${AppDevelopment})`}}></div>
                            <h3>App development</h3>
                            <p>Developed Apps for mobile using Android and Apple iOS</p>
                            <div className="service-overlay text-left">
                                <ul className="clearfix">
                                    <li><i className="fa fa-long-arrow-right"></i> Apple iOS Apps Development</li>
                                    <li><i className="fa fa-long-arrow-right"></i> Android Apps Development</li>
                                    <li><i className="fa fa-long-arrow-right"></i> Web Apps Development</li>
                                    <li><i className="fa fa-long-arrow-right"></i> Hybrid Apps Development</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-4 col-sm-6">
                        <div className="single-service text-center wow fadeInUp makeMaxHeight" data-wow-delay="1.2s">
                            <div className="service-img" style={{backgroundImage : `url(${IsoMorphicImage})`}}></div>
                            <h3>Isomorphic and Javascript </h3>
                            <p>Developed applications using MEAN ( Angular ) and React.</p>
                            <div className="service-overlay text-left">
                                <ul className="clearfix">
                                    <li><i className="fa fa-long-arrow-right"></i> Mongo, Express, Angular, NodeJS</li>
                                    <li><i className="fa fa-long-arrow-right"></i> Javascript Web Service Integrations</li>
                                    <li><i className="fa fa-long-arrow-right"></i> Isomorphic applications with Mern</li>
                                    <li><i className="fa fa-long-arrow-right"></i> CSS Pre-processing with SaSS</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div> 
        </div>
    

    );


};
export default Services;