import React, { useEffect, useState } from 'react';
import axios from 'axios';

const Investigation = () => {
  const [investigations, setInvestigations] = useState([]);

  useEffect(() => {
    axios.get('/api/investigations')
      .then(response => setInvestigations(response.data))
      .catch(error => console.error('Error fetching investigations:', error));
  }, []);

  return (
    <li className="nav-item dropdown">
      <div className="container-one single-menu-btn">
        <div className="single-menu">
          <a className="nav-link" href="#">Investigations</a>
        </div>
      </div>
      <div className="menucontent">
        <div className="description investigations">
          <div className="description-wrap">
            <ul className="news-list">
              {investigations.map((investigation, i) => (
                <li key={i}>
                  <div className="container-one">
                    <div className="row">
                      <div className="col-lg-12">
                        <div className="single-news">
                          <div className="single-menu-btn2">
                            <h3>{investigation.title}</h3>
                          </div>
                          {investigation.investigation_contents.map((content, j) => (
                            <div className="menucontent" key={j}>
                              <p><strong>{content.sub_title}</strong></p>
                              <br />
                              <div dangerouslySetInnerHTML={{ __html: content.description }} />
                            </div>
                          ))}
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              ))}
            </ul>
          </div>
        </div>
      </div>
    </li>
  );
};

export default Investigation;
