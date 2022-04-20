
<?php
 require_once '../php/includes/config.php';
 if (isset($_POST['submit'])){

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $country = $_POST['country'];
  $email = $_POST['eaddress'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  try {
    //code...
    $sql = 'INSERT INTO contact(firstname,lastname,country,eaddress,phone,subject,Date,Time ) VALUES(?,?,?,?,?,?,Now(),Now() )';
    $sth = $DBH->prepare($sql);
    $sth->execute(array($firstname,$lastname,$country,$email,$phone,$subject ));
    $_SESSION['success'] = "message sent successfully.";
  } catch (PDOException $e) {
    //throw $th;
    echo $e->getMessage();
  }
  echo "<script>alert('Message sent successfully. We value Your Feedback')</script>";
 }
 
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Smart Accommodation System | Contact/About</title>
    <!-- Tees Icon -->
    <link rel="icon" href="../img/icons/logo.webp"/>
    <!-- Badge Icons from Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
    />
    <!-- Fonts from Google-->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../css/cart.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/extrastyles.css" />
    <link rel="stylesheet" href="../php/Admin/css/admin.css" />
  </head>
  <body>
    <header>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
          <a
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </a>
          <div class="collapse navbar-collapse" id="navbarExample01">
            <a class="navbar-brand" href="#">
              <img src="../img/icons/logo.webp" height="70"alt="" loading="lazy" style="border-radius:50%;" />
            </a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              

              <li class="nav-item me-3 me-lg-0 dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-mdb-toggle="dropdown"
                  aria-expanded="false">

                <button
                  class="btn btn-outline-primary"
                  type="submit"
                  name="submit"
                  data-mdb-ripple-color="dark">Our Services
                </button>
                  <img src="../img/icons/services.png" alt="services">
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="../hostels.php"> <i class="fa fa-bed" aria-hidden="true"> Hostels </i> </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="../hostels.php"> <i class="fa fa-map-marker" aria-hidden="true"> Locations </i> </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="booking.php"> <i class="fa fa-file" aria-hidden="true"> Bookings </i> </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="gallery.php"><i class="fa fa-camera" aria-hidden="true"> Gallery </i> </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="../hostels.php"><i class="fa fa-home" aria-hidden="true"> Amenities </i> </a>
                  </li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> <button class="order" > Predict Now </button> </a>
                  </li>
                </ul>
              </li>
              
            </ul>
            <ul class="navbar-nav d-flex flex-row">
              
              <!-- Icons -->
              
              <!-- Icon dropdown -->
              <li class="nav-item me-3 me-lg-0 dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-mdb-toggle="dropdown"
                  aria-expanded="false">
                  <i class="fas fa-user"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="../php/Users/signup.php">Sign Up</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="../php/Users/login.php">Log in</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="../php/Admin/login.php"><i class="fa fa-lock" aria-hidden="true"></i></a>
                  </li>
                  <li><hr class="dropdown-divider" /></li>
                  
                </ul>

              

              </li>
            </ul>

            <ul class="navbar-nav me-3 mb-2 mb-lg-0">
              <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="../home-loggedin.php">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="contact.php">Contact</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="contact.php">About</a>
              </li>
            </ul>
              
          </div>
        </div>
      </nav>

      

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <div class="modal-header">
        <legend class="modal-title btn-primary" id="staticBackdropLabel" style="border-radius:20px;">Looking For a Hostel ?</legend>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    
    <form action="loader.php" method="POST" enctype="multipart/form-data"style="box-shadow:none;" >
      <div class="modal-body">
      <fieldset>
        <div class="item">
          <label for="information"> Additional Information <span>*</span></label>
          <textarea name="search" id="" cols="30" rows="10" placeholder="Type Message"></textarea>
        </div>
        <div class="columns">
          <div class="item">
            <select name="search" style="padding:8px;">
             <option value="" disabled selected>Prefered Price Range</option>
             <option value="cheap" >5000 - 6000</option>
             <option value="moderate">6001 - 7500</option>
             <option value="expensive">7501 - 9000</option>
            </select>
          </div>
          <div class="item">
            <select name="search" style="padding:8px;">
             <option value="" disabled selected>Type Of Hostel</option>
             <option value="1-Bedroom" >1-Bedroom</option>
             <option value="Bedsitters">Bedsitters</option>
             <option value="single rooms">single rooms</option>
            </select>
          </div>
          <div class="item">
            <select name="search" style="padding:8px;">
             <option value="" disabled selected>Security Level</option>
             <option value="High" >High</option>
             <option value="Medium">Medium</option>
             <option value="Standard">Standard</option>
            </select>
          </div>
          <div class="item">
            <select name="search" style="padding:8px;">
             <option value="" disabled selected>Distance From the School</option>
             <option value="Very Far" >Very Far</option>
             <option value="Far">Far</option>
             <option value="Near">Near</option>
             <option value="Very Near">Very Near</option>
            </select>
          </div>        
        <div>         
      </fieldset>

      <h6><span>*</span>Additional Amenities</h6>
      <div class="columns">
          <div class="item" style="display:flex;">
            <input id="information" type="checkbox" name="search" value="water" />
            <label for="booktitle"> Full time Water</label>
           </div>

          <div class="item" style="display:flex;">
            <input id="information" type="checkbox" name="search" value="garbage" />
            <label for="booktitle"> Garbage Collection</label>
          </div>

          <div class="item" style="display:flex;">
            <input id="information" type="checkbox" name="search" value="wifi"/>
            <label for="booktitle">High speed WI-FI </label>
          </div>

          <div class="item" style="display:flex;">
            <input id="information" type="checkbox" name="search" value="dining" />
            <label for="booktitle">Dining Services </label>
          </div>
          
          <div class="item" style="display:flex;">
            <input id="information" type="checkbox" name="search" value="laundry"/>
            <label for="booktitle">Laundry Services</label>
          </div>

          <div class="item" style="display:flex;">
            <input id="information" type="checkbox" name="search" value="entertainment" />
            <label for="booktitle">Entertainment Spaces </label>
          </div>
      </div>

      </div>
          
          <div class="item" style="display:flex;">
            <input id="information" type="checkbox" required/>
            <label for="booktitle">I agree with Terms and conditions<span>*</span></label>
            <style>
              input[type=checkbox]{ 
              display: inline;
              margin-top:5px;
              width:8%;
            }
            </style>
         </div>
         <a href="policies.php">Terms and conditions</a>  
      <div class="modal-footer">
        <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" name="submit" class="btn btn-primary">Predict Now !</button>
      </div>
    </form>

  </div>
  </div>
 </div>
</div>
<!-- end Modal -->

        <style>
        /*funcbtn*/
        .funcbtn{
          height:15%;
          text-align:center;
          opacity: 1;
          background: blue;
          color:#fff;
          border-radius:25px;
          padding:10px;
        }
        /*order btn*/
        .order {
             height:15%;
             text-align:center;
             opacity: 1;
             background: Red;
             color:#fff;
             border-radius:25px;
             -webkit-animation: bounce .3s infinite alternate;
             -moz-animation: bounce .3s infinite alternate;
             animation: bounce .3s infinite alternate;
            }
           @-webkit-keyframes bounce {
            to { -webkit-transform: scale(1.2); }
          }
          @-moz-keyframes bounce {
           to { -moz-transform: scale(1.2); }
          }
          @keyframes bounce {
           to { transform: scale(1.2); }
          }
        </style>
  
    </header>

    <main class="mt-5" style="background-color:lavender;">
    
    <!-- About us section -->
    <div class="about-section">
      <h1>About Us </h1>
      <p>Welcome to the Smart Student Accommodation system where we help you find you the
        best fit in your accomodation needs. Our system uses user information 
        to predict the hostel that would best suit you according to your preferences.</p>
    </div>

<h2 style="text-align:center; font-family: 'Courier New', Courier, monospace;font-weight:bold;">Our Team</h2>
<div class="row">
  <div class="column" style="margin-left:auto;margin-right:auto;display:block;">
    <div class="card">
      <img src="../img/sharaz.png" class="rounded" alt="sharaz" style="width:80%;margin-left:auto;margin-right:auto;display:block;margin-top:20px;">
      <div class="container"><br>
        <h2>Pelu Sharaz</h2>
        <p class="title"> Developer CEO & Founder</p>
        <p>We are committed in ensuring you get the best of services from smart SAS.</p>
        <p><a href="mailto:pelunguta@gmail.com;">pelunguta@gmail.com</a></p>
        <p><a href="tel:0791386752;"><button class="button" >Contact</button></a></p>
      </div>
    </div>
  </div>

  <div class="column"style="margin-left:auto;margin-right:auto;display:block;">
    <div class="card">
      <img src="../img/sharaz.png" class="rounded" alt="mercy" style="width:80%;margin-left:auto;margin-right:auto;display:block;margin-top:20px;">
      <div class="container"><br>
        <h2>Mercy Mwangi</h2>
        <p class="title"> Developer CEO & Founder</p>
        <p>We are committed in ensuring you get the best of services from smart SAS.</p>
        <p><a href="mailto:pelunguta@gmail.com;">pelunguta@gmail.com</a></p>
        <p><a href="tel:0791386752;"><button class="button" >Contact</button></a></p>
      </div>
    </div>
  </div>
</div>
     <!-- contact form -->
 <div class="container-contact">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column-contact img-fluid">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0101911832107!2d36.96069971445821!3d-1.1532110358200345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1715590d5607%3A0x8067a87f7aead19!2sZetech%20University!5e0!3m2!1sen!2ske!4v1649081938403!5m2!1sen!2ske" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="column">
      <form action="contact.php" method="POST">
        <div class="columns">
            <div class="item">
              <label for="fname">First Name</label>
               <input type="text" id="fname" name="firstname" placeholder="Your name..">
            </div>
            <div class="item">
              <label for="lname">Last Name</label>
               <input type="text" id="lname" name="lastname" placeholder="Your last name..">
            </div>
            <div class="item">
              <label for="country">Country</label>
              <input type="text" name="country" placeholder="Country">
            </div>
            <div class="item">
              <label for="email">Email</label>
              <input type="text" name="eaddress" placeholder="eg test@gmail.com" required>
            </div>
            <div class="item">
              <label for="phone">Phone</label>
              <input type="text" name="phone" placeholder="Enter phone number" required>
            </div>
        </div>

        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" name="submit">
      </form>
    </div>
  </div>
</div>


    <style>
        /* contact styling */
        * {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: rgb(0, 47, 255);
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: red;
}

/* Style the container/contact section */
.container-contact{
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column-contact{
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
    /* about styling */
    body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: rgb(0, 47, 255);
  color: white;
  width:100%;
  margin-top:-50px;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
    </style>

     <!-- end -->
    
    

    </main>

    <!--Footer-->
    <footer class="text-center text-white" style="background-color: #f1f1f1">
      <!-- Grid container -->
      <div class="container pt-4">
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Facebook -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

          <!-- Twitter -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>

          <!-- Google -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>

          <!-- Instagram -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>

          <!-- Linkedin -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>
          <!-- Github -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>
          <!-- whats app -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="https://chat.whatsapp.com/C7eN9Xty4an65uNXjLPgH7"
            target="_blank" role="button"
            data-mdb-ripple-color="dark"><i class="fab fa-whatsapp"></i></a>
            
        </section>
        <!-- Section: Social media -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div
        class="text-center text-dark p-3"
        style="background-color: rgba(0, 0, 0, 0.2)"
      >
        <p> &copy; Copyright <?php $year=date("Y"); echo $year; ?>
        <a class="text-dark" href="">Smart SAS.</a></p>
      </div>
      <!-- Copyright -->
    </footer>
  </body>
  <!-- Scripts -->
  <script type="text/javascript" src="../js/script1.js"></script>
  <script type="text/javascript"></script>

  <!-- success message -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
