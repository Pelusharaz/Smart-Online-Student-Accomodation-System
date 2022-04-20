<?php
session_start();
if(!isset($_SESSION['email'])){
  $_SESSION['redirectURL'] = $_SERVER['REQUEST_URL'];
  header('location:../../index.php');
}
?>

<?php
require_once '../includes/config.php';
$sql="SELECT * FROM admin where email='" . $_SESSION["email"] . "'";
$stmt = $DBH->prepare($sql);
$stmt->execute();
$total = $stmt->rowCount();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Smart SAS | Admin Panel</title>
    <!-- Tees Icon -->
    <link rel="icon" href="../../img/icons/logo.webp" />
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
    <link rel ="stylesheet" type = "text/css" href ="css/admin.css">
    <link rel="stylesheet" href="../../css/styles.css" />
    <link rel="stylesheet" href="../../css/extrastyles.css" />
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
              <img src="../../img/icons/logo.webp" height="60"alt="" loading="lazy" style="border-radius:50%;" />
            </a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="admin.php">Welcome To The Admin Panel</a>
              </li>
              
            </ul>
            <ul class="navbar-nav d-flex flex-row">
            <?php
              while($row = $stmt->fetchObject()) {
            ?>
              <div class="d-flex input-group w-auto" style="margin-top:10px;">SESSION : <?php echo "{$row->username}"; ?>  </div>
            
              
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
                    <a class="dropdown-item" href="contactmessages.php">Messages</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="registeredusers.php">Registered Users</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="bookings.php">Bookings</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="admin.php">Manage Hostels</a>
                  </li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="../includes/logout.php">Log Out</a>
                  </li>
                  
                </ul>
              </li>
            </ul>
             
            <a href="../includes/logout.php">
              <button
                class="btn btn-outline-primary"
                type="button"
                data-mdb-ripple-color="dark">
                LOG OUT
              </button>
            </a>
            
          </div>
        </div>
      </nav>

      <!-- Background image -->
      <div
        class="p-5 text-center bg-image shadow-1-strong"
        style="background-image: url('../../img/bookings admin2.jpg'); height: 550px">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
              <h1 class="mb-3">Smart Student's Accomodation System</h1>
              <h4 class="mb-3">
                Bookings
              </h4>
              <a class="btn btn-outline-light btn-lg" href="#!" role="button">welcome <?php echo "{$row->username}"; ?></a>
              <?php
              }
            ?>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main class="mt-5">
    <!--contact messages-->
    <style>
      tr:nth-child(even){
           background-color:aqua;
           color: black;
          }
    </style>
    <div class="messages" style="marging-left:auto;margin-right:auto;display:block;text-align:center;">
      <h4>Smart SAS Bookings</h4>
    </div>
    <br>
    <div class="container" style="overflow:scroll; height:900px; max-width:1000px;">
     <table>
         <th>Bookings</th>
         <tr style="border-radius: 20px;">
             <th>Name</td>
             <th>Gender</td>
             <th>Address</td>
             <th>Zip</td>
             <th>City</td>
             <th>State</td>
             <th>Email</td>
             <th>Phone</td>
             <th>Hostel Booked</td>
             <th>Type</td>
             <th>Price Range</td>
             <th>No of prefered roomates</td>
             <th>No of prefered rooms</td>
             <th>Reporting Date</td>
             <th>Payment Mode</td>
             <th>Date</td>
             <th>Time</td>
             <th>Delete</td>
            <th>Reply</td>
        </tr>
        <?php
         require_once '../includes/config.php';
         $sql="SELECT * FROM bookings ";
         $stmt = $DBH->prepare($sql);
         $stmt->execute();
         $total = $stmt->rowCount();

        ?>
        <?php
              while($row = $stmt->fetchObject()) {
            ?>
        <tr>
            <td><?php echo "{$row->name}"; ?></td>
            <td><?php echo "{$row->gender}"; ?></td>
            <td><?php echo "{$row->address}"; ?></td>
            <td><?php echo "{$row->zip}"; ?></td>
            <td><?php echo "{$row->city}"; ?></td>
            <td><?php echo "{$row->state}"; ?></td>
            <td><?php echo "{$row->eaddress}"; ?></td>
            <td><?php echo "{$row->phone}"; ?></td>
            <td><?php echo "{$row->hostelname}"; ?></td>
            <td><?php echo "{$row->type}"; ?></td>
            <td><?php echo "{$row->pricerange}"; ?></td>
            <td><?php echo "{$row->numberofroomates}"; ?></td>
            <td><?php echo "{$row->numberofrooms}"; ?></td>
            <td><?php echo "{$row->reportingdate}"; ?></td>
            <td><?php echo "{$row->payment}"; ?></td>
            <td><?php echo "{$row->Date}"; ?></td>
            <td><?php echo "{$row->Time}"; ?></td>
            <td>
                <form action="deleteproducts.php" method="post" style="box-shadow:none;background-color:transparent;">
                    <input type="hidden" name="deletebooking_id" value="<?php echo "{$row->id}"; ?>">
                    <button type="submit" class="logoutbtn" name="deletebooking_btn">DELETE</button>
                </form>
            </td>
            <td><a href="mailto:<?php echo "{$row->eaddress}"; ?>?&subject=Subject : Smart SAS Email Response&body=Dear <?php echo "{$row->name}"; ?>, " target="_blank"><button type="submit" class="logoutbtn">REPLY</button></a></td>
        </tr>
        <?php
         }
        ?>  
     </table>
     </div>
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
            data-mdb-ripple-color="dark"
            ><i class="fab fa-facebook-f"></i></a>
          
          <!-- YouTube -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"><i class="fab fa-youtube"></i>
          </a>
          <!-- whatsapp -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"><i class="fab fa-whatsapp"></i>
          </a>
        </section>
        
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
  <script type="text/javascript" src="../../js/script1.js"></script>
  <script type="text/javascript"></script>
  
</html>
