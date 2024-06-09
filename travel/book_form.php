<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];
      $flightNumber = $_POST['flightNumber'];
      $departure = $_POST['departure'];
      $arrival = $_POST['arrival'];
      $departureDate = $_POST['departureDate'];
      $arrivalDate = $_POST['arrivalDate'];
      $flightPrice = $_POST['flightPrice'];
      $hotelName = $_POST['hotelName'];
      $checkInDate = $_POST['checkInDate'];
      $checkOutDate = $_POST['checkOutDate'];
      $hotelPrice = $_POST['hotelPrice'];
      $activityName = $_POST['activityName'];
      $activityLocation = $_POST['activityLocation'];
      $activityDate = $_POST['activityDate'];
      $activityPrice = $_POST['activityPrice'];

      $request = "INSERT INTO book_form(name, email, phone, address, location, guests, arrivals, leaving, flightNumber, departure, arrival, departureDate, arrivalDate, flightPrice, hotelName, checkInDate, checkOutDate, hotelPrice, activityName, activityLocation, activityDate, activityPrice) VALUES ('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving','$flightNumber','$departure','$arrival','$departureDate','$arrivalDate','$flightPrice','$hotelName','$checkInDate','$checkOutDate','$hotelPrice','$activityName','$activityLocation','$activityDate','$activityPrice')";
      
      mysqli_query($connection, $request);
      session_start();
      $_SESSION['success_message'] = "TRIP booked successfully.";
      header('location:book.php'); 

   } else {
      echo 'Something went wrong. Please try again!';
   }

?>
