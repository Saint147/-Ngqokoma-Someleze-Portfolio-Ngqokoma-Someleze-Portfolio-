
<?php
include_once('connection.php');
error_reporting(0);
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['message'];
$query=mysqli_query($con,"insert into `tblcontactus`(fullname,email,mobileno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='index.php'</script>";

} ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Portfolio Management System</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
     <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

    <body>
     <!-- Modal GRADE 12-->
<div class="modal fade" id="matric" tabindex="-1" role="dialog" aria-labelledby="matric" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="matric">Grade 12</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Isixhosa (HL)</p>
        <p>English (FAL)</p>
        <p>Nathematical Literacy</p>
        <p>Life orientation</p>  
        <p>Geography</p>
        <p>Tourism</p>
        <p>History</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <!-- End of Modal GRADE 12-->
<!-- Modal Diploma -->
<div class="modal fade" id="diploma" tabindex="-1" role="dialog" aria-labelledby="diploma" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="diploma">Ndip Software DEvelopment (NQF-L6)</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h5>First Year</h5>
      <p>Systems Software I:IT Essentials (WCI1601)</p>
      <p>Development Software I (SDS1000)</p>
      <p>Information Techonology Skills I (SIS1000)</p>
      <p>Systems Software I: Networks (WCI16100)</p>
      <p>Information System 1A: IS (WIH1370)</p>
      <p>Information Systems 1B: End user Computing(WIH1380)</p>
      <h5>Second Year</h5>
      <p>Internet Programming II (ITP2000)</p>
      <p>Development Software II (ONT2000)</p>
      <p>Techinical Programming I (PRT1000)</p>
      <p>Information Systems II</p>
      <h5>Third Year</span></h5>
      <p>Development Software III:C# (ONT3601)</p>
      <p>Information Systems III: System Analysis & Design(WIH3601)</p>
      <p>Information Systems III: Project Management (WIH3661)</p>
      <p>Information Systems III: Advanced Design (WIH3602)</p>
      <p>Development Software III: Project (ONT3660)</p>
      <p>Technical Programming II (PRT2110)</p>
      <p>Graphical User Interfacce Design I (SGU100)</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
<!--End of Modal Diploma -->
<!-- Modal Advanced-->
<div class="modal fade" id="advanced" tabindex="-1" role="dialog" aria-labelledby="advanced" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="advanced">Advanced Diploma IT (btech-NQF L7)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p>IT Management (ITM401)</p>
        <p>Development Software IV (ONT401)</p>
        <p>IT Project Management (OPM401)</p>
       <p>Information Security (ISC402)</p> 
       <p>Application Security (Ethical Hacking)</p>
        <p>Advanced Development Software V (ONT412)</p>
        <p>User Interfaces (UIF402)</p>
        <p>Applied Project (ONP400)</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Advanced-->
    <!-- ################# Header Starts Here#######################--->
    
      <header id="menu-jk">
    
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3  col-sm-12" style="color:#000;font-weight:bold; font-size:42px; margin-top: 1% !important;">
                    <a href="index.php"><img src="assets/image/Capture.png" size="45" /></a>
                       <a data-toggle="collapse" data-target="#menu" href="#menu" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-10 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#services">Certificate</a></li>
                            <li><a href="#about_us">About Me</a></li>
                            <li><a href="#gallery">Project Gallery</a></li>
                            <li><a href="#contact_us">Contact Me</a></li>
                           
                        </ul>
                    </div>
                    
                </div>

            </div>
        </div>
    </header>
    
     <!-- ################# Slider Starts Here#######################--->

    <div class="slider-detail">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>

                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/image/slider/saint.JPEG" alt="Third slide">
                      <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown">Welcome to Someleze Ngqokoma Portfolio Management System</h5>
                    </div>
              
                </div>
                
            </div>
             
        </div>


    </div>
    
  <!--  ************************* Education ************************** -->
    
    
     <section id="logins" class="our-blog container-fluid">
        <div class="container">
        <div class="inner-title">

                  <h2>Qualication/Education</h2>   
            </div>
            <div class="col-sm-12 blog-cont">
                <div class="row no-margin">
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/image/matric.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Matric(Grade12)</h6>
                                <a  data-toggle="modal" data-target="#matric">
                                    <button  class="btn-info btn-sm"  data-toggle="modal" data-target="#matric">Info</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/image/Ndip.webp" alt="">

                            <div class="blog-single-det">
                                <h6>National Diploma IT Dev</h6>
                                <a  data-toggle="modal" data-target="#diploma">
                                    <button  class="btn-info btn-sm"  data-toggle="modal" data-target="#diploma">Info</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/image/AdvDip.webp" alt="">

                            <div class="blog-single-det">
                                <h6>Advanced Diploma IT Dev</h6>
                    
                                <a  data-toggle="modal" data-target="#advanced">
                                    <button  class="btn-info btn-sm"  data-toggle="modal" data-target="#advanced">Info</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </section>  

  

    <!-- ################# Certificates#######################--->


    <section id="services" class="key-features department">
        <div class="container">
            <div class="inner-title">

                <h2>Certificate</h2>
                <p>cerificates and online course/training</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fa fa-line-chart" aria-hidden="true"></i>
                        <h5>Google Data Analytics</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                       <i class="fa fa-database" aria-hidden="true"></i>
                        <h5>Microsoft Azure Data Fundementals</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                       <i class="fa fa-file-excel-o" aria-hidden="true"></i>

                        <h5>ALX Virtual Assistant </h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fa fa-certificate" aria-hidden="true"></i>
                        <h5>Vue Js(Complete guide incl Composition Api)</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                      <i class="fa fa-certificate" aria-hidden="true"></i>
                        <h5>Career Essentials in Data Analysis</h5>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fa fa-certificate" aria-hidden="true"></i>
                        <h5>Introduction to cloud computing</h5>

                    </div>
                </div>
            </div>

        </div>

    </section>
    
    
    
    <!--  ************************* About me ************************** -->
        
    <section id="about_us" class="about-us">
        <div class="row no-margin">
            <div class="col-sm-6 image-bg no-padding">
                
            </div>
            <div class="col-sm-6 abut-yoiu">
                <h3>About Ngqokoma Someleze</h3>
<?php
$sql=mysqli_query($con,"select description from tblpage where pagetype='aboutus'");
while ($row=mysqli_fetch_array($sql)) {
?>

    <p><?php  echo $row['description'];?>.</p><?php } ?>
            </div>
        </div>
    </section>    
    
    
            <!--  *************************Project Gallery Start ************************** -->
        <div id="gallery" class="gallery">    
           <div class="container">
              <div class="inner-title">

                <h2>My Projects Gallery</h2>
                <p>Projects Pictures</p>
            </div>
              <div class="row">
                

        <div class="gallery-filter d-none d-sm-block">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">Health Management System</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">E-Learning-Management-System</button>
            <button class="btn btn-default filter-button" data-filter="spray">Ticketing Managemnt System</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Resident Management System</button>
        </div>
        <br/>



            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/image/gallery/gallery_01.png" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="assets/image/gallery/gallery_02.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/image/gallery/gallery_03.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="assets/image/gallery/gallery_04.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets/image/gallery/gallery_05.jpg" class="img-responsive">
            </div>

          

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets/image/gallery/gallery_06.png" class="img-responsive">
            </div>

        </div>
    </div>
       
       
       </div>
        <!-- ########Project Gallery End ####### -->
    
    
     <!--  ************************* Contact ************************** -->
    
    <section id="contact_us" class="contact-us-single">
        <div class="row no-margin">

            <div  class="col-sm-12 cop-ck">
                <form method="post">
                <h2 >Contact Form</h2>
                    <div class="row cf-ro">
                        <div  class="col-sm-3"><label>Enter Name :</label></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="fullname" class="form-control input-sm" required ></div>
                    </div>
                    <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Email Address :</label></div>
                        <div class="col-sm-8"><input type="text" name="email" placeholder="Enter Email Address" class="form-control input-sm"  required></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Mobile Number:</label></div>
                        <div class="col-sm-8"><input type="text" name="mobileno" placeholder="Enter Mobile Number" class="form-control input-sm" required ></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Enter  Message:</label></div>
                        <div class="col-sm-8">
                          <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm" name="message" required></textarea>
                        </div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                         <button class="btn btn-success btn-sm" type="submit" name="submit">Send Message</button>
                        </div>
                </div>
            </form>
            </div>
     
        </div>
    </section>
    
    
    
    
    
    <!-- ################# Footer #######################--->


    <footer class="footer">
        <div class="container">
            <div class="row">
       
                <div class="col-md-6 col-sm-12">
                    <h2>Quick Access</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="#about">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#services">Services</a><i class="fa fa-angle-right"></i></li>
                
                        <li><a ui-sref="gallery" href="#gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">

<?php
$sql=mysqli_query($con,"select * from tblpage where pagetype='contactus' ");
while ($row=mysqli_fetch_array($sql)) {
?>


                        <?php  echo $row['description'];?> <br>
                        Phone: <?php  echo $row['mobileno'];?> <br>
                        Email: <a href="mailto:<?php  echo $row['email'];?>" class=""><?php  echo $row['email'];?></a><br>
                        Opration Time: <?php  echo $row['tradinghours'];?>
                    </address>

        <?php } ?>





                </div>
            </div>
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
            Ngqokoma Someleze Portfolio Management System
                
     
            </div>

        </div>
    
    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>

<script src="assets/js/script.js"></script>
<script>		
$('#matric').on('shown.bs.modal', function () {
  $('#Input').trigger('focus')
})
$('#diploma').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
$('#advanced').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
</html>