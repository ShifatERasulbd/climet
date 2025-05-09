import React, { Fragment, useEffect } from 'react';
import ReactDOM from 'react-dom/client';
import Header from './partials/Header';
import Footer from './partials/Footer';

const App = () => {
    useEffect( () => {
        setTimeout(() => {
            const singleMenus = document.querySelectorAll('.single-menu-btn');                    
            const sidebarBtn = document.querySelector('.sidebar-btn');
            singleMenus.forEach(menu => {
                menu.addEventListener('click', function (event) {
                    event.preventDefault();
                    const currentContent = menu.nextElementSibling;
                    const currentNavItem = menu.closest('.nav-item');

                    // Toggle current menu content
                    const isVisible = currentContent.style.display === 'block';
                    currentContent.style.display = isVisible ? 'none' : 'block';

                    // Toggle active class only for this nav-item
                    if (currentNavItem) {
                        currentNavItem.classList.toggle('active', !isVisible);
                    }
                });
            });

            // Hide all contents and remove active class on sidebar button click
            sidebarBtn.addEventListener('click', function () {
                singleMenus.forEach(menu => {
                    const menuContent = menu.nextElementSibling;
                    const navItem = menu.closest('.nav-item');

                    menuContent.style.display = 'none';
                    if (navItem) {
                        navItem.classList.remove('active');
                    }
                });
            });

            const _singleMenus = document.querySelectorAll('.single-menu-btn2');
            const _sidebarBtn = document.querySelector('.sidebar-btn');
            
            _singleMenus.forEach(menu => {
                menu.addEventListener('click', function (event) {
                    event.preventDefault();
                    const currentContent = menu.nextElementSibling;
                    const parentLi = menu.closest('li');
                    // Hide all other menu contents and remove 'active' from other <li>s
                    _singleMenus.forEach(otherMenu => {
                        const otherContent = otherMenu.nextElementSibling;
                        const otherLi = otherMenu.closest('li');
                        if (otherContent !== currentContent) {
                            // otherContent.style.display = 'none';
                            if (otherLi) otherLi.classList.remove('active');
                        }
                    });
        
                    // Toggle current menu content and 'active' class
                    const isVisible = currentContent.style.display === 'block';
                    currentContent.style.display = isVisible ? 'none' : 'block';
                    if (parentLi) {
                        if (isVisible) {
                            parentLi.classList.remove('active');
                        } else {
                            parentLi.classList.add('active');
                        }
                    }
                });
            });
        
            // When the sidebar button is clicked, hide all menu contents and remove 'active'
            _sidebarBtn.addEventListener('click', function () {
                singleMenus.forEach(menu => {
                    const menuContent = menu.nextElementSibling;
                    const parentLi = menu.closest('li');
                    menuContent.style.display = 'none';
                    if (parentLi) parentLi.classList.remove('active');
                });
            });
        }, 2000);
    }, [] );
    return (
        <Fragment>
            <section id="contain">
                <section className="hero-section-hp">
                    <div className="hero-block-main-hp">
                        <div className="container-fluid">
                        <div className="row">
                            <div className="col-lg-12 col-sm-12 col-md-12 col-12 hero-block-in-hp">
                            <div className="container">
                                <div className="row">
                                    <div className="col-lg-12 d-flex align-items-center w-100 justify-content-between">
                                        <div className="hero-block-logo-hp">
                                            <a href="#" onClick={() => window.location.reload()}>
                                                {/* <img width="160" src="wp-custom/images/logo.png" alt="" /> */}
                                            </a>
                                        </div>
                                        <div className="bergur-menu sidebar-btn">
                                        <svg width="30" viewBox="0 0 108 109" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="108" height="23"></rect>
                                            <rect y="43" width="108" height="23"></rect>
                                            <rect y="86" width="108" height="23"></rect>
                                        </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div className="navigation-main-hp">
                                <div className="navigation-in-hp">
                                    <Header/>
                                </div>

                                <div className="container-one">
                                    <Footer/>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </section>
                <div className="clearfix"></div>
            </section>
        </Fragment>
    );
};

const root = ReactDOM.createRoot(document.getElementById('react-root'));
root.render(<App />);
