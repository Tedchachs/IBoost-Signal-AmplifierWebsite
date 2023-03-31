<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>WeeChaFam</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

	<!-- STYLES -->

	<?=$this->extend('weeusers.php')?>

<?=$this->section('content')?>
    <div class="container mt-4">

        <div class="row justify-content-center">
            
            <div class="col-md-6">


                <div class="card">


                    <div class="class-header">

                        <h4>
                            <a href="<?=base_url('weeusers')?>" class="bt bt-danger btn-sm float-end">Back</a>
                        </h4>

                    </div>

                    <div class="card-body">

                        <form action="<?=base_url('/add')?>" method="post">

                            <div class="form-group">
        
                                <?php echo form_input(['name'=>'firstname','class'=>'form-control','value'=>set_value('firstname'),'placeholder'=>'Enter your Firstname']);?>


                            </div>

                            <div class="form-group">
        
                                <?php echo form_input(['name'=>'lastname','class'=>'form-control','value'=>set_value('laststname'),'placeholder'=>'Enter your Lastname']);?>


                            </div>

                            <div class="form-group">
        
                                <?php echo form_input(['name'=>'emailid','class'=>'form-control','value'=>set_value('emailid'),'placeholder'=>'Enter your Email id']);?>


                            </div>

                            <div class="form-group">

                                <?php echo form_submit(['name'=>'insert','value'=>'Submit','class'=>'btn btn-success btn-lg btn-block']);?>

                            </div>


                        </form>



                    </div>


                </div>


            </div>


        </div>


    </div>

<?=$this->endsection()?> 


 <style>
	 body {

		color: #120000;
		background-image: url("Won/Bak.jpg");
		background: #d0d6d9;
		font-family: -apple-system,BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple color Emoji", "Segoe UI Emoji";
		font-size: 16px
		margin: 0;
		padding:0
		webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
		text-rendering: optimizedLegibility;
		background-position: absolute;

	}

	.menu{
		padding: 2rem 1rem;
	}

	header li {
		display: inline-flex;
		height: 9vh;
		font-size: 1.5rem;
		 
	}

	h1{
		text-align: center;
		text-decoration-color: #63738a;
		color: #eb0a0a;
	}
	.form-control {
		height: 40px;
		box-shadow: none;
		color: #969fa4;
	}
	.form-control:focus {
		border-color: #5cb85c;
	}
	.form-control, .btn {       
		border-radius: 3px;
	}
	
	.signup-form {
		width: 450px;
		margin: 0 auto;
		padding: 30px 0;
		font-size: 15px;
	}
	
	.signup-form h2 {
		color: #fff;
		margin: 0 0 15px;
		position: relative;
		text-align: center;
	}

	.signup-form h2:before, .signup-form h2:after {
		content: "";
		height: 2px;
		width: 30%;
		background: #d4d4d4;
		position: absolute;
		top: 50%;
		z-index: 2;
	}

	.signup-form h2:before {
		left: 0;
	}

	.signup-form h2:after {
		right: 0;
	}
	.signup-form .hint-text {
		color: #fff;
		margin-bottom: 30px;
		text-align: center;
	}
	.signup-form form {
		color: #999;
		border-radius: 3px;
		margin-bottom: 15px;
		background: #f2f3f7;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		padding: 30px;
	}
	.signup-form .form-group {
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"] {
		margin-top: 3px;
	}
	.signup-form .btn {        
		font-size: 16px;
		font-weight: bold;		
		min-width: 140px;
		outline: none !important;
	}
	.signup-form .row div:first-child {
		padding-right: 10px;
	}
	.signup-form .row div:last-child {
		padding-left: 10px;
	} 
	.signup-form a {
		color: #fff;
		text-decoration: underline;
	}

	.signup-form a:hover {
		text-decoration: none;
	}
	.signup-form form a {
		color: #5cb85c;
		text-decoration: none;
	}	
	.signup-form form a:hover {
		text-decoration: underline;
	} 
		
 </style>

</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>
<div class="heroe">

		<h1>WeeChaFam</h1>


	</div>

	   <!-- Brand Logo -->
	   <a href="index3.html" class="brand-link">
        <img class="animation-name" src="Won/Bak.jpg" alt="WeeChaFam" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">WeeChaFam</span>
        </a>

      </div>
	<nav class="navbar navbar-expand-sm bg-light grey justify-content-center">
		<div class="menu">
			<ul class="navbar-nav">

			    <li>
			        <li class="menu-toggle">

				        <button onclick="toggleMenu();">&#9776;</button>
	             
					</li>

				    <li class="nav-item">
						<a class="nav-link" href="#">Home</a>
					</li>

			        <li class="nav-item">
						<a class="nav-link" href="#" target="_blank">Client Portal</a>
					</li>

			        <li class="nav-item">
						<a class="nav-link" href="#" target="_blank">Credit Categories</a>
					</li>

			        <li class="nav-item">
						<a class="nav-link" href="#" target="_blank">FAQS</a>
					</li>

			    </li>

		    </ul>
        </div>	
    </nav>


</header>

<!-- CONTENT -->

<section>

	 <h3></h3>

	 <p>Welcom to WeeChaFam organization where you get all your financial crisis solved by just registering with us just registering with us.</p><br><br><br><br><br>
    
	
	 <div class="container">
		<a class="navbar-brand" href="/">Login</a>
		<button class="navbar-toggler" type="button" data toggle="collapse" data-target="#navbarsupportedcontent" aria-control="navbar">
		<span class="navbar-toggler-icon"></span>

		</button>

		<div class="collapse navbar-collapse" id="navbarsupportedcontent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="/locahost/weedata">Login</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="/register">Register</a>
				</li>

			</ul>

		</div>

	</div>




	<div class="container">
		<img class="img-fluid" src="Won/Bak.jpg" alt="WeeChaFam" width="1500px" height="1250px"> 
	</div>

</section>

<div class="container mt-5">

	
    <div class="row">

	    <div class="col-sm-4">

		    <h3><p style="text-color: grey;"><a href="#"target="_blank">ABOUT US</a></p></h3>
			<ul style="color: #c5f5b9;">

				<li><em><a href="#">Location</a></em></li>
				<li><em><a href="#">Branches</a></em></li>
				<li><em><a href="#">Staff Portal</a></em></li>

			</ul>

        </div>

		<div class="col-sm-4">

		    <h3><p style="text-color:grey;"><a href="#"target="_blank">LINKS</a></p></h3>
			<ul style="color: #c5f5b9;">

			    <li><em><a href="#">Instagram</a></em></li>
				<li><em><a href="https://twitter.com/TChachs?s=09">Twitter</a></em></li>
				<li><em><a href="https://www.tiktok.com/@djtedchachs?_t=8YnUwYKU5gs&_r=1">Tiktok</a></em></li>
		
		    </ul>

		</div>

		<div class="col-sm-4">

		    <h3><p><a href="#" target="_blank">ICONS</a></p></h3>
			<ul style="color: #c5f5b9;">

			    <li><i class="fas fa-cloud" style="font-size: 48px;color: orange;text-shadow: 30% 30% 50 #000000;"></i></li>
				<li><i class="fas fa-heart" style="font-size: 48px;color: orange;text-shadow: 30% 30% 50 #000000;"></i></li>
				<li><i class="fas fa-file" style="font-size: 48px;color: orange;text-shadow: 30% 30% 50 #000000;"></i></li>
		
		    </ul>

        </div>

    </>  
	

</div>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>
	

	<div class="copyrights">

		<p>&copy; <?= date('Y') ?> WeeChaFam Trust. Try WeeChaFam org the only financial consortium tha cares for all of its clients.</p>
	</div>

</footer>

<!-- SCRIPTS -->

<script>
	function toggleMenu() {
		var menuItems = document.getElementsByClassName('menu-item');
		for (var i = 0; i < menuItems.length; i++) {
			var menuItem = menuItems[i];
			menuItem.classList.toggle("hidden");
		}
	}
</script>

<!-- -->

</body>
</html>
