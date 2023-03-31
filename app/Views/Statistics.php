<!DOCTYPE html>
<html>
  <head>

        <meta charset="UTF-8">
        <title>Data Visualization Page</title>
        <meta name="description" content="The small framework with powerful features">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="/IBoostproj/css/statistics.css" type="text/css"></link>
        
    </head>


  <body>

    <!-- header + logo -->
    
    <header>

        <div class="logo">

            <img src="Won/fam8.jpeg" alt="iBoost">

        </div>

        <h1 >Machakos Data Visualization Page</h1>
    
    </header>

        <!-- Sidebar + header + main column -->
        
        <div class="container-fluid">

            <div class="row">

                <!--sidebar+header  -->

                <nav class="col-md-2 d-none d-md-block bg-darklategrey sidebar">

                    <div class="sidebar-sticky">

                        <ul class="nav flex-column">

                            <li class="nav-item">
                                <a class="nav-link active" href="#">Kathemboni Data Visuals</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Miwani Data Visuals</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Katoloni Data Visuals</a>
                            </li>

                        </ul>
                
                    </div>

                </nav>


                <!-- Mainbar+footer -->


                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

                    <section>

                        <p>Welcome to the Data Visualization Page.The following are rea time graphs for the data being recieved from the iboost device depending on specific areas.</p>
                
                    </section>

                    

                    <div class="graph-container" id="kathemboni-graph" style="display: flex;">
                   
                        <iframe title="iBoost Stats"  src="https://app.powerbi.com/view?r=eyJrIjoiMjFlY2JiYTEtODliMi00OGY4LThkZDQtNzhkMTljMTUzMTkwIiwidCI6ImRlMTI1ZDNjLTMzMzgtNDhhYS05ODU4LWM2ZDMyNDllMTQ1NiIsImMiOjN9" frameborder="0" allowFullScreen="true"></iframe>

                    </div>

                    <section>

                        <h2>Resources</h2>

                        <ul>

                            
                            <li><a href="https://docs.microsoft.com/en-us/power-bi/">Power BI Documentation</a></li>
                            
                        </ul>

                
                    </section>


                    <!-- footer -->

                    <footer>

                        <div class="copyrights">

                            <p><strong>&copy; <?= date('Y') ?> Designed and developed by Eng.Reuben Teddy(chachsted@gmail.com)& in partnership with the iBoost group.</strong></p>
                        
                        </div>

                    </footer>


                </main>

        
            </div>
        

        </div>


    </body>


</html>
