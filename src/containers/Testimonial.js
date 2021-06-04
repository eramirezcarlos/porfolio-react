import Ahmad from '../assets/img/testimonial/Ahmad_Al_Tamimi.png';
import Avatar from '../assets/img/testimonial/avatar_image.png';
import Yazmin from '../assets/img/testimonial/Yazmin-Lombana.png';


const Testimonial = () => {

    return(

        <div id="testimonial" className="testimonial-area section-padding">
            
            <div className="container">
                <div className="row">
                    <div className="col-md-12 text-center">
                        <div className="section-title">
                            <h2>What people say.</h2>
                        </div>
                    </div>
                </div> 
        
                <div className="row">
                    <div className="col-md-12">
                        <div className="testimonial-list">
                        
                            <div className="single-testimonial"> 
                                <div className="t-author">
                                    <div className="t-image">
                                        <img src={Ahmad} alt="Ahmand Photo"/>
                                    </div>
                                    <div className="t-name">
                                        <h4>Ahmad Al-Tamimi</h4>
                                        Cloud & Microservices Architect
                                    </div>
                                </div>
                                <div className="t-content">
                                    <p>I have enjoyed working with Carlos. He is one of the best people I have brought to 3mushrooms Corp as he was highly dedicated and excellent in following commands and processes. Carlos brought fantastic results and values to 3mushrooms in the production sector of PHP web development, and I would love to work with him again. Great guy. Thank you Carlos for all of your efforts and great work..</p>
                                </div>
                            </div>
                            <div className="single-testimonial"> 
                                <div className="t-author">
                                    <div className="t-image">
                                        <img src={Avatar} alt="Photo Placeholder"/>
                                    </div>
                                    <div className="t-name">
                                        <h4>Peter Garcia</h4>
                                        Information Technology Professional
                                    </div>
                                </div>
                                <div className="t-content">
                                    <p>Carlos Ramirez worked under my direction for approximately 16 months as a Programmer/Developer on an integrated recruiting and employee management platform processing 1300 applications per month. His expertise in the LAMP Stack framework was extremely valuable in the development of a stable feature-rich system. His responsibility included building the enterprise application integration and B2B connectivity.</p>
        
                                    <p>As part of Carlos’ role he communicated frequently with the operational managers and users in order to understand their IT requirements and resolve technical issues. His interaction with peers is highly commendable. Notable also is his decency and polite disposition.</p>
        
                                    <p>I recommend Carlos as a strong candidate for a similar technical position in any other organization and would readily hire him should the circumstance arise in the future..</p>
                                </div>
                            </div>
                            <div className="single-testimonial"> 
                                <div className="t-author">
                                    <div className="t-image">
                                        <img src={Yazmin} alt="Yazmin Photo"/>
                                    </div>
                                    <div className="t-name">
                                        <h4>Yazmin Lombana</h4>
                                        Manager at Titan Plaza Mall
                                    </div>
                                </div>
                                <div className="t-content">
                                    <p>I have worked with Carlos in the past in a Bussiness joint venture. It was a great experience with lots of professional achievements</p>
                                    <p>The control of processes software was a successful implementation, I recommend Carlos for his outstanding technical expertise and commitment</p>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </div> 
                
            </div>

        </div>
    

    );

}
export default Testimonial;