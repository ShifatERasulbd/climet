import React, { Fragment } from 'react';
import ReactDOM from 'react-dom/client';
import Header from './partials/Header';
import Footer from './partials/Footer';

const App = () => {
    return (
        <Fragment>
            <Header/>
            <Footer/>
        </Fragment>
    );
};

const root = ReactDOM.createRoot(document.getElementById('react-root'));
root.render(<App />);
