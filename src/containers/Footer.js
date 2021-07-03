const Footer = ( props ) => {

    const getCurrentYear = () => {
        return new Date().getFullYear();  
    };

    return(

        <footer className="footer">
            <div className="container">
                <div className="row wow zoomIn" data-wow-delay="0.4s">
                    <div className="col-md-12 text-center">
                        <p>
                            &copy;{getCurrentYear()} &nbsp;
                            <strong>Carlos Ramirez</strong>. All Rights Reserved

                        </p>
                    </div>
                </div>
            </div>
        </footer>
    );

};
export default Footer;