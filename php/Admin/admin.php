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

<!--Adding Hostels-->
<?php
 require_once '../includes/config.php';
 if (isset($_POST['hostel'])){
  
  $name = $_POST['name'];
  $price = $_POST['price'];
  $pricerange = $_POST['pricerange'];
  $typeofhostel = $_POST['typeofhostel'];
  $security = $_POST['security'];
  $distancefromschool = $_POST['distancefromschool'];
  $hostel = $_POST['all'];
  $Amenities = $_POST['Amenities'];
  $information = $_POST['information'];
  $location = $_POST['location'];
  $hostelimage = $_FILES['hostelimage']['name'];
  
  
   // image file directory
   $target = "hostels/".basename($hostelimage);
  
    try {
        //code...
        $sql = 'INSERT INTO hostels(name,price,pricerange,typeofhostel,security,distancefromschool,allhostels,Amenities,information,location,hostelimage,Date,Time ) VALUES(?,?,?,?,?,?,?,?,?,?,?,Now(),Now() ) ';
        $sth = $DBH->prepare($sql);
        $sth->execute(array($name,$price,$pricerange,$typeofhostel,$security,$distancefromschool,$hostel,$Amenities,$information,$location,$hostelimage));
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      echo "<script>alert('Hostel has been added Successfully')</script>
		   <script>window.location = 'admin.php'</script>";
    
    //uploading image
    if (move_uploaded_file($_FILES['hostelimage']['tmp_name'], $target)) {
      header("location:admin.php");
      $msg = "picture uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

 }
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
        style="background-image: url('../../img/home2.jpg'); height: 550px">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
              <h1 class="mb-3">Smart Student's Accomodation System</h1>
              <h4 class="mb-3">
                Manage Hostels
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
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
          <div class="container-fluid">
            <a
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#navbarTogglerDemo02"
              aria-controls="navbarTogglerDemo02"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <strong class="text-dark mr-2">Hostels:</strong>
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <form action=" " method="POST" style="box-shadow:none;">
                    <input type="text" name="search" value="allhostels" style="display:none;">
                    <button class="nav-link active" type="submit" name="submit"style="background-color:white;border:none;">All</button>
                  </form>
                </li>
                
              </ul>
              <form class="d-flex input-group w-auto" action=" " method="POST" style="box-shadow:none;">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search"
                  aria-label="Search"
                  name="search"/>
                <button
                  class="btn btn-outline-primary"
                  type="submit"
                  name="submit"
                  data-mdb-ripple-color="dark">Go
                </button>
              </form>
            </div>
          </div>
        </nav>

  <!--add hostels-->
    <div class="smart-SAS hostels" style="marging-left:auto;margin-right:auto;display:block;text-align:center;">
      <h4 style="font-family: 'Courier New', Courier, monospace;font-weight:bold;">MANAGE HOSTELS</h4>
    </div>
    <br>
  <div class="testbox">
    <form action="admin.php" method="POST" enctype="multipart/form-data">
      <fieldset>
        <legend style="border-radius: 25px;"><h4 style="margin:15px;">Add Hostels</h4></legend>
        <div class="columns">
          <div class="item">
            <label for="hostel name">Hostel Name<span>*</span></label>
            <input id="hostel name" type="text" name="name" required/>
          </div>
          <div class="item">
            <label for="price"> Exact Price<span>*</span></label>
            <input id="price" type="text" name="price" required/>
          </div>
          <div class="item">
            <label for="information"> Information<span>*</span></label>
            <input id="information" type="text" name="information" required/>
          </div>
          <div class="item">
            <label for="location"> Location <span>*</span></label>
            <input id="location" type="text" name="location" required/>
          </div>
          <div class="item">
              <label for="hostelimage">Post Pic Of the Hostel<span>*</span></label>
              <input type="file" name="hostelimage" required>
          </div>
          <div class="item">
            <select name="Amenities[]" multiple="Multiple" required>
             <option value="" disabled selected>Amenities</option>
             <option value="water" >water</option>
             <option value="wi-fi">wi-fi</option>
             <option value="laundry">laundry</option>
             <option value="garbage collection">garbage collection</option>
             <option value="dining">dining</option>
             <option value="entertainment spaces">entertainment spaces</option>
            </select>
          </div>

          <div class="item" style="display:none">
            <label for="additional-information"> smart SAS<span>*</span></label>
            <input id="information" type="text" name="all" value="allhostels" required/>
          </div>
          <div class="item">
            <select name="typeofhostel" style="padding:8px;" required>
             <option value="" disabled selected>Type of Hostel</option>
             <option value="1-Bedroom" >1-Bedroom</option>
             <option value="Bedsitters">Bedsitters</option>
             <option value="Single Rooms">Single Rooms</option>
            </select>
          </div>

          <div class="item">
            <select name="security" style="padding:8px;" required>
             <option value="" disabled selected>security level</option>
             <option value="high" >high</option>
             <option value="medium">medium</option>
             <option value="standard">standard</option>
            </select>
          </div>

          <div class="item">
            <select name="distancefromschool" style="padding:8px;" required>
             <option value="" disabled selected>Distance from School</option>
             <option value="very far" >very far</option>
             <option value="far">far</option>
             <option value="near">near</option>
             <option value="very near">very near</option>
            </select>
          </div>

          <div class="item">
            <select name="pricerange" style="padding:8px;" required>
             <option value="" disabled selected>Select Price Range</option>
             <option value="cheap" >5000 - 6000</option>
             <option value="moderate">6001 - 7500</option>
             <option value="expensive">7501 - 9000</option>
            </select>
          </div>

      </fieldset>
      <div class="btn-block">
        <button type="submit" name="hostel"style="border-radius: 25px;">Submit</button>
      </div>
    </form>
    
</div>
    <br>
    <div class="smart-sas hostels" style="marging-left:auto;margin-right:auto;display:block;text-align:center;">
    <h4 style="font-family: 'Courier New', Courier, monospace;font-weight:bold;">Smart SAS Hostels</h4>
    </div>
    <br><br>

       
        <!--- database products -->
        <?php
         require_once '../includes/config.php';
         if (isset($_POST['submit'])){

         $search = $_POST['search'];

         
        //code...
        $sql="SELECT * FROM hostels where (name LIKE '%" . $_POST["search"] . "%') OR (price LIKE '%" . $_POST["search"] . "%') OR (pricerange LIKE '%" . $_POST["search"] . "%')OR (typeofhostel LIKE '%" . $_POST["search"] . "%') OR (security LIKE '%" . $_POST["search"] . "%') OR (distancefromschool LIKE '%" . $_POST["search"] . "%') OR (Amenities LIKE '%" . $_POST["search"] . "%') OR (allhostels LIKE '%" . $_POST["search"] . "%')";
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
        <section class="text-center mb-4" >
        <?php
          $t = 0;
          while($row = $stmt->fetchObject()) {
            $t++;
                if($t == 1)
                {
        ?>
      <div class="row" style="display:flex;">

            <div class="col-lg-4 col-md-12 mb-4">
              <div class="card" style="">
                <div
                  class="bg-image hover-overlay ripple"
                  data-mdb-ripple-color="light">
                  <img src="<?php echo "hostels/". "{$row->hostelimage}";?>"
                  class="img-fluid" style="max-width:295px; height:300px;" />
                  <a href="#!">
                    <div
                      class="mask"
                      style="background-color: rgba(251, 251, 251, 0.15)"> </div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title"><?php echo "{$row->name}"; ?></h5>
                  <span class="fas fa-star"></span>
                  <span class="fas fa-star"></span>
                  <span class="fas fa-star"></span>
                  <span class="fas fa-star"></span>
                  <span class="fas fa-star"></span>
                  <h6><?php echo "{$row->price}"; ?> ksh</h6>
                  <p><?php echo "{$row->information}"; ?></p>
                  <p>Amenities : <?php echo "{$row->Amenities}"; ?></p>
                  <p class="card-text">
                  <?php echo "{$row->typeofhostel}"; ?>
                  </p>
                  
                  <div class="tools" style="display:flex;margin-left:-40px;">
                      <script>
                       function editproduct() {
                          var x = document.getElementsByClassName("card-update");
                          var i=" "
                          for(var i = 0; i < x.length; i++){
                            if (x[i].style.display === "none") {
                                x[i].style.display = "block";
                                
                            }
                            else {
                           x[i].style.display = "none";
                           
                           } 
                          }
                          
                       }
                      </script>
                      
                    
                    <div class="delete-edit" style="margin-left:auto;margin-right:auto;display:block;">
                     <div class="edit" >
                       <button style="margin-top:20px;" class="btn btn-dark " onclick=editproduct()>EDIT INFO</button>
                     </div>
                      <form action="deleteproducts.php" method="post" style="box-shadow:none;">
                        <input type="hidden" name="deletehostel_id" value="<?php echo "{$row->id}"; ?>">
                        <button type="submit" class="btn btn-dark " name="deletehostel_btn">DELETE HOSTEL</button>
                      </form>
                    </div>
                  </div>
                  <br>
                <div id="cardupdate" class="card-update" style="display:none;">
                  <form action="deleteproducts.php" method="POST" enctype="multipart/form-data" style=" ">
                    <fieldset>
                      <legend style="border-radius:25px;"><p style="margin:15px;">Edit Hostel Information</p></legend>
                      <div class="columns">
                        <div class="item">
                          <label for="Name">Hostel Name<span>*</span></label>
                          <input id="name" type="text" name="name" value="<?php echo "{$row->name}"; ?>" />
                        </div>
                        <div class="item">
                          <label for="information"> Price<span>*</span></label>
                          <input id="information" type="text" name="price" value="<?php echo "{$row->price}"; ?>" />
                        </div>
                        <div class="item">
                        <label for="range"> Price Range <span>*</span></label>
                          <select name="pricerange" value="<?php echo "{$row->pricerange}";?>" >
                           <option value="<?php echo "{$row->pricerange}";?>"><?php echo "{$row->pricerange}";?></option>
                           <option value="cheap">5000 - 6000</option>
                           <option value="moderate">6001 - 7500</option>
                           <option value="expensive">7501 - 9000</option>
                          </select>
                        </div>
                        <div class="item">
                        <label for="information"> Type of Hostel <span>*</span></label>
                          <select name="typeofhostel" value="<?php echo "{$row->typeofhostel}";?>" >
                           <option value="<?php echo "{$row->typeofhostel}";?>"><?php echo "{$row->typeofhostel}";?></option>
                           <option value="1-Bedroom" >1-Bedroom</option>
                           <option value="Bedsitters">Bedsitters</option>
                           <option value="Single Rooms">Single Rooms</option>
                          </select>
                        </div>
                        <div class="item">
                        <label for="information"> Security Level <span>*</span></label>
                          <select name="security" value="<?php echo "{$row->security}"; ?>" >
                            <option value="<?php echo "{$row->security}"; ?>" ><?php echo "{$row->security}"; ?></option>
                            <option value="high" >high</option>
                            <option value="medium">medium</option>
                            <option value="standard">standard</option>
                          </select>
                        </div>
                        <div class="item">
                        <label for="information"> Dist from School <span>*</span></label>
                          <select name="distancefromschool" value="<?php echo "{$row->distancefromschool}"; ?>" >
                          <option value="<?php echo "{$row->distancefromschool}"; ?>" ><?php echo "{$row->distancefromschool}"; ?></option>
                           <option value="very far" >very far</option>
                           <option value="far">far</option>
                           <option value="near">near</option>
                           <option value="very near">very near</option>
                          </select>
                        </div>

                        <div class="item" style="display:none;">
                          <label for="additional-information"> Information about The Hostel<span>*</span></label>
                          <input id="information" type="text" name="id" value="<?php echo "{$row->id}"; ?>" />
                        </div>
                      </div>  
                    </fieldset>
                    <div class="item">
                      <label for="information"> Information<span>*</span></label>
                      <input id="information" type="text" name="information" value="<?php echo "{$row->information}"; ?>" />
                    </div>
                    <div class="item">
                      <label for="location"> Location <span>*</span></label>
                      <input id="location" type="text" name="location" value="<?php echo "{$row->location}"; ?>" />
                    </div>
                    <div class="item">
                      <label for="information"> Amenities<span>*</span></label>
                      <input id="information" type="text" name="Amenities"value="<?php echo "{$row->Amenities}"; ?>" />
                    </div>
                    <div class="item">
                      <label for="hostelimage">Post Pic Of the Hostel<span>*</span></label>
                      <input type="file" name="hostelimage" required >
                    </div>
                    <div class="btn-block">
                     <button type="submit" class="btn btn-dark " name="updatehostelinfo"> SAVE </button>
                    </div>
                  </form>
                </div>
                

                </div>
                
                
              </div>
            </div>

          
        <?php
            }else if($t == 3){
              ?>
              <div class="col-lg-4 col-md-12 mb-4">
              <div class="card" style="">
                <div
                  class="bg-image hover-overlay ripple"
                  data-mdb-ripple-color="light">
                  <img src="<?php echo "hostels/". "{$row->hostelimage}";?>"
                  class="img-fluid" style="max-width:295px; height:300px;" />
                  <a href="#!">
                    <div
                      class="mask"
                      style="background-color: rgba(251, 251, 251, 0.15)"> </div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title"><?php echo "{$row->name}"; ?></h5>
                  <span class="fas fa-star"></span>
                  <span class="fas fa-star"></span>
                  <span class="fas fa-star"></span>
                  <span class="fas fa-star"></span>
                  <span class="fas fa-star"></span>
                  <h6><?php echo "{$row->price}"; ?> ksh</h6>
                  <p><?php echo "{$row->information}"; ?></p>
                  <p>Amenities : <?php echo "{$row->Amenities}"; ?></p>
                  <p class="card-text">
                  <?php echo "{$row->typeofhostel}"; ?>
                  </p>
                  
                  <div class="tools" style="display:flex;margin-left:-40px;">
                      <script>
                       function editproduct() {
                          var x = document.getElementsByClassName("card-update");
                          var i=" "
                          for(var i = 0; i < x.length; i++){
                            if (x[i].style.display === "none") {
                                x[i].style.display = "block";
                                
                            }
                            else {
                           x[i].style.display = "none";
                           
                           } 
                          }
                          
                       }
                      </script>
                      
                    
                    <div class="delete-edit" style="margin-left:auto;margin-right:auto;display:block;">
                     <div class="edit" >
                       <button style="margin-top:20px;" class="btn btn-dark " onclick=editproduct()>EDIT INFO</button>
                     </div>
                      <form action="deleteproducts.php" method="post" style="box-shadow:none;">
                        <input type="hidden" name="deletehostel_id" value="<?php echo "{$row->id}"; ?>">
                        <button type="submit" class="btn btn-dark " name="deletehostel_btn">DELETE HOSTEL</button>
                      </form>
                    </div>
                  </div>
                  <br>
                <div id="cardupdate" class="card-update" style="display:none;">
                  <form action="deleteproducts.php" method="POST" enctype="multipart/form-data" style=" ">
                    <fieldset>
                      <legend style="border-radius:25px;"><p style="margin:15px;">Edit Hostel Information</p></legend>
                      <div class="columns">
                        <div class="item">
                          <label for="Name">Hostel Name<span>*</span></label>
                          <input id="name" type="text" name="name" value="<?php echo "{$row->name}"; ?>" />
                        </div>
                        <div class="item">
                          <label for="information"> Price<span>*</span></label>
                          <input id="information" type="text" name="price" value="<?php echo "{$row->price}"; ?>" />
                        </div>
                        <div class="item">
                        <label for="range"> Price Range <span>*</span></label>
                          <select name="pricerange" value="<?php echo "{$row->pricerange}";?>" >
                           <option value="<?php echo "{$row->pricerange}";?>"><?php echo "{$row->pricerange}";?></option>
                           <option value="cheap">5000 - 6000</option>
                           <option value="moderate">6001 - 7500</option>
                           <option value="expensive">7501 - 9000</option>
                          </select>
                        </div>
                        <div class="item">
                        <label for="information"> Type of Hostel <span>*</span></label>
                          <select name="typeofhostel" value="<?php echo "{$row->typeofhostel}";?>" >
                           <option value="<?php echo "{$row->typeofhostel}";?>"><?php echo "{$row->typeofhostel}";?></option>
                           <option value="1-Bedroom" >1-Bedroom</option>
                           <option value="Bedsitters">Bedsitters</option>
                           <option value="Single Rooms">Single Rooms</option>
                          </select>
                        </div>
                        <div class="item">
                        <label for="information"> Security Level <span>*</span></label>
                          <select name="security" value="<?php echo "{$row->security}"; ?>" >
                            <option value="<?php echo "{$row->security}"; ?>" ><?php echo "{$row->security}"; ?></option>
                            <option value="high" >high</option>
                            <option value="medium">medium</option>
                            <option value="standard">standard</option>
                          </select>
                        </div>
                        <div class="item">
                        <label for="information"> Dist from School <span>*</span></label>
                          <select name="distancefromschool" value="<?php echo "{$row->distancefromschool}"; ?>" >
                          <option value="<?php echo "{$row->distancefromschool}"; ?>" ><?php echo "{$row->distancefromschool}"; ?></option>
                           <option value="very far" >very far</option>
                           <option value="far">far</option>
                           <option value="near">near</option>
                           <option value="very near">very near</option>
                          </select>
                        </div>

                        <div class="item" style="display:none;">
                          <label for="additional-information"> Information about The Hostel<span>*</span></label>
                          <input id="information" type="text" name="id" value="<?php echo "{$row->id}"; ?>" />
                        </div>
                      </div>  
                    </fieldset>
                    <div class="item">
                      <label for="information"> Information<span>*</span></label>
                      <input id="information" type="text" name="information" value="<?php echo "{$row->information}"; ?>" />
                    </div>
                    <div class="item">
                      <label for="location"> Location <span>*</span></label>
                      <input id="location" type="text" name="location" value="<?php echo "{$row->location}"; ?>" />
                    </div>
                    <div class="item">
                      <label for="information"> Amenities<span>*</span></label>
                      <input id="information" type="text" name="Amenities"value="<?php echo "{$row->Amenities}"; ?>" />
                    </div>
                    <div class="item">
                      <label for="hostelimage">Post Pic Of the Hostel<span>*</span></label>
                      <input type="file" name="hostelimage" required >
                    </div>
                    <div class="btn-block">
                     <button type="submit" class="btn btn-dark " name="updatehostelinfo"> SAVE </button>
                    </div>
                  </form>
                </div>
                

                </div>
                
                
              </div>
            </div>
      </div>    
            <?php
                  $t = 0;
                }else{
                  ?>

            <div class="col-lg-4 col-md-12 mb-4">
              <div class="card" style="">
                <div
                  class="bg-image hover-overlay ripple"
                  data-mdb-ripple-color="light">
                  <img src="<?php echo "hostels/". "{$row->hostelimage}";?>"
                  class="img-fluid" style="max-width:295px; height:300px;" />
                  <a href="#!">
                    <div
                      class="mask"
                      style="background-color: rgba(251, 251, 251, 0.15)"> </div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title"><?php echo "{$row->name}"; ?></h5>
                  <span class="fas fa-star"></span>
                  <span class="fas fa-star"></span>
                  <span class="fas fa-star"></span>
                  <span class="fas fa-star"></span>
                  <span class="fas fa-star"></span>
                  <h6><?php echo "{$row->price}"; ?> ksh</h6>
                  <p><?php echo "{$row->information}"; ?></p>
                  <p>Amenities : <?php echo "{$row->Amenities}"; ?></p>
                  <p class="card-text">
                  <?php echo "{$row->typeofhostel}"; ?>
                  </p>
                  
                  <div class="tools" style="display:flex;margin-left:-40px;">
                      <script>
                       function editproduct() {
                          var x = document.getElementsByClassName("card-update");
                          var i=" "
                          for(var i = 0; i < x.length; i++){
                            if (x[i].style.display === "none") {
                                x[i].style.display = "block";
                                
                            }
                            else {
                           x[i].style.display = "none";
                           
                           } 
                          }
                          
                       }
                      </script>
                      
                    
                    <div class="delete-edit" style="margin-left:auto;margin-right:auto;display:block;">
                     <div class="edit" >
                       <button style="margin-top:20px;" class="btn btn-dark " onclick=editproduct()>EDIT INFO</button>
                     </div>
                      <form action="deleteproducts.php" method="post" style="box-shadow:none;">
                        <input type="hidden" name="deletehostel_id" value="<?php echo "{$row->id}"; ?>">
                        <button type="submit" class="btn btn-dark " name="deletehostel_btn">DELETE HOSTEL</button>
                      </form>
                    </div>
                  </div>
                  <br>
                <div id="cardupdate" class="card-update" style="display:none;">
                  <form action="deleteproducts.php" method="POST" enctype="multipart/form-data" style=" ">
                    <fieldset>
                      <legend style="border-radius:25px;"><p style="margin:15px;">Edit Hostel Information</p></legend>
                      <div class="columns">
                        <div class="item">
                          <label for="Name">Hostel Name<span>*</span></label>
                          <input id="name" type="text" name="name" value="<?php echo "{$row->name}"; ?>" />
                        </div>
                        <div class="item">
                          <label for="information"> Price<span>*</span></label>
                          <input id="information" type="text" name="price" value="<?php echo "{$row->price}"; ?>" />
                        </div>
                        <div class="item">
                        <label for="range"> Price Range <span>*</span></label>
                          <select name="pricerange" value="<?php echo "{$row->pricerange}";?>" >
                           <option value="<?php echo "{$row->pricerange}";?>"><?php echo "{$row->pricerange}";?></option>
                           <option value="cheap">5000 - 6000</option>
                           <option value="moderate">6001 - 7500</option>
                           <option value="expensive">7501 - 9000</option>
                          </select>
                        </div>
                        <div class="item">
                        <label for="information"> Type of Hostel <span>*</span></label>
                          <select name="typeofhostel" value="<?php echo "{$row->typeofhostel}";?>" >
                           <option value="<?php echo "{$row->typeofhostel}";?>"><?php echo "{$row->typeofhostel}";?></option>
                           <option value="1-Bedroom" >1-Bedroom</option>
                           <option value="Bedsitters">Bedsitters</option>
                           <option value="Single Rooms">Single Rooms</option>
                          </select>
                        </div>
                        <div class="item">
                        <label for="information"> Security Level <span>*</span></label>
                          <select name="security" value="<?php echo "{$row->security}"; ?>" >
                            <option value="<?php echo "{$row->security}"; ?>" ><?php echo "{$row->security}"; ?></option>
                            <option value="high" >high</option>
                            <option value="medium">medium</option>
                            <option value="standard">standard</option>
                          </select>
                        </div>
                        <div class="item">
                        <label for="information"> Dist from School <span>*</span></label>
                          <select name="distancefromschool" value="<?php echo "{$row->distancefromschool}"; ?>" >
                          <option value="<?php echo "{$row->distancefromschool}"; ?>" ><?php echo "{$row->distancefromschool}"; ?></option>
                           <option value="very far" >very far</option>
                           <option value="far">far</option>
                           <option value="near">near</option>
                           <option value="very near">very near</option>
                          </select>
                        </div>

                        <div class="item" style="display:none;">
                          <label for="additional-information"> Information about The Hostel<span>*</span></label>
                          <input id="information" type="text" name="id" value="<?php echo "{$row->id}"; ?>" />
                        </div>
                      </div>  
                    </fieldset>
                    <div class="item">
                      <label for="information"> Information<span>*</span></label>
                      <input id="information" type="text" name="information" value="<?php echo "{$row->information}"; ?>" />
                    </div>
                    <div class="item">
                      <label for="location"> Location <span>*</span></label>
                      <input id="location" type="text" name="location" value="<?php echo "{$row->location}"; ?>" />
                    </div>
                    <div class="item">
                      <label for="information"> Amenities<span>*</span></label>
                      <input id="information" type="text" name="Amenities"value="<?php echo "{$row->Amenities}"; ?>" />
                    </div>
                    <div class="item">
                      <label for="hostelimage">Post Pic Of the Hostel<span>*</span></label>
                      <input type="file" name="hostelimage" required >
                    </div>
                    <div class="btn-block">
                     <button type="submit" class="btn btn-dark " name="updatehostelinfo"> SAVE </button>
                    </div>
                  </form>
                </div>
                

                </div>
                
                
              </div>
            </div>
            <?php
                }
            }
            if($t < 3){
              ?>
              </div>
              <?php
            }
            ?>      
            

          </section>
          <!-- end --->
        
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
            ><i class="fab fa-facebook-f"></i
          ></a>

          <!-- Twitter -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-twitter"></i
          ></a>

          <!-- Google -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-google"></i
          ></a>

          <!-- Instagram -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-instagram"></i
          ></a>

          <!-- Linkedin -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-linkedin"></i
          ></a>
          <!-- Github -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-github"></i
          ></a>
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
  <script type="text/javascript" src="../../js/script1.js"></script>
  <script type="text/javascript"></script>
  
</html>
