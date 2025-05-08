import React from 'react';
import About from '../components/About';
import Methodology from '../components/Methodology';
import Investigation from '../components/Investigation';
import Team from '../components/Team';
import News from '../components/News';
import Contacts from '../components/Contacts';

const Header = () => {
  return (
    <nav className="navbar">
      <ul className="navbar-nav">
        <About/>
        <Methodology/>
        <Investigation/>
        <Team/>
        <News/>
        <Contacts/>
      </ul>
      <div className="clearfix"></div>
    </nav>
  );
};

export default Header;
