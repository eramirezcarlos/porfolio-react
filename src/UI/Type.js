import Typed from 'react-typed';

const Type = ( ) =>{

    return (
        <span id="typed">
            <Typed
                strings={["Bachelor's Degree in Computer Science ","Software Engineer ", "FullStack Developer ", "PHP Developer ","React Developer ", "UX/UI Developer ", "Oracle PL/SQL Certified Professional "]}
                typeSpeed={80}
                loop
            />
        </span>
    );



}
export default Type;


