<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LoanApp Form</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">



      <!-----caarousel -->
      <link rel="stylesheet" href="../bootstrap-5.2.2/css/bootstrap.min.css"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"> 
      <!------ICONS--------->
      <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script>  
          <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>

  

    
    <div class="container-fluid px-0">


            <div class="row gx-0">
                <div class="col-lg-3  d-none d-lg-block"  style="background-color: #1165AE;">
                    <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <img src="/SourceCode/images/logoo.jpg" style="width: 60px; height: 60px;"><h1 class="m-0  text-uppercase" style="color: #FFDE59;">NMEMPC</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">nmempc@example.com</p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">+012 345 6789</p>
                            </div>
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                <a class="" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-dark p-3 p-lg-0"  style="background-color: #1165AE;">
                        <a href="index.html" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-uppercase" style="color: #FFDE59;"> NMEMPC</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="" class="nav-item nav-link active">Home</a>
                                <a href="" class="nav-item nav-link">About Us</a>
                            
                                <!-- <a href="service.html" class="nav-item nav-link">Membership</a> -->
                                <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Membership</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="booking.html" class="dropdown-item">Booking</a>
                                    <a href="team.html" class="dropdown-item">Our Team</a>
                                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                </div>
                            </div>
                                <!-- <div class="nav-item dropdown"> -->
                                    <a href="#" class="nav-item nav-link">Services</a>
                                    <!-- <div class="dropdown-menu rounded-0 m-0">
                                        <a href="booking.html" class="dropdown-item">Booking</a>
                                        <a href="team.html" class="dropdown-item">Our Team</a>
                                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    </div>
                                </div> -->
                                <!-- <a href="contact.html" class="nav-item nav-link">Contact</a> -->
                            </div>
                           
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <style>
            .navbar-dark .navbar-nav .nav-link {
            margin-right: 30px;
            padding: 25px 0;
            color:  white;
            font-size: 15px;
            text-transform: uppercase;
            outline: none;
        }
        
        .navbar-dark .navbar-nav .nav-link:hover,
        .navbar-dark .navbar-nav .nav-link.active {
            color:   #FFDE59;
        }
        
        @media (max-width: 991.98px) {
            .navbar-dark .navbar-nav .nav-link  {
                margin-right: 0;
                padding: 10px 0;
            }
        }
        :root {
            --primary: #FEA116;
            --light: #F1F8FF;
            --dark: #0F172B;
        }
        
        .fw-medium {
            font-weight: 500 !important;
        }
        
        .fw-semi-bold {
            font-weight: 600 !important;
        }
        
                </style>




<!-- 
  
<section class="vh-100 gradient-custom"> -->
    <div class="container py-3 " style="margin-top: 2%; margin-bottom: 2%;">
      <?php 

        if (isset($_POST['submit'])) {
          $image = $_FILES['image']['name'];
          $signature = $_FILES['signature']['name'];
          $name = $_POST['name'];
          $address = $_POST['address'];
          $cellphoneNum = $_POST['cellphoneNum'];
          $age = $_POST['age'];
          $birthdate  = $_POST['birthdate'];
          $birthPlace = $_POST['birthPlace'];
          $civilstatus  = $_POST['civilstatus'];
          $religion =$_POST['religion'];
          $occupation =$_POST['occupation'];
          $monthlyIncome = $_POST['monthlyIncome'];
          $otherIncome  = $_POST['otherIncome'];
          $spouseName = $_POST['spouseName'];
          $numOfDependents = $_POST['numOfDependents'];
          $employedCompany = $_POST['employedCompany'];
          $presentEmp = $_POST['presentEmp'];
          $emergency =$_POST['emergency'];
          $address2 = $_POST['address2'];
          $cellphoneNum2 = $_POST['cellphoneNum2'];

          

          $errors = array();

          // if (empty($name) OR empty($address) OR empty($cellphoneNum)) {
          //   array_push($errors,"All fields are required");
          //  }

           require_once "database.php";
           $sql = "SELECT * FROM member WHERE name = '$name'";
           $result = mysqli_query($con, $sql);
           $rowCount = mysqli_num_rows($result);
 
          // $errors = array();

          // if (empty($name) OR empty($address) OR empty($cellphoneNum)) {
          //   array_push($errors,"All fields are required");
          //  }

          // require_once "database.php";
          // $sql = "SELECT * FROM member WHERE name = '$name'";
          // $result = mysqli_query($con, $sql);
          // $rowCount = mysqli_num_rows($result);
       //    if ($rowCount>0) {
       //     array_push($errors,"Email already exists!");
       //    }
          if (count($errors)>0) {
           foreach ($errors as $error) {
               echo "<div class='alert alert-danger'>$error</div>";
           }
       } 
          else
          {
            // $sql = "INSERT INTO member ( image, name, address, cellphoneNum, age, birthdate, birthPlace,  civilstatus, religion, occupation, monthlyIncome,otherIncome, spouseName, numOfDependents,
            // employedCompany, presentEmp, emergency, address2, cellphoneNum2)  VALUES (  ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            // $stmt = mysqli_stmt_init($con);
            // $prepareStmt = mysqli_stmt_prepare($stmt,$sql);

            $query = "INSERT INTO member (image, signature, name, address, cellphoneNum, age, birthdate, birthPlace,  civilstatus, religion, occupation, monthlyIncome,otherIncome, spouseName, numOfDependents,
            employedCompany, presentEmp, emergency, address2, cellphoneNum2) VALUES('$image', '$signature', '$name','$address','$cellphoneNum','$age','$birthdate','$birthPlace','$civilstatus','$religion','$occupation',
           '$monthlyIncome','$otherIncome','$spouseName','$numOfDependents','$employedCompany','$presentEmp','$emergency','$address2','$cellphoneNum2')";
            $query_run = mysqli_query($con, $query);

            // if ($prepareStmt) {
            //   mysqli_stmt_bind_param($stmt,"sssssssssssssssssss",$image,$name,$address,$cellphoneNum,$age,$birthdate,$birthPlace,$civilstatus,$religion,$occupation,
            //   $monthlyIncome,$otherIncome,$spouseName,$numOfDependents,$employedCompany,$presentEmp,$emergency,$address2,$cellphoneNum2);
            //   mysqli_stmt_execute($stmt);
            //   echo "<div class='alert alert-success'>You are registered successfully.</div>";
            // }
            if($query_run)
            {
              move_uploaded_file($_FILES['image']['tmp_name'], 'upload/' .basename($_FILES['image']['tmp_name']));
              move_uploaded_file($_FILES['signature']['tmp_name'], 'upload/' .basename($_FILES['signature']['tmp_name']));
              // "upload/".$_FILES["dpt_cate_image"]["name"]);
              $_SESSION['status'] = "Image Stored Successfully";
              // header('Location: MembershipForm.php');
            }

            else{
              // die("Something went wrong");
              $_SESSION['status'] = "Image Not Inserted";
              header('Location: MembershipForm.php');
           
            }
        } 
}
?>
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-9">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">

                 <?php
                  if(isset($_SESSION['status']) && $_SESSION != '')
                  {

                    ?>
                    
                    <div class = "alert alert-warning alert-dismissible fade show" role="alert">
                      <strong>Hey!</strong> <?PHP echo $_SESSION['status']; ?>
                      <button type ="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

                    <?php
                    unset($_SESSION['status']);
                  }
                 ?>

              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" style="color: #1165AE; font-weight:700;">Application for Membership</h3>
              <form action ="MembershipForm.php" method="post" enctype="multipart/form-data">
  

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <input type="file" name="image" accept=".jpg, .jpeg, .png"  onchange="previewImage(event)"
                    data-parsley-trigger="keyup" class="form-control form-control-lg" style="margin-top: 15%; border: 2px solid black;" />
                    <label for="image">Your 2x2 Photo with white background</label>
                    </div>

                    <div class="col-md-6 mb-4 ">
                      <div style="width: 200px; height: 200px;  margin-left: 13%;" >
                      <img id="image-preview" src=""  style="width: 200px;">
                    </div>
                    </div>  
                </div>   

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <input type="file" name="signature" accept=".jpg, .jpeg, .png"  onchange="previewImage2(event)"
                    data-parsley-trigger="keyup" class="form-control form-control-lg" style="margin-top: 15%; border: 2px solid black;" />
                    <label for="signature">Your e-signature</label>
                    </div>

                    <div class="col-md-6 mb-4 ">
                      <div style="width: 200px; height: 200px;  margin-left: 13%;" >
                      <img id="image-preview2" src=""  style="width: 200px;">
                    </div>
                    </div>  
                </div>   



                <div class="row"  style="margin-top: 3%;">
                  <div class="col-md-6 mb-4" >
   
                    <div class="form-outline">
                      <input type="text" name="name" class="form-control form-control-lg" />
                      <label class="form-label" for="name">Name</label>
                    </div>
  
                  </div>

                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                      <input type="text"  name="address" class="form-control form-control-lg" />
                      <label class="form-label" for="presentAddress">Present Address</label>
                    </div>
  
                  </div>

                  
                </div>
  
                <div class="row">
                  <div class="col-md-5 mb-4 d-flex align-items-center">
  
                    <div class="form-outline  w-100">
                      <input type="text" name ="cellphoneNum" class="form-control form-control-lg"/>
                      <label for="cellphoneNum" class="form-label">Cellphone No. </label>
                    </div>
  
                  </div>
           
                  <div class="col-md-3 mb-4 d-flex align-items-center">
  
                    <div class="form-outline  w-100">
                      <input type="text" name="age" class="form-control form-control-lg"  />
                      <label for="age" class="form-label">Age</label>
                    </div>
  
                  </div>

                  <div class="col-md-4 mb-4 pb-2">
                    <div class="form-outline">
                      
                        <input type="date" name="birthdate" class="form-control form-control-lg"  >
                        <label for="dob" class="form-label">Birth Date</label>
                        </div>
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-md-5 mb-4 pb-2">
  
                    <div class="form-outline">
                      <input type="text" name="birthPlace"  class="form-control form-control-lg" />
                      <label class="form-label" for="birthPlace">Birthplace</label>
                    </div>
  
                  </div>

                  <div class="col-md-4  mb-4 pb-2">
                    <select class="select form-control form-control-lg" name="civilstatus" > 
                      <option value=""> -- Select Civil Status -- </option>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="live-in-partner">Live-in Partner</option>
                        <option value="widowed">Widowed</option>
                        <option value="separated">Separated</option>
                      </select>
                   
                    <label class="form-label select-label">Civil Status </label>
                  </div>  

                  <div class="col-md-3 mb-4 pb-2">
  
                    <div class="form-outline">
                      <input type="text"  name="religion" nameclass="form-control form-control-lg" />
                      <label class="form-label" for="Religion">Religion</label>
                    </div>
                </div>
                </div>

                <div class="row">
                  <div class="col-md-4 mb-4 pb-2">
  
                    <div class="form-outline">
                      <input type="text" name="occupation" class="form-control form-control-lg" />
                      <label class="form-label" for="occupation">Occupation</label>
                    </div>

                  </div>

                  <div class="col-md-4 mb-4 pb-2">
                    <select class="select form-control form-control-lg" name="monthlyIncome" required>
                      <option value="P5000-P10,000">P5000-P10,000</option>
                      <option value="P10,000-P15,000">P10,000-P15,000</option>
                      <option value="P15,000-P20,000">P15,000-P20,000</option> 
                      <option value="P20,000-P25,000">P20,000-P25,000</option>
                    </select>
                   
                    <label class="form-label select-label">Monthly Income</label>
                  </div>

                  <div class="col-md-4 mb-4 pb-2">
  
                    <div class="form-outline">
                      <input type="text"   name="otherIncome" class="form-control form-control-lg" />
                      <label class="form-label" for="otherIncome">Other Sources of Income</label>
                    </div>

                  </div>
                  </div>

  
                <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
  
                        <div class="form-outline">
                          <input type="text" name="spouseName" class="form-control form-control-lg" />
                          <label class="form-label" for="spouseName">Name of Spouse (if married)</label>
                        </div>
    
                      </div>

                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                      <input type="text"  name="numOfDependents" class="form-control form-control-lg"  />
                      <label class="form-label" for="numOfDependents">No. of Dependents</label>
                    </div>
                  </div>


                </div>

                <div class="row">
                    <div class="col-md-4 mb-4 pb-2">
  
                        <div class="form-outline">
                          <input type="text"   name="employedCompany" class="form-control form-control-lg" />
                          <label class="form-label" for="employedCompany">Name of Company if employed</label>
                        </div>
    
                      </div>

                
                  <div class="col-md-4 mb-4 pb-2">
                    <div class="form-outline">
                      <input type="text"  name="presentEmp" class="form-control form-control-lg"  />
                      <label class="form-label" for="presentEmp">Present Employment</label>
                    </div>
                  </div>

                  <div class="col-md-4 mb-4 pb-2">
                    <div class="form-outline">
                      <input type="text"  name="emergency" class="form-control form-control-lg" />
                      <label class="form-label" for="emergency">Person to be contacted in case of emergency</label>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
  
                        <div class="form-outline">
                          <input type="text"  name="address2" class="form-control form-control-lg" />
                          <label class="form-label" for="address2">Address</label>
                        </div>
    
                      </div>

                
                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                      <input type="text"  class="form-control form-control-lg" minlength="11" name="cellphoneNum2" />
                      <div class="invalid-feedback">
                        The number of characters should not be less than the minimum value: 11.
                      </div>
                      <label class="form-label" for="cellphoneNum2">Cellphone No.</label>
                    </div>
                  </div>
                  </div>
                <!-- <p style="font-weight: 600;color:black;" > Data Privacy Content</p>
                <p style="font-weight: 300;color:black; text-align: justify;" > "In compliance with the Data Privacy Act (DPA) of 2012 and Credit Information Corporation (CIC), and its Implementing Rules and Regulations, I agree and authorize Tagum Cooperative to use my Personal Information to process any transaction related in the availment of Tagum Cooperative's Products and Services, including the insurance services and administer the benefits as stated in the policy and other service agreements and inform me of future customer campaigns and base its offer using the personal information I shared with the company." *t</p>
                <p style="font-size: 15px; font-weight: 500;"> Checkbox *</p>
                    <div class="form-check">
                      
                        <div class="col-md-6 mb-4 pb-2">
                         
                            <div class="form-outline">
                                <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                <label class="form-check-label" for="checkbox1">
                                 I agree to the Data Privacy Content
                                </label>
                                 </div>
                        
                      </div>
                </div> -->
                <div class="form-btn">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
<!--                 
                <input class="btn btn-back btn-md" type="submit" value="Back" style="background-color: #0c151d; color: white;" />
                <input class="btn btn-submit btn-md" type="submit" value="Submit" style="background-color: #1165AE; color: white; float: right;"> -->
                <!-- <input class="btn btn-submit btn-md" type="submit" value="Submit" style="background-color: #1165AE; color: white; float: right;" /> -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<script>
    function previewImage(event) {
      var reader = new FileReader();
      reader.onload = function() {
        var output = document.getElementById('image-preview');
        output.src = reader.result;
        document.getElementById('image-preview-container').classList.remove('d-none');
      }
      reader.readAsDataURL(event.target.files[0]);
    }

    function previewImage2(event) {
      var reader = new FileReader();
      reader.onload = function() {
        var output = document.getElementById('image-preview2');
        output.src = reader.result;
        document.getElementById('image-preview2-container').classList.remove('d-none');
      }
      reader.readAsDataURL(event.target.files[0]);
    }

   
  </script>

  <style>
    /* .gradient-custom {
/* fallback for old browsers */
/* background: #f093fb; */

/* Chrome 10-25, Safari 5.1-6 */
/* background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1)); */

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
/* background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
} */ */

.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
.card{
  box-shadow: 0px 0px 2px;
}
  </style>

    
    <!-- Footer section --> 
    <section id="contact" class="footer_wrapper wrapper">
      <div class="container pb-3">
          <div class="row" >
              <div class="col-lg-3 col-md-6 mb-4" style="margin-top: 2%;">
                  <h5>Clinic Location</h5>
                  <p class="ps-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim erat ut
                      laoreet
                      pharetra....</p>
                  <div class="contact-info">
                      <ul class="list-unstyled p-0">
                          <li><a href="#"><i class="fa fa-home me-3"></i> No. 96, South City, London</a></li>
                          <li><a href="#"><i class="fa fa-phone me-3"></i>+1 222 3333</a></li>
                          <li><a href="#"><i class="fa fa-envelope me-3"></i>info@example.com</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 mb-4" style="margin-top: 2%;">
                  <h5>More Links</h5>
                  <ul class="link-widget p-0">
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Our Office</a></li>
                      <li><a href="#">Delivery</a></li>
                      <li><a href="#">Our Store</a></li>
                      <li><a href="#">Guarantee</a></li>
                      <li><a href="#">Buy Gift Card</a></li>
                      <li><a href="#">Return Policy</a></li>
                  </ul>
              </div>
              <div class="col-lg-3 col-md-6 mb-4" style="margin-top: 2%;">
                  <h5>More Links</h5>
                  <ul class="link-widget p-0">
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Our Office</a></li>
                      <li><a href="#">Delivery</a></li>
                      <li><a href="#">Our Store</a></li>
                      <li><a href="#">Guarantee</a></li>
                      <li><a href="#">Buy Gift Card</a></li>
                      <li><a href="#">Return Policy</a></li>
                  </ul>
              </div>

              <div class="col-lg-3 col-md-6 mb-4" style="margin-top: 2%;">
                  <h5>Newsletter</h5>
                  <div class="form-group mb-4">
                      <input type="email" class="form-control bg-transparent text-white" placeholder="Enter Your Email Here" >
                      <button type="submit" class="main-btn rounded-2 mt-3 border-white text-white">Subscribe</button>
                  </div>
                  <h5>Stay Connected</h5>
                  <ul class="social-network d-flex align-items-center p-0 ">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                      <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                  </ul>
              </div>
          </div>
      </div>
      <div class="container-fluid copyright-section">
          <p class="p-0">Copyright <a href="#">© CODE4EDUCATION.</a> All Rights Reserved</p>
      </div>
  </section> 
<style>
  .footer_wrapper{
  background-color:#1165AE;
  padding-bottom:0;
}
.footer_wrapper h5{
  color:white;
}
.footer_wrapper .contact-info ul a {
  padding:0;
}
.footer_wrapper ul li{
  margin-bottom:.5rem;
  list-style: none;
  font-size: .875rem;

}
.footer_wrapper ul li a{
  color:white;
}
.footer_wrapper .link-widget li a,
.footer_wrapper p{
  color:white;
  font-size: .875rem;
  padding-left:1.5rem;
  position:relative;
  -webkit-transition:all 0.3s ease-out 0s;
  transition:all 0.3s ease-out 0s;
}
.footer_wrapper .link-widget li a::before{
  content:'\f105';
  font-family: "Font Awesome 5 Free";
  font-weight: 600;
  position:absolute;
  left:0.3rem;
  top:50%;
  -webkit-transform:translateY(-50%);
  transform:translateY(-50%);
}
.footer_wrapper .link-widget li a:hover{
  margin-left:.625rem;
  color:#082945;
}
.footer_wrapper .social-network a{
  width:2.1875rem;
  height:2.1875rem;
  margin:.5rem;
  line-height: 2rem;
  font-size: .875rem;
  display:inline-block;
  border:.125rem solid white;
  color:white;
  text-align: center;
  border-radius: 100%;
  -webkit-transition:all 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
  transition:all 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
}
.footer_wrapper .social-network a:hover{
  background-color:red;
  border-color:white;
  color:white;
  transform:translateY(-0.1875rem);
}
.footer_wrapper ::placeholder{
 color: white;
}
.footer_wrapper .form-control{
  color:white;
}
.footer_wrapper .form-control:focus{
  outline:none;
  box-shadow: none;
  border-color:white;
}
.footer_wrapper .copyright-section{
  background-color:#1165AE;
  padding:2rem 0 1rem;
  text-align: center;
}
.footer_wrapper .copyright-section a{
  color:white;
  font-weight: 600;
}

@media (max-width: 1199.5px) {

  /* custom css */ 
  .card{
      padding:2.5rem 1.875rem;
  } 

  /* header */ 
  .header_wrapper .navbar-nav .nav-link{
      font-size: 1rem;
  }

  /* top banner */ 
  .banner_wrapper .animate-img .aimg1{
      left:-3.125rem;
  }

  /* about */ 
  .about_wrapper .card{
      width:100%;
  } 
  .about_wrapper .about-animate{
      left:.9375rem;
  }

  /* service */ 
  .services_wrapper .card{
      padding:1.875rem 1.25rem;
  }

}

@media (max-width:991px) {

  /* custom css */ 
  .wrapper{
      padding:3.125rem 0;
  }
  .main-btn{
      font-size: .875rem;
  }
  h1{
      font-size: 2.8125rem;
      margin-bottom:.625rem;
  }
  h2{
      font-size: 1.875rem; 
  }
  h3{
      font-size: 1.5625rem; 
  }
  h4{
      font-size: 1.25rem; 
  }
  h5{
      font-size: 1.125rem; 
  }
  p{
      font-size: .875rem;
      line-height: 1.35rem;
  }
  .card{
      padding:1.875rem 1rem;
  }

  /* 2 Navbar */ 
  .header-scrolled{
      height:auto;
  }
  .header_wrapper .menu-navbar-nav{
      text-align: center;
  }
  .header_wrapper .nav-item .nav-link{
      margin-top:.9375rem;
  }

  /* banner */ 
  .banner_wrapper p{
      max-width: 100%;
  }


  /* about */ 
  .about_wrapper .about-clinic:nth-child(1),
  .about_wrapper .about-clinic:nth-child(2){
      margin-bottom:1.5625rem;
  }
  .about_wrapper .about-clinic:nth-child(2),
  .about_wrapper .about-clinic:nth-child(4){
      padding-left:2.375rem;
  }

  /* services */ 
  .services_wrapper .card{
      padding:1.875rem .875rem;
  }

  /* blog */ 
  .blog_wrapper .card .blog-content{
      padding:1.875rem .625rem;
  }

}

@media (max-width: 767px) {

  /* custom css */ 
  .main-btn{
      font-size: .875rem;
  }
  h1{
      font-size: 2.5rem;
      margin-bottom:2.5rem;
  } 
  h5{
      font-size: 1.25rem; 
  } 

  /* service */ 
  .services_wrapper .card{
      text-align: center;
  }

  /* blog */ 
  .blog_wrapper .card .blog-content{
      margin:0;
  }

  /* footer */ 
  .footer_wrapper{ 
      padding-bottom:0;
  }
  .footer_wrapper>div{
      padding:0 1.875rem;
  }
}

@media (max-width: 360px) {

  /* Services */ 
  .services_wrapper .icon-box{
      margin-bottom:.9375rem;
  }

  /* about */   
  .about_wrapper .about-animate{
      width:6.875rem;
  }
  .about_wrapper .card{
      padding:1.25rem .3125rem;
  }
  .about_wrapper .about-clinic:nth-child(2),
  .about_wrapper .about-clinic:nth-child(4){
      padding-left:.625rem;
  }

}
    
</style>
  <!-- Footer section exit -->

    <!----SCRIPT BOOTSTRAP 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>  

</body>
</html>

