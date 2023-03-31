<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <title>IBOOST NETWORK BOOSTER</title>
        <meta name="description" content="The small framework with powerful features">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut png" type="image/png" href="\wamp64\www\iBoostproj\Won\fam8.jpeg"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <!-- STYLES -->

        <style>
            *{
                margin:0;
                padding:0;
                box-sizing:border-box;
            }

            .section {
                display: flex;
                flex-direction: row;
                box-sizing: border-box;
                background-position: center center;
                justify-content: left;
                align-items: left;
                height: 100vh;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple color Emoji", "Segoe UI Emoji";
                font-size: 16px;
                width: 100vw;
                margin:0;
            }
            
            .left-column{
                flex: 1;
                background: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,1)), url("/IBoostproj/Won/Fam11.jpeg") no-repeat;
                background-size: cover;
                height: 100vh;
                width: 50vw;
                margin: 0;
                background-position: center center;
                position: relative;
                justify-content: flex-start;
                border: 0;
                padding: 0;
                opacity: 1; 
                z-index: -1000;
                background-size: cover; 
                
            }

            .right-column{
                background: grey linear-gradient(rgba(0,0,0,0.07),rgba(0,0,0,0.2));
                color: #ffffff;
                flex: 1; 
                height: 100vh;
                width: 50vw;
                background-size: cover;
                background-position: center center;
                margin: 0;
                border: 0;
                padding: 0;
            }


            .navbar-nav {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-direction: column;
                flex-direction: column-reverse;
                padding-left: 0;
                margin-bottom: 0;
                list-style: none;
                flex-wrap: nowrap;
                align-content: space-around;
                justify-content: space-evenly;
                align-items: center;
            }

            @media (max-width: 767px) {
            /* Styles for screens with a maximum width of 767px */
            .section {
                flex-direction: column;
            }
            .left-column-col-md-6 {
                width: 100%;
                height: auto;
                position: relative;
            }
            .right-column-col-md-6 {
                width: 100%;
                height: auto;
                position: relative;
            }
            }

            @media (max-width: 575px) {
            .section {
                flex-direction: column;
                height: auto;
            }

            .left-column{
                width: 100%;
                height: 25vh;
                background-size: no repeat;
                position: relative;
                justify-content: center;
                flex: auto;
            }

            .right-column{
                width: 100%;
                height: 100vh;
                background-size: no repeat;
                position: relative;
                justify-content: center;
                flex: auto;
            }

            }
            
            .nav-item {
            margin-right: 2em;
            }

            .nav-link {
            font-weight: bold;
            font-size: 1.2em;
            color: #555;
            transition: color 0.3s ease-in-out;
            }

            .nav-link:hover {
            color: #333;
            }

            .footer {
                margin-top: 67px;
                color: #808080;
                font-size: 15px;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple color Emoji", "Segoe UI Emoji";
                background: grey linear-gradient(rgba(0,0,0,0.07),rgba(0,0,0,0.2));
                display: flexbox;
                flex-direction: row;
            }

            @media (max-width: 576px) 
            {
                .footer {
                    margin-top: 10px;
                    color: #808080;
                    font-size: 12px;
                    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple color Emoji", "Segoe UI Emoji";
                    text-align: center;
                }
                
                .footer .row {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                }
                
                .footer .short_hr {
                    margin: 20px auto;
                    width: 10%;
                }
                
                .footer .col-sm-4 {
                    margin-bottom: 40px;
                    text-align: center;
                    display: block;
                    flex-direction: row;
                }
                
                .footer a {
                    color: #eaeaea;
                    text-decoration: none;
                    display: flex;
                    flex-direction: row;

                }
                
                .footer a:hover {
                    text-decoration: underline;
                }
                
            }


            .short_hr {
                height: 1px;
                background-color: #c5f5b9;
                border: none;
                margin-top: 1em;
                margin-bottom: 0em;
                width: 50%;
            }

            .col-sm-4 {
                margin-bottom: 0.5em;
            }

            .col-sm-4 a {
                display: block;
                margin-bottom: 0em;
                font-weight: bold;
                color: #c5f5b9;
            }

            .col-sm-4 p {
                margin-bottom: 0em;
                color: #c5f5b9;
            }

            
            body 
            {
                color: teal;
                margin-bottom: 0;
                
                
            }

            .wrapper 
            {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                /* Set the height of the wrapper to 100% */
            }
            .logo 
            {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 95px;
            height: 95px;
            border-radius: 7% 18% 7% 18%;
            margin-bottom: 20px;
            box-shadow: 8px 3px 8px rgba(0, 0, 0, 1);
            margin-right: 10px;
            margin-top: 5px;
        
            }

            .logo img 
            {
            border-radius:  7px 22px 7px 22px;
            width: 80px;
            height: 80px;
            object-fit: cover;
            filter: drop-shadow(0px 0px 10px rgba(0, 0, 0, 0.7));
            }

            h1 
            {
            font-size: 30px;
            font-weight: bold;
            color: white;
            text-shadow: 0px 3px 10px rgba(0, 0, 0, 0.5);
            text-align: center;
            justify-content: center;
            text-decoration-color: #63738a;
            color: #04f4ff;
            
            }

            button.btn.btn-warning 
            {
                background-color: #ffc107;
                border-color: #ffc107;
                color: #212529;
                border-radius: 20px;
                padding: 2.5px 5px;
                font-size: 13px;
                box-shadow: 1.25px 1.25px 2.5px rgba(0,0,0,0.1);
                transition: all 0.5s ease-in-out;
            }

           button.btn.btn-warning:hover
            {
                background-color: #212529;
                color: #ffc107;
                cursor: pointer;
            }
            
            
            .text-center
            {
            text-align: center;
            font-size: 16px;
            line-height: 20px;
            color: #000000;
            }


            .btn btn-info
            {
                background-color: orange;
                color: white;
                padding: 2.5px 5px;
                border-radius: 20px;
                position: absolute;
                right: 0;
                bottom: 0;
            }
             
            
             .dropbtn 
            {
                background-color: gold;
                color: white;
                padding: 10px;
                font-size: 13px;
                border: aquamarine;
                cursor: pointer;
                border-radius: 10px 20px 30px;
                border-color: #ffc107;
                transition: all 0.5s ease-in-out;
                margin-right: 70px;
            }

            .dropdown
            {
                position: relative;
                display: inline-block;
                z-index: 1000;
            }

            .dropdown-content
            {
                display: none;
                position: absolute;
                background-color: grey;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;

            }

            .dropdown-content a 
            {
                color: black;
                padding: 12px 16px;
                text-decoration: wavy;
                display: block;
                text-decoration-color: chocolate;
            }

            .dropdown-content a:hover 
            {
                background-color: teal;
            }
            

            .dropdown:hover .dropdown-content 
            {
            display: block;
            }
            .dropdown:hover .dropbtn 
            {
             background-color: #212529;
            }

            .welcome-text
            {
                margin: 12% 20% 25%;
                text-align: center;
                font-size: 25px;
                filter: saturate(10);
                color: fff;

            }

            .form 
            {
                display: flex;
                align-items: center;
                
            }

            .form-control
            {
                border-radius: 20px;
                padding: 2.5px 5px;
                font-size: 13px;
                box-shadow: 1.25px 1.25px 2.5px rgba(0,0,0,0.1);
                transition: all 0.5s ease-in-out;

            
            }

            .form-control:hover

            {

                background-color: #212529;
                color: #ffc107;
                cursor: pointer;
            }

            /* Position the search container */
            .search-container {
            float: right;
            margin-right: 20px;
            margin-top: 10px;
            padding-top: 10px;
            }

            /* Style the search input and button */
            .search-container input[type=text] {
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
            border: none;
            }

            .search-container button {
            float: right;
            padding: 6px 10px;
            margin-top: 8px;
            margin-right: 16px;
            background: #ddd;
            font-size: 17px;
            border: none;
            cursor: pointer;
            }

            .search-container button:hover {
            background: #ccc;
            }


            #myCarousel {
                height: 50vh;
                width: 100%;
            }

            /* Add a dark overlay on top of the carousel images */
            .carousel-item::before {
                /* content: "shoman"; */
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5);
            }

            .carousel-item {
                animation-name: slide-in;
                animation-duration: 3s;
                animation-delay: 1s;
                animation-fill-mode: both;
                
            }

            .carousel-item {
            transform: perspective(1000px) rotateY(20deg);
            }

            @keyframes slide-in {
                from {
                    transform: translateX(50%);
                    opacity: 0;
                }
                to {
                    transform: translateX(0%);
                    opacity: 1;
                }
                
            }

            @media (max-width: 767px) {
            .carousel-item {
                font-size: 18px;
                padding: 10px;
            }
            }

            /* Style the carousel captions */
            .carousel-caption {
                position: absolute;
                top: 100px;
                transform: translateY(-50%);
                text-align: center;
                color: #04f4ff;
                text-shadow: 0px 3px 10px rgba(0, 0, 0, 0.9);
            }

            .carousel-caption h2 {
                font-size: 2rem;
                font-weight: bold;
                margin-bottom: 0rem;
                color: #04f4ff;
                text-shadow: 0px 3px 10px rgba(0, 0, 0, 0.9);
            }

            .carousel-caption p {
                font-size: 2rem;
                margin-bottom: 0rem;
            }

            .carousel-item , .carousel-item p {
                font-family: 'Open Sans', sans-serif;
                font-size: 18px;
                font-weight: bold;
                letter-spacing: 1px;
                line-height: 1.5;
                text-align: center;
                
            }




        </style>

    </head>

    <body>

        <!--  Main body -->

        <div class="section">

            <!-- Sections Category -->
        
            <div class="left-column" > 
                
              <!-- logo section -->
                
                <div class="wrapper">


                    <div class="dropdown">

                        <div class="logo">

                            <img src="Won/fam8.jpeg" alt="WeeChaFam">

                        </div>


                        <div class="dropdown-content">

                            <a class="nav-link text-white" href="Map">Map Display</a>
                            <a class="nav-link text-white" href="Statistics">Iboost Statitics</a>

                        </div>

                    
                        
                    </div>

                    <em><h1  style="margin-top: 0;">iBoost Signal Amplifier </h1></em>


                    <div class="content">

                
                    

                        <div class="welcome-text">

                            
                            <p><em><strong>iBoost is a smart signal amplifier which leverages Machine learning,google maps platform and a host of other technologies to bring an end to the internet connectivity and cellular network challenges brought about by poor network coverage.<strong></em></p><br><br>
                            
                            
                        </div>



                    </div>




                </div>


            </div>


            <div class="right-column">


                <!-- header content -->

                <ul class="navbar-nav ml-auto">     

                    <li class="nav-item">

                        <a class="nav-link text-white" href="#">Home</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link text-white" href="Map">iBoost Map Display</a>
                    
                    </li>

                    <li class="nav-item">

                        <a class="nav-link text-white" href="Statistics">iBoost Statistics</a>
                    
                    </li>

                    <!-- <button type="button" class="btn btn-warning" >

                        <li class="nav-item">

                            <a class="navbar-link text-white" href="Signin">Login</a>

                        </li>

                    </button> -->

                    <!-- <button type="button" class="btn btn-warning">

                        <li class="nav-item">

                            <a class="nav-link text-white" href="Logout">Logout</a>
                            
                        </li>

                    </button> -->

                    

                    <div class="search-container">

                        <form action="#">

                            <input type="text" placeholder="Search..." name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        
                        </form>
                    
                    </div>

                </ul>

                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" style="height: 40vh;">

                    <div class="carousel-inner" style="height: 40vh;">

                        <div class="carousel-item active">

                            <div class="carousel-caption">
                            
                                <h2><ins><em>"Mission"</ins></em></h2>
                                <p ><em>"To enhance connectivity and improve the quality of life for people living in areas with poor network coverage by providing high quality and innovative smart signal mobile mobile network amplifiers."</em></p>
                        
                            </div>

                        </div>

                        <div class="carousel-item">

                            <div class="carousel-caption">

                                <h2><em><ins>"Vision"</ins></em></h2>
                                <p ><em> "To be the leading provider of smart signal mobile network amplifiers,empowering people to stay connected no matter where they are.We aspire to continue innovating and improving our products, as well as expanding our reach to more areas around the world with poor network coverage.We aim to make a positive impact on society by enabling seamless communication and helping bridge the digital divide."</em></p>
                            </div>


                        </div>

                        <div class="carousel-item">

                            <div class="carousel-caption">

                                <h2><em><ins>"Facts"</ins></em></h2>
                                <p ><em>"86% of people believe that 5G internet will replace 4G internet technically 5G is built on the old 4G network and 5GE is no the same to 5G."</em></p>
                            
                                
                            </div>

                        </div>

                    
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden"></span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden"></span>
                    </button>


                    
                </div>



                <div class="footer" >

                 <!-- main footer -->

                    <div class="row" style="padding-left: 10px;">

                        <div class="col-sm-4">

                            <a style="color: #eaeaea;"><em>ABOUT US</em></a>
                            <hr class="short_hr" style="color: #eaeaea;">
                            
                            <p><strong><em><a href="#">IBoost Telephone: +254 754 836496/+254 715 734517</a></em></strong></p>           
                            
                            <p><strong><em><a href="#">Developer's Contact: +254741511951/chachsted@gmail.com</a></em></strong></p>

                            
                        
                        </div>

                        <div class="col-sm-4" style="padding-left: 10px;">

                            <a style="color: #eaeaea;"><em>LINKS</em></a>
                            <hr class="short_hr" style="color: #eaeaea;">
                            
                            <p><strong><em><a href="https://facebook.com/profile.php?id=100089176057237">Facebook</a></em></strong></p>
                            <p><strong><em><a href="https://twitter.com/iboost_m">Twitter</a></em></strong></p>
                            <p><strong><em><a href="http://iboost.ke/">Tiktok</a></strong></em></p>
                            
                        
                        </div>
                        
                        <div class="col-sm-4">

                            <a style="color: #eaeaea;"><em>ICONS</em></a>

                            <hr class="short_hr" style="color: #eaeaea;">
                            
                            <a href="#"><i class="fas fa-cloud"></i></a>         
                            
                            <a href="#"><i class="fas fa-bars"></i></a>

                            <a href="#"><i class="fas fa-file"></i></a>


                        
                        </div>

                        
                    </div>

                    
                    <p style="padding: 2em; text-align: center; color: #000000; background-color: #eaeaea;"><ins><strong>&copy; <?= date('Y') ?>Designed and developed by Eng.Reuben Teddy & in partnership with the iBoost group.</strong></ins></p>
                
                </div>


            </div>


        </div>


        <!-- end of body script extension -->


        <script src="/IBoostproj/script/boost.js"></script>


    </body>

    

    
</html>