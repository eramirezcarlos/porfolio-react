import KoodoMobile from '../assets/img/work/koodo_mobile_archive.png';
import MuiscaMobile from '../assets/img/work/muisca-mobile-shot.jpg';
import MuiscaDesktop from '../assets/img/work/muisca-desktop-shot.jpg';
import MuiscaColourTheme from '../assets/img/work/muisca-colour-theme.jpg';
import MuiscaFontPairing from '../assets/img/work/muisca-font-pairing.jpg';


const Work = () => {

    return (
        <div id="work" className="work-area section-padding">
            <div className="container">

                    <div className="row">
                        <div className="col-md-12 col-sm-12 col-xs-12">
                            <div className="section-title">
                                <h2>Recent Work.</h2>
                                <p>Here's some samples of my work</p>
                            </div>
                        </div>
                    </div> 
        
                    <div className="row">
                        <ul className="work-list text-center">
                            <li className="filter" data-filter="all">all</li>
                        </ul>
                    </div>
            
                    <div className="work-inner">
                        <div className="row">
                        
                            <div className="col-md-4 col-sm-6 col-xs-12 mix medias "> 
                                <div className="single-work">
                                    <img src={MuiscaMobile} alt="Muisca.ca e-commerce"/>
                                    <div className="item-hover">
                                        <div className="work-table">
                                            <div className="work-tablecell">
                                                <div className="hover-content">
                                                    <h4>MUISCA.ca e-commerce</h4>
                                                    <a href="#" className="work-link" data-toggle="modal"
                                                    data-target="#projectModal1"><i className="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        
                            <div className="col-md-4 col-sm-6 col-xs-12 mix illustration"> 
                                <div className="single-work">
                                    <img src={KoodoMobile} alt="Koodo Comunications image"/>
                                    <div className="item-hover">
                                        <div className="work-table">
                                            <div className="work-tablecell">
                                                <div className="hover-content">
                                                    <h4>Koodo Mobile - SelfServ</h4>
                                                    <a href="#" className="work-link" data-toggle="modal"
                                                    data-target="#projectModal3"><i className="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <div className="col-md-12">
                            
                                <div tabIndex="0" className="modal fade" id="projectModal1">
                                    <div className="modal-dialog">
                                        <div className="modal-content">
                                            <div className="modal-header">
                                                <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                                <h4 className="modal-title">Project Overview</h4>
                                            </div>
                                            <div className="modal-body">
                                                <img src={MuiscaDesktop} alt="work-1"/>
                                                <h3>MUISCA.CA</h3>
                                                <p>This is an e-commerce website that customizes the WooCommerce plugin for selling handicrafts from South America</p>
                                                <br/>
                                                <h4>Visual Elements</h4>
                                                <p>Theme</p>
                                                <img src={MuiscaColourTheme} alt="Muisca Colour Theme"/>
                                                <p></p>
                                                <p>Font</p>
                                                <img src={MuiscaFontPairing} alt="Muisca Font Theme"/>
                                                <ul className="list-unstyled project-list">
                                                    <li><label>Client : </label> 2348148</li>
                                                    <li><label>Category :</label> Web Development</li>
                                                    <li><label>Date : </label> July 31,2020</li>
                                                    <li><label>Project Url : </label> <a href="http://www.muisca.ca">www.muisca.ca</a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            
                                <div tabIndex="0" className="modal fade" id="projectModal3">
                                    <div className="modal-dialog">
                                        <div className="modal-content">
                                            <div className="modal-header">
                                                <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 className="modal-title">Project Overview</h4>
                                            </div>
                                            <div className="modal-body">
                                                <img src={KoodoMobile} alt="Koodo Mobile Image"/>
                                                <h3>Koodo Mobile - SelfServ</h3>
                                                <p>This website offers the cellphone subscriber the chance to maintain their profiles, make payments and make some other account transactions.</p>
                                                <ul className="list-unstyled project-list">
                                                    <li><label>Client : </label> Koodo Mobile</li>
                                                    <li><label>Category :</label> Web Development/Maintenance</li>
                                                    <li><label>Date : </label> 12 october 2017</li>
                                                    <li><label>Project Url : </label> <a href="http://www.koodomobile.com">http://www.koodomobile.com</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    );

}
export default Work;
