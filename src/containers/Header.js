import { useEffect } from 'react';


import $ from 'jquery';

window.jQuery = $;
window.$ = $;
global.jQuery = $;

const Header = () =>{

    useEffect(()=>{

       $('.navbar-collapse a').on('click', function () {
            //$(".navbar-collapse").collapse('hide');
        });
    
        $( window ).on('scroll', function () {
            if ($(".navbar").offset().top > 100) {
                //$(".navbar-fixed-top").addClass("top-nav-collapse");
            } else {
                //$(".navbar-fixed-top").removeClass("top-nav-collapse");
            }
        });        
        
    },[]);

    return(

    <header className="navbar custom-navbar navbar-fixed-top">
        <div className="container">
            <div className="row">
                <div className="col-md-3 col-sm-3 col-xs-12">
                    <div className="logo">
                        <div className="navbar-header">
                            <button type="button" className="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                <span className="sr-only">Toggle navigation</span>
                                <span className="icon-bar"></span>
                                <span className="icon-bar"></span>
                                <span className="icon-bar"></span>
                            </button>
                        </div>
                        <a className="theme-color" href="/">
                            &lt;&gt;Imagine&lt;&#47;&gt;
                        </a>
                    </div>
                </div>
    
                <div className="col-md-9 col-sm-8 col-xs-12">
                    <nav className="main-menu">
                        <div className="navbar-collapse collapse">
                            <ul className="nav navbar-nav"> 
                                <li className="active"><a className="smoth-scroll" href="#home">Home</a></li>
                                <li><a className="smoth-scroll" href="#about">About</a></li>
                                <li><a className="smoth-scroll" href="#services">service</a></li>
                                <li><a className="smoth-scroll" href="#work">work</a></li>
                                <li><a className="smoth-scroll" href="#testimonial">testimonial</a></li>
                                <li><a className="smoth-scroll" href="#contact">contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div> 
        </div> 
    </header>
    

    );

};

export default Header;