import React, { useEffect, useState } from 'react';
import axios from 'axios';

const Team = () => {
  const [mainTeam, setMainTeam] = useState([]);
  const [affiliatedResearchers, setAffiliatedResearchers] = useState([]);
  const [collaborators, setCollaborators] = useState([]);

  useEffect(() => {
    axios.get('/api/team')
      .then(response => {
        setMainTeam(response.data.main_team);
        setAffiliatedResearchers(response.data.affiliated_researchers);
        setCollaborators(response.data.collaborators);
      })
      .catch(error => {
        console.error('Error fetching team data:', error);
      });
  }, []);

  return (
    <li className="nav-item dropdown">
      <div className="container-one single-menu-btn">
        <div className="single-menu">
          <a className="nav-link" href="#">Team</a>
        </div>
      </div>
      <div className="menucontent">
        <div className="description team">
          <div className="description-wrap">
            <ul className="news-list">

              {/* Main Team */}
              {mainTeam.map((member, index) => (
                <li key={`main-${index}`}>
                  <div className="container-one">
                    <div className="row">
                      <div className="col-lg-12">
                        <div className="single-news">
                          <div className="single-menu-btn2">
                            <h3>{member.name} <br /> <span>{member.position}</span></h3>
                          </div>
                          <div className="menucontent">
                            {member.details}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              ))}

              <br />
              <div className="container-one">
                <div className="row">
                  <div className="col-lg-12">
                    <h3 className="team-title"><strong>Affiliated researchers:</strong></h3>
                  </div>
                </div>
              </div>

              {/* Affiliated Researchers */}
              {affiliatedResearchers.map((researcher, index) => (
                <li className="no-hover" key={`affiliated-${index}`}>
                  <div className="container-one">
                    <div className="row">
                      <div className="col-lg-12">
                        <div className="single-news">
                          <h3>{researcher.name} <br /> <span>{researcher.position}</span></h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              ))}

              <br />
              <div className="container-one">
                <div className="row">
                  <div className="col-lg-12">
                    <h3 className="team-title"><strong>Collaborators:</strong></h3>
                  </div>
                </div>
              </div>

              {/* Collaborators */}
              {collaborators.map((collab, index) => (
                <li className="no-hover" key={`collab-${index}`}>
                  <div className="container-one">
                    <div className="row">
                      <div className="col-lg-12">
                        <div className="single-news">
                          <h3>{collab.name} <br /> <span>{collab.position}</span></h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              ))}

              {/* Hardcoded members */}
              <li className="no-hover">
                <div className="container-one">
                  <div className="row">
                    <div className="col-lg-12">
                      <div className="single-news">
                        <h3>Jamon Van den Hoek <br /> <span>(Oregon State University)</span></h3>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li className="no-hover">
                <div className="container-one">
                  <div className="row">
                    <div className="col-lg-12">
                      <div className="single-news">
                        <h3>Ricardo Torres <br /> <span>(Wageningen University)</span></h3>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </li>
  );
};

export default Team;
