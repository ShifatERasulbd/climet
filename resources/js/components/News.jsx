import React, { useEffect, useState } from 'react';
import axios from 'axios';

const News = () => {
  const [newsItems, setNewsItems] = useState([]);

  useEffect(() => {
    axios.get('/api/news') // Make sure this route exists in Laravel
      .then(response => {
        setNewsItems(response.data);
      })
      .catch(error => {
        console.error('Error fetching news:', error);
      });
  }, []);

  return (
    <li className="nav-item dropdown">
      <div className="container-one single-menu-btn">
        <div className="single-menu">
          <a className="nav-link" href="#">News</a>
          {/* <span className="sub_heading">Sub Heading Here ........</span> */}
        </div>
      </div>
      <div className="menucontent">
        <div className="description news position-relative">
          <div className="description-wrap">
            <ul className="news-list">
              {newsItems.map((news, index) => (
                <li key={index}>
                  <div className="container-one">
                    <div className="row">
                      <div className="col-lg-12">
                        <div className="single-news">
                          <div className="single-menu-btn2">
                            <h3>{news.title}</h3>
                            <span>{news.publish_date}</span>
                          </div>
                          <div className="menucontent">
                            <p>
                              <span dangerouslySetInnerHTML={{ __html: news.short_description }} />{' '}
                              <a href={news.redirect_link} target="_blank" rel="noopener noreferrer">
                                {news.redirect_link}
                              </a>
                            </p>
                          </div>
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

export default News;
