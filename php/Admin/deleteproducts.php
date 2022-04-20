<!-- delete hostels -->
<?php
 require_once '../includes/config.php';
 if (isset($_POST['deletehostel_btn'])){

    $id = $_POST['deletehostel_id'];
    echo $id;
  

    try {
        //code...
        $sql = "DELETE FROM hostels WHERE id='$id'";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      echo "<script>alert('Hostel has been deleted successfully')</script>
		   <script>window.location = 'admin.php'</script>"; 
    }
    
 ?>

 
<!-- Update hostels -->
<?php
 require_once '../includes/config.php';
 if (isset($_POST['updatehostelinfo'])){

  $id = $_POST['id'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  $pricerange = $_POST['pricerange'];
  $typeofhostel = $_POST['typeofhostel'];
  $security = $_POST['security'];
  $distancefromschool = $_POST['distancefromschool'];
  $Amenities = $_POST['Amenities'];
  $information = $_POST['information'];
  $location = $_POST['location'];
  $hostelimage = $_FILES['hostelimage']['name'];

 // image file directory
 $target = "hostels/".basename($hostelimage);
  
  

    try {
        //code...
        $sql = "UPDATE hostels SET name='$name',price='$price',pricerange='$pricerange',typeofhostel='$typeofhostel',security='$security',distancefromschool='$distancefromschool', Amenities='$Amenities', information='$information', location='$location',hostelimage='$hostelimage'  where id= '". $_POST["id"] ."' ";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      
      echo "<script>alert('Hostel info edited Successfully')</script>
		  <script>window.location = 'admin.php'</script>";

    //uploading image
    if (move_uploaded_file($_FILES['hostelimage']['tmp_name'], $target)){
      header("location:admin.php");
      $msg = "picture uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

    }  
 ?>

 <!---Delete registered user-->
 <?php
 require_once '../includes/config.php';
 if (isset($_POST['deleteuser_btn'])){

    $id = $_POST['deleteuser_id'];
    echo $id;
  

    try {
        //code...
        $sql = "DELETE FROM users WHERE id='$id'";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      echo "<script>alert('User account has been deleted successfully')</script>
		   <script>window.location = 'registeredusers.php'</script>"; 
    }
    
 ?>


<!---Delete contact messages-->
<?php
 require_once '../includes/config.php';
 if (isset($_POST['deletemessage_btn'])){

    $id = $_POST['deletemessage_id'];
    echo $id;
  

    try {
        //code...
        $sql = "DELETE FROM contact WHERE id='$id'";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      echo "<script>alert('Message has been deleted successfully')</script>
		   <script>window.location = 'contactmessages.php'</script>"; 
    }
    
 ?>


<!---Delete bookings-->
<?php
 require_once '../includes/config.php';
 if (isset($_POST['deletebooking_btn'])){

    $id = $_POST['deletebooking_id'];
    echo $id;
  

    try {
        //code...
        $sql = "DELETE FROM bookings WHERE id='$id'";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      echo "<script>alert('Booking has been deleted successfully')</script>
		   <script>window.location = 'bookings.php'</script>"; 
    }
    
 ?>
 

 <!---Edit gallery-->
 <!---Delete pictures-->
 <?php
 require_once '../includes/config.php';
 if (isset($_POST['deletepic_btn'])){

    $id = $_POST['deletepic_id'];
    echo $id;
  

    try {
        //code...
        $sql = "DELETE FROM studio WHERE id='$id'";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      echo "<script>alert('picture has been deleted successfully')</script>
		   <script>window.location = 'updatestudio.php'</script>"; 
    }
    
 ?>

 <!---update gallery--->
 <?php
 require_once '../includes/config.php';
 if (isset($_POST['updategallery'])){

  $id = $_POST['id'];
  $category = $_POST['category'];
  $image = $_FILES['image']['name'];

  // image file directory
  $target = "studio/".basename($image);
  
  

    try {
        //code...
        $sql = "UPDATE studio SET category='$category',image='$image'  where id= '". $_POST["id"] ."' ";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      
      echo "<script>alert('Gallery edited Successfully')</script>
		  <script>window.location = 'updatestudio.php'</script>";

    //uploading image
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
      header("location:updatestudio.php");
      $msg = "Picture uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

    }  
 ?>