import React, { useEffect, useState } from 'react';
import axios from 'axios';

const Methodology = () => {
  const [methodologies, setMethodologies] = useState([]);
  useEffect(() => {
    axios.get('/api/methodology') // Adjust endpoint if needed
      .then(response => {
        setMethodologies(response.data);
      })
      .catch(error => {
        console.error('Error fetching Methodology data:', error);
      });
  }, []);
  return (
    <>
      {methodologies.map((item, index) => (
        <li className="nav-item dropdown" key={index}>
          <div className="container-one single-menu-btn">
            <div className="single-menu">
              <a className="nav-link" href="#">{item.title}</a>
              {/* <span className="sub_heading">Sub Heading Here ........</span> */}
            </div>
          </div>
          <div className="menucontent">
            <div className="description approach">
              <div className="container-one">
                <div className="description-wrap" dangerouslySetInnerHTML={{ __html: item.details }} />
              </div>
            </div>
          </div>
        </li>
      ))}
    </>
  );
};

export default Methodology;
