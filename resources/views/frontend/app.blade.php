@vite('resources/js/app.jsx')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="{{asset('frontend/wp-custom/css/fontawesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontend/wp-custom/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontend/wp-custom/css/fonts.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontend/wp-custom/css/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontend/wp-custom/css/stylesheet.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontend/wp-custom/css/responsive.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <style>
        h3 {
            font-size: 21px;
            font-weight: 400;
            letter-spacing: 0;
        }
    </style>
    <div class="wrapper">
        <!-- HEADER_START -->
        <header id="header">
            <div class="container-one">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 header-in-hp">
                        <div class="logo-main-hp">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="68" height="68" viewBox="0 0 68 68">
                                    <g>
                                        <path
                                            d="M68,33.93253v.13084a2.01586,2.01586,0,0,0-.171.13806l-8.41346,8.411c-.08345.08344-.17617.15763-.26582.237a2.65407,2.65407,0,0,1-.04224-.34721V38.22662H54.13212V36.15375h4.691V31.737h-3.537a9.82473,9.82473,0,0,1-1.17455-.02679c-.0103-.66658-.00618-1.30225-.00515-1.95748h3.60092c.39151,0,.79539.01236,1.18485-.0103.068-.65936.04018-4.39508-.033-4.62893a1.46388,1.46388,0,0,0-.15661-.01649H48.5891a.42185.42185,0,0,0-.0948.01855.06381.06381,0,0,0-.02678.01649.1703.1703,0,0,0-.01958.02472V42.88854H58.77261a3.40243,3.40243,0,0,0,.38534-.04328c-.11025.11951-.21637.24417-.33073.35956L34.37092,67.66311c-.103.103-.20606.2246-.30909.33689H34c-.07521-.0917-.14321-.18957-.22564-.273Q17.02061,50.97191.27406,34.22408C.1906,34.14064.0917,34.07263,0,33.99742v-.06491a2.07122,2.07122,0,0,0,.30909-.21222q4.454-4.44657,8.90285-8.89832L33.76921.26478c.08345-.08344.1566-.17618.23387-.26478H34.068c.07212.08036.14012.16381.21636.24005Q51.001,16.958,67.71975,33.67393C67.80733,33.76253,67.90521,33.846,68,33.93253ZM46.5357,42.869l-3.31449-5.83744c.07521-.06491.13085-.11538.18957-.16174a5.83532,5.83532,0,0,0,2.04-3.25562,7.08084,7.08084,0,0,0,.103-2.59315,6.11963,6.11963,0,0,0-2.3697-4.26938,7.83873,7.83873,0,0,0-4.66933-1.61647c-2.25946-.07-4.523-.03091-6.78455-.03812a1.13287,1.13287,0,0,0-.18648.0309V42.84836c.36782.067,5.40084.05254,5.65842-.01751v-3.4802c0-.29361.00515-.56767.00824-.851l.068-.01133L39.87581,42.871ZM19.36455,36.15789c.06387-.58.04018-4.15915-.03091-4.4198H17.03091c-.76964,0-1.55473.02061-2.32952-.01545v-1.974h4.758V25.12179H9.0337c-.06285.45743-.0443,17.51436.01648,17.74617h5.63473V36.16h4.68067Zm2.94975,6.70594c.76655.07005,5.75527.03812,5.98606-.033V25.12075H22.3143Z"
                                            fill="#000"></path>
                                        <path
                                            d="M37.21558,29.88772a3.48965,3.48965,0,0,1,1.72473.27919,1.564,1.564,0,0,1,.986,1.36407,3.79437,3.79437,0,0,1-.05254.94369,1.33313,1.33313,0,0,1-.60272.90456,3.27559,3.27559,0,0,1-2.06061.476Z"
                                            fill="#000"></path>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER_END -->
        <!-- CONTAIN_START -->
        <section class="sidebar hero-section-hp">
            <div class="hero-block-main-hp">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12 col-12 hero-block-in-hp">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 d-flex align-items-center w-100 justify-content-between" style="">
                                        <div class="hero-block-logo-hp">
                                            <!-- <a onclick="window.location.reload();" href="#"><img width="160" src="wp-custom/images/logo.png" alt=""></a> -->
                                        </div>
                                        <div class="bergur-menu sidebar-btn">
                                            <svg width="30" viewBox="0 0 108 109" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="108" height="23"></rect>
                                                <rect y="43" width="108" height="23"></rect>
                                                <rect y="86" width="108" height="23"></rect>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div id="react-root"></div>
        <footer id="footer">
            <div class="clearfix"></div>
        </footer>
        <!-- FOOTER_END -->
    </div>
</body>
</html>