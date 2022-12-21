<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> BRACU ST </title>
    
      <!-- core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <link href="css/font-awesome.min.css" rel="stylesheet"/>
      <link href="css/animate.min.css" rel="stylesheet"/>
      <link href="css/main.css" rel="stylesheet"/> 
      <link rel=""shortcut icon" href=""/>
  </head>

  <body> 
    <!-- following section is used for creating the menubar in the webpage -->
	<section id="header">
		<div class="row">  
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;"> BRAC UNIVERSITY </div>
			<div class="col-md-10" style="text-align: right"> 
				<a href="#"> Home </a> 
				<a href="#" style="margin-left: 20px;"> About Us </a> 
				<a href="#" style="margin-left: 20px;"> Tutors  </a>
				<a href="#" style="margin-left: 20px;"> Terms & Conditions </a>
				<a href="#" style="margin-left: 20px;"> Courses </a> 
				<a href="#" style="margin-left: 20px;"> Contact Us </a>
			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title"> Add a New Tutor  </div>
		
		<form action="insert_student.php" class="form_design" method="post">
			Student ID: <input type="text" name="sid"> <br/>
			Student Tutor's Name: <input type="text" name="sname"> <br/> 
			G_suit email: <input type="text" name="cls"> <br/>
			Department: <input type="text" name="address"> <br/>
			<br/>
			<input type="submit" value="Add to Database">
		</form>
	</section>

	
	<!----- Footer ----->
	<section id="footer"> 
	
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>

