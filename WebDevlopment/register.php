<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
	<?php include("header.php") ;
	 
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,"project");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
	  
	  
	   
?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">
		  <section class="testimonial py-5" id="testimonial">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 py-5 bg-primary text-white text-center ">
                <div class=" ">
                    <div class="card-body">
                        <img src="images/registration_bg.svg" style="width:30%">
                        <h2 class="py-3">Registration</h2>
                        <p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel.

</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">Please fill with your details</h4>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <input id="Full Name" name="Full Name" placeholder="Full Name" class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-6">
                          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                      </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input id="Mobile No." name="Mobile No." placeholder="Mobile No." class="form-control" required="required" type="text">
                        </div>
                        <div class="form-group col-md-6">
                                  
							
							
                                  <select id="inputState" class="form-control">
                                    <option selected>Choose ...</option>
                                    <?php
									  
									  $sql="select * from country";
									  
									  $result = $conn->query($sql);
									  
									  
									 	while($row=$result->fetch_assoc()){
											if($row["country_id"]==77){
												echo "<option selected value='".$row["country_id"]."'>".$row["country_Name"]."</option>";
											}
											else{
											echo "<option value='".$row["country_id"]."'>".$row["country_Name"]."</option>";
											}
										}
									  ?>
									  
                                  </select>
                        </div>
                        <div class="form-group col-md-12">
                                  <textarea id="comment" name="comment" cols="40" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                  <label class="form-check-label" for="invalidCheck2">
                                    <small>By clicking Submit, you agree to our Terms & Conditions, Visitor Agreement and Privacy Policy.</small>
                                  </label>
                                </div>
                              </div>
                    
                          </div>
                    </div>
                    
                    <div class="form-row">
                        <button type="button" class="btn btn-danger">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

		
	  </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
