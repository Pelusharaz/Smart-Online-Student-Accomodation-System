
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Smart Accommodation System | Our Hostels</title>
    <!-- Tees Icon -->
    <link rel="icon" href="img/icons/logo.webp"/>
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
    <link href="css/cart.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/extrastyles.css" />
    <link rel="stylesheet" href="php/Admin/css/admin.css" />
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
              <img src="img/icons/logo.webp" height="70"alt="" loading="lazy" style="border-radius:50%;" />
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
                  <img src="img/icons/services.png" alt="services">
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="hostels.php"> <i class="fa fa-bed" aria-hidden="true"> Hostels </i> </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#"> <i class="fa fa-map-marker" aria-hidden="true"> Locations </i> </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="services/booking.php"> <i class="fa fa-file" aria-hidden="true"> Bookings </i> </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="services/gallery.php"><i class="fa fa-camera" aria-hidden="true"> Gallery </i> </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#"><i class="fa fa-home" aria-hidden="true"> Amenities </i> </a>
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
                    <a class="dropdown-item" href="php/Users/signup.php">Sign Up</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="php/Users/login.php">Log in</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="php/Admin/login.php"><i class="fa fa-lock" aria-hidden="true"></i></a>
                  </li>
                  <li><hr class="dropdown-divider" /></li>
                  
                </ul>

              

              </li>
            </ul>

            <ul class="navbar-nav me-3 mb-2 mb-lg-0">
              <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="home-loggedin.php">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="services/contact.php">Contact</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="services/contact.php">About</a>
              </li>
            </ul>
              
          </div>
        </div>
      </nav>

      <!-- Background images -->
     
     
      <div class="p-5 text-center bg-image shadow-1-strong"
        style="background-image: url('img/home6.jpg'); height: 550px; margin-bottom:-50px;">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
              <h1 class="mb-3"> Welcome To Our Hostels </h1>
              <h5 class="mb-3">
               Are you a student & searching for a Place to stay ? You're in the right place
              </h4>
              <a class="btn btn-outline-light btn-lg order" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Predict Now!</a>

              <form class="d-flex input-group w-auto" action=" " method="POST" style="box-shadow:none;background-color:transparent;">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search for hostels"
                  aria-label="Search"
                  style="background-color:transparent;"
                  name="search"/>
                <button
                  class="btn btn-outline-primary search-btn"
                  type="submit"
                  name="submit"
                  style="margin-bottom:10px;hover{background:blue;}"
                  data-mdb-ripple-color="dark">Go
                </button>
                <style>
                  .search-btn:hover{
                    background:red;
                  }
                </style>
              </form>
            </div>
          </div>
        </div>
      </div>
 

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <div class="modal-header">
        <legend class="modal-title btn-primary" id="staticBackdropLabel" style="border-radius:20px;">Looking For a Hostel ?</legend>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    
    <form action=" " method="POST" enctype="multipart/form-data"style="box-shadow:none;" >
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
        .active {
           background-color: white;
        }
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

          tr:nth-child(even){
           background-color:aqua;
           color: black;
          }
        </style>

    </header>

    <main class="mt-5" style="background-color:lavender;">
    <div class="smart SAS" style="margin-left:auto;margin-right:auto;display:block;text-align:center;padding-top:20px;">
      <form action="hostels.php" method="POST" style="box-shadow:none;background:transparent;" >
        <input type="text" value="allhostels" name="search" style="display:none;">
        <button type=submit name="submit" class="funcbtn">
          <!-- <h3 style="font-family: 'Courier New', Courier, monospace;font-weight:bold;">Our Hostels</h3> -->
          View All Hostels
        </button>
      </form>
    </div>

    <?php
         require_once 'php/includes/config.php';
         if (isset($_POST['submit'])){

         $search = $_POST['search'];

         
        //code...
        $sql="SELECT * FROM hostels where (name LIKE '%" . $_POST["search"] . "%') OR (price LIKE '%" . $_POST["search"] . "%') OR (pricerange LIKE '%" . $_POST["search"] . "%')OR (typeofhostel LIKE '%" . $_POST["search"] . "%') OR (security LIKE '%" . $_POST["search"] . "%') OR (distancefromschool LIKE '%" . $_POST["search"] . "%') OR (Amenities LIKE '%" . $_POST["search"] . "%') OR (allhostels LIKE '%" . $_POST["search"] . "%') OR (information LIKE '%" . $_POST["search"] . "%') OR (location LIKE '%" . $_POST["search"] . "%')";
        $stmt = $DBH->prepare($sql);
        $stmt->execute();
        $total = $stmt->rowCount();
        
      }
      else{
        $sql="SELECT * FROM hostels ";
        $stmt = $DBH->prepare($sql);
        $stmt->execute();
        $total = $stmt->rowCount();
      }
      
    ?>
    <!-- Hostels -->
    <table>
      <tr>
        <td><h3 style="font-family: 'Courier New', Courier, monospace;font-weight:bold;">Hostels</h3></td>
        <td><h3 style="font-family: 'Courier New', Courier, monospace;font-weight:bold;">Hostel Information</h3></td>
      </tr>
        <?php
          $t = 0;
          while($row = $stmt->fetchObject()) {
            $t++;
                if($t == 1)
                {
        ?>

      <tr>
        <td style="width:50%;">
          <img src="<?php echo "php/Admin/hostels/". "{$row->hostelimage}";?>" class="w-100 shadow-1-strong rounded mb-4"  alt="hostels" />
        </td>
        <td>
          <h4 style="font-weight:bolder;"><?php echo "{$row->name}"; ?></h4>
          <p><?php echo "{$row->information}"; ?></p>
          <h6 >Price : <?php echo "{$row->price}"; ?> ksh/month</h6>  
          <h6 >Amenities : <?php echo "{$row->Amenities}"; ?></h6>
          <h6 >Security : <?php echo "{$row->security}"; ?></h6>
          <h6 >Hostel Type : <?php echo "{$row->typeofhostel}"; ?> </h6>
          <span class="fas fa-star"></span>
          <span class="fas fa-star"></span>
          <span class="fas fa-star"></span>
          <span class="fas fa-star"></span>
          <span class="fas fa-star"></span><br><br>
          <p><i class="fas fa-map-marker-alt"></i> Location </p>
          <div class="img-fluid">
            <iframe src="<?php echo "{$row->location}";?>" width="auto" height="230" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <br>
          <a href="services/booking.php"><button class="btn btn-primary funcbtn">Book Now !</button></a>
        </td>
      </tr>
        <?php
            }else if($t == 3){
              ?>
      <tr>
        <td style="width:50%;">
          <img src="<?php echo "php/Admin/hostels/". "{$row->hostelimage}";?>" class="w-100 shadow-1-strong rounded mb-4"  alt="hostels" />
        </td>
        <td >
          <h4 style="font-weight:bolder;"><?php echo "{$row->name}"; ?></h4>
          <p><?php echo "{$row->information}"; ?></p>
          <h6 >Price : <?php echo "{$row->price}"; ?> ksh/month</h6>  
          <h6 >Amenities : <?php echo "{$row->Amenities}"; ?></h6>
          <h6 >Security : <?php echo "{$row->security}"; ?></h6>
          <h6 >Hostel Type : <?php echo "{$row->typeofhostel}"; ?> </h6>
          <span class="fas fa-star"></span>
          <span class="fas fa-star"></span>
          <span class="fas fa-star"></span>
          <span class="fas fa-star"></span>
          <span class="fas fa-star"></span><br><br>
          <p><i class="fas fa-map-marker-alt"></i> Location </p>
          <div class="img-fluid">
            <iframe src="<?php echo "{$row->location}";?>" width="auto" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <br>
          <a href="services/booking.php"><button class="btn btn-primary funcbtn">Book Now !</button></a>
        </td>
      </tr>
      <?php
          $t = 0;
        }else{
        ?>
        <tr>
        <td style="width:50%;">
          <img src="<?php echo "php/Admin/hostels/". "{$row->hostelimage}";?>" class="w-100 shadow-1-strong rounded mb-4"  alt="hostels" />
        </td>
        <td >
          <h4 style="font-weight:bolder;"><?php echo "{$row->name}"; ?></h4>
          <p><?php echo "{$row->information}"; ?></p>
          <h6 >Price : <?php echo "{$row->price}"; ?> ksh/month</h6>  
          <h6 >Amenities : <?php echo "{$row->Amenities}"; ?></h6>
          <h6 >Security : <?php echo "{$row->security}"; ?></h6>
          <h6 >Hostel Type : <?php echo "{$row->typeofhostel}"; ?> </h6>
          <span class="fas fa-star"></span>
          <span class="fas fa-star"></span>
          <span class="fas fa-star"></span>
          <span class="fas fa-star"></span>
          <span class="fas fa-star"></span><br><br>
          <p><i class="fas fa-map-marker-alt"></i> Location </p>
          <div class="img-fluid">
            <iframe src="<?php echo "{$row->location}";?>" width="auto" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <br>
          <a href="services/booking.php"><button class="btn btn-primary funcbtn">Book Now !</button></a>
        </td>

        <?php
             }
            }
          if($t > 3){
            ?>
              </tr>
            <?php
            }
          ?>

    </table>

    <!-- end hostels -->
    
    </main>

    <!--Footer-->
    <footer class="text-center text-white" style="background-color: lavender;">
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
  <script type="text/javascript" src="js/script1.js"></script>
  <script type="text/javascript"></script>

  <!-- success message -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
