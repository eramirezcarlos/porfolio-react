import BackgroundImage from '../assets/img/main_pic.jpg';

const About = () =>{

    return( 


        <div id="about" className="about-area section-padding">
            <div className="container">
                <div className="row">
                    <div className="col-md-5">
                        <div className="author-image">
                            <img src={BackgroundImage} alt="Carlos Arturo's Image"/> 
                        </div>
                    </div>
        
                    <div className="col-md-7">
                        <div className="tab" role="tabpanel">
                            <ul className="nav nav-tabs" role="tablist"> 
                                <li role="presentation" className="active"><a href="#Section1" role="tab"
                                                                        data-toggle="tab">about</a></li>
                                <li role="presentation"><a href="#Section2" role="tab" data-toggle="tab">Skills</a></li>
                            </ul>
                            <div className="tab-content">
                                <div role="tabpanel" className="tab-pane fade in active" id="Section1"> 
                                    <h4 className="about-heading">I'm a based in Toronto software Engineer with <span>Web</span> &
                                        <span>Mobile</span> Experience</h4>
                                    <p>Skilled in planning, designing, developing, implementing, debugging and trouble shooting
                                        applications in various technologies such as LAMPStack PHP, NodeJS Isomorphic, Java </p>
                                    <p>I possess certificates in Web Design, Mobile Development, Java Development, also
                                        certified in PEGA CSA (Certified System Architect) and Oracle PL/SQL Certified
                                        Professional</p>
                                    <ul className="social-links"> 
                                        <li><a href="https://twitter.com/eramirezcarlos?lang=en"><i className="fa fa-twitter"></i></a></li>
                                        <li><a href="https://www.linkedin.com/in/carlosramireze/"><i className="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                                <div role="tabpanel" className="tab-pane fade" id="Section2"> 
                                    <div className="single-skill"> 
                                        <div className="skill-info">
                                            <h4>Web Development</h4>
                                        </div>
                                        <div className="progress">
                                            <div className="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="0"
                                                aria-valuemax="100" style={{width:"99%"}} ><span>99%</span></div>
                                        </div>
                                    </div>
                                    <div className="single-skill"> 
                                        <div className="skill-info">
                                            <h4>PHP LAMPStack (CodeIgniter, Laravel, Zend )</h4>
                                        </div>
                                        <div className="progress">
                                            <div className="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="0"
                                                aria-valuemax="100" style={{width:"99%"}}><span>99%</span></div>
                                        </div>
                                    </div>
                                    <div className="single-skill"> 
                                        <div className="skill-info">
                                            <h4>UI/UX Development (Isomorphic, MEAN) </h4>
                                        </div>
                                        <div className="progress">
                                            <div className="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                                aria-valuemax="100" style={{width:"95%"}}><span>95%</span></div>
                                        </div>
                                    </div>
                                    <div className="single-skill"> 
                                        <div className="skill-info">
                                            <h4>UI/UX Design</h4>
                                        </div>
                                        <div className="progress">
                                            <div className="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                                aria-valuemax="100" style={{width:"95%"}}><span>95%</span></div>
                                        </div>
                                    </div>
                                    <div className="single-skill"> 
                                        <div className="skill-info">
                                            <h4>Bussiness Analisis </h4>
                                        </div>
                                        <div className="progress">
                                            <div className="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100" style={{width:"75%"}}><span>75%</span></div>
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
export default About;