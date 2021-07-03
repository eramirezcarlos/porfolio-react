import  { Fragment, useState, useEffect   } from "react";

import './assets/css/bootstrap.min.css';
import './assets/css/font-awesome.min.css';
import './assets/css/magnific-popup.css';
import './assets/css/owl.carousel.css';
import './assets/css/animate.min.css';
import './assets/css/responsive.css';
import './assets/theme-color/color_1.css';
import { Roller } from 'react-awesome-spinners';




import './App.css';

import Layout from "./containers/Layout";
import HeaderReact from "./containers/HeaderReact";

function App() {

  const [loading, setLoading] = useState(true);

  useEffect(()=> {
    setTimeout(function () {
      setLoading(false);
    }, 2500);  
  
  },[]);

  if ( !loading ){
    return(
        <Fragment>
          <Layout />
        </Fragment>
    );
  }else{
    return(
    <div id="preloader">
      <Roller  size={'3'} sizeUnit={'rem'} color={'#18ba60'} />
    </div>
    );
    
  }
}

export default App;
