
import BackgroundImage from '../assets/img/main-bg-glass.jpg';
import Type from '../UI/Type';



const Welcome = () =>{

    return(

        <div id="home" className="welcome-area"  style={{ backgroundImage: `url(${BackgroundImage})`, backgroundAttachment: "fixed"}}>
                <div id="bgndVideo" className="player" data-property="{videoURL:'https://youtu.be/ZwCOeHTvdeQ', containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:0.5, addRaster:true, quality:'highres'}"></div>
          

                <div className="welcome-table ">
                    <div className="welcome-cell">
                        <div className="container">
                            <div className="row">
                                <div className="col-md-8 col-md-offset-2">
                                    <div className="welcome-text">
                                        <h1 className="theme-color">Carlos A. Ramirez</h1>
                                        <div className="element">
                                        <Type />
                                        </div>
            
                                    </div>
                                    <div className="home-arrow">
                                        <a href="#about" className="smoth-scroll"><i className="fa fa-angle-double-down"></i></a>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                    </div>
                </div>

            

        </div>
              

    );


};

export default Welcome;