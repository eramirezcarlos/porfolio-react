
const Contact = ( props ) => {

    return (
        <div id="contact" className="contact-info-area section-padding">
            <div className="container">
                <div className="row">
                    <div className="col-md-12 col-sm-12 col-xs-12">
                        <div className="section-title">
                            <h2>Contact me.</h2>
                            <p>Feel Free to Contact</p>
                        </div>
                    </div>
                </div>
        
                <div className="row">
                    <div className="col-md-7">
                        <div className="contact-form">
                            <form id="contact-form" method="post" action=""> 
                                <div className="messages"></div>
                                <div className="controls">
                                    <div className="row">
                                        <div className="col-md-6">
                                            <div className="form-group">
                                                <i className="fa fa-user-o"></i>
                                                <input id="form_name" type="text" name="name" className="form-control"
                                                    placeholder="Name*" required="required" data-error="Name is required." />
                                                <div className="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div className="col-md-6">
                                            <div className="form-group">
                                                <i className="fa fa-envelope-o"></i>
                                                <input id="form_email" type="email" name="email" className="form-control"
                                                    placeholder="Email*" required="required"
                                                    data-error="Valid email is required." />
                                                <div className="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="row">
                                        <div className="col-md-12">
                                            <div className="form-group">
                                                <i className="fa fa-question-circle-o"></i>
                                                <input id="form_subject" type="text" name="subject" className="form-control"
                                                    placeholder="Subject*" required="required"
                                                    data-error="Subject is required." />
                                                <div className="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="row">
                                        <div className="col-md-12">
                                            <div className="form-group">
                                                <i className="fa fa-comment-o"></i>
                                                <textarea id="form_message" name="message" className="form-control"
                                                        placeholder="Message*" rows="7" required="required"
                                                        data-error="Please, leave me a message."></textarea>
                                                <div className="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div className="col-md-12">
                                            <input type="submit" className="btn btn-effect btn-sent" value="Send message" name="submit-email" />
                                        </div>
                                    </div>
                                </div>
                            </form> 
                        </div>
                    </div>
    
                    <div className="col-md-5">
                        <div className="single-info"> 
                            <div className="info-icon">
                                <i className="fa fa-rocket"></i>
                            </div>
                            <div className="info-content">
                                <h5>my location:</h5>
                                <p>Concorde Place, Toronto<br/> Canada</p>
                            </div>
                        </div>
                        <div className="single-info"> 
                            <div className="info-icon">
                                <i className="fa fa-phone"></i>
                            </div>
                            <div className="info-content">
                                <h5>Phone number:</h5>
                                <p>(+1) 312 788 768?</p>
                                <a href="https://telegram.me/eramirezcarlos" title="Telegram with Carlos">
                                <button className="btn btn-success">
                                    <i className="fa fa-telegram"></i>Telegram with Carlos
                                </button>
                                </a>                    
                            </div>
                        </div>
                        <div className="single-info"> 
                            <div className="info-icon">
                                <i className="fa fa-envelope"></i>
                            </div>
                            <div className="info-content">
                                <h5>email address:</h5>
                                <p>eramirezcarlos@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
        </div>
    

    );

}

export default Contact;