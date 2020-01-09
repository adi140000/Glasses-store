import React from 'react';
import {Link  } from "react-router-dom";

const Main = () => {
    return (
        <main className='main'>
            <div className='main__title'>X-Glasses </div>
            <Link to='/users' className='main__button'>Przejdz dalej</Link>
        </main>  );
}
 
export default Main;