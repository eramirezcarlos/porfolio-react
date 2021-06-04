const Footer = ( props ) => {

    const getCurrentYear = () => {
        return new Date().getFullYear();  
    };

    return(

        <footer class="footer">
            <div class="container">
                <div class="row wow zoomIn" data-wow-delay="0.4s">
                    <div class="col-md-12 text-center">
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