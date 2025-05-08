import React, { useEffect, useState } from 'react';
import axios from 'axios';

const About = () => {
  const [aboutItems, setAboutItems] = useState([]);
  const [details, setDetails] = useState('');

  useEffect(() => {
    axios.get('/api/about')
      .then(response => {
        setAboutItems(response.data);
        if (response.data.length > 0) {
          setDetails(response.data[0].details); // Assuming you want to show the first one initially
        }
      })
      .catch(error => {
        console.error('Error fetching about data:', error);
      });
  }, []);
  console.log('aboutItems', aboutItems);
  
  return (
    <li className="nav-item dropdown">
      <div className="container-one single-menu-btn">
        {aboutItems.map((item, index) => (
          <div className="single-menu" key={index}>
            <a className="nav-link" href="#">{item.title}</a>
            {/* <span className="sub_heading">Sub Heading Here ........</span> */}
          </div>
        ))}
      </div>
      <div className="menucontent">
        <div className="description about">
          <div className="container-one">
            <div className="description-wrap" dangerouslySetInnerHTML={{ __html: details }} />
          </div>
        </div>
      </div>
    </li>
  );
};

export default About;
