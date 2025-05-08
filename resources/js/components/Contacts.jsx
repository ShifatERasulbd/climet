import React, { useEffect, useState } from 'react';
import axios from 'axios';

const Contact = () => {
  const [contacts, setContacts] = useState([]);

  useEffect(() => {
    axios.get('/api/contacts')
      .then(response => setContacts(response.data))
      .catch(error => console.error('Error fetching contacts:', error));
  }, []);

  return (
    <>
      {contacts.map((contact, index) => (
        <li className="nav-item dropdown" key={index}>
          <div className="container-one single-menu-btn">
            <div className="single-menu">
              <a className="nav-link" href="#">{contact.title}</a>
            </div>
          </div>
          <div className="menucontent">
            <div className="description contacts">
              <div className="container-one">
                <div className="description-wrap" dangerouslySetInnerHTML={{ __html: contact.details }} />
              </div>
            </div>
          </div>
        </li>
      ))}
    </>
  );
};

export default Contact;
