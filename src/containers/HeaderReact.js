import { Navbar, Button, Nav, NavDropdown,Form,FormControl } from 'react-bootstrap';
import './HeaderReact.css';

import $ from 'jquery';
window.jQuery = $;
window.$ = $;
global.jQuery = $;

const HeaderReact = () =>{




    return(
    
        <header>
            <div class="container">
                <div class="row">
                    <Navbar bg="light" expand="lg">
                        <Navbar.Brand href="/">&lt;&gt;Imagine&lt;&#47;&gt;<h1 className="sr-only" >Carlos A Ramirez - Professional Portfolio</h1></Navbar.Brand>
                        <Navbar.Toggle aria-controls="basic-navbar-nav" />
                        <Navbar.Collapse id="basic-navbar-nav">
                        <Nav className="mr-auto">
                            <Nav.Link href="#home">Home</Nav.Link>
                            <Nav.Link href="#about">About</Nav.Link>
                            <Nav.Link href="#services">Service</Nav.Link>
                            <Nav.Link href="#work">Work</Nav.Link>
                            <Nav.Link href="#testimonial">Testimonial</Nav.Link>
                            <Nav.Link href="#contact">Contact</Nav.Link>
                        </Nav>
                        </Navbar.Collapse>
                    </Navbar>
                </div>
            </div>    
        </header>        

    );
    

};

export default HeaderReact;