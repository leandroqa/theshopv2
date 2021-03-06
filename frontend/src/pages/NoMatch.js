import React from 'react'
import { Link } from "react-router-dom";
import Header from '../components/Header'

const NoMatch = ({lang}) => {
    return (
        <>         
            <div className="container">
                <p>
                    <Link to="/">Go to the home page</Link>
                </p>
                <img src={lang == 'BR' ? '/404br.jpg' : '/404.jpg'} />
            </div>
        </>
    )
}
export default NoMatch;