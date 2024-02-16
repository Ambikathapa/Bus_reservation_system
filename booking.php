<?php
session_start();

include("db_connection.php");

$id = $_GET['id'];
if (!$id) {
  echo("Id chhina");
}

$con =  mysqli_connect("localhost", "root", "", "db_connection");
$query = "Select * from bus_time ORDER BY id DESC LIMIT 1 ";
// $last_id = mysqli_insert_id($con);
$query_run = mysqli_query($con, $query);
if (mysqli_num_rows($query_run) > 0) {
  foreach ($query_run as $row) {

    // $bc = $row["bus_company"];
    $de = $row["bus_name"];
    $d = $row["date"];
    $ti = $row["time"];
    $l = $row["location"];
    $de = $row["destination"];
    $c = $row["cost"];
  }
}

function book_buss()
{
  global $con, $id;
  $query = 'select * from bus_time where id = ' . $id . ';';
  $query_run = mysqli_query($con, $query);
  return mysqli_fetch_assoc($query_run);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $name =  $_POST['name'];
  $email =  $_POST['email'];
  $phone =  $_POST['phone'];
  $adult =  $_POST['adult'];
  // $children = $_POST['children'];
  // $bus_company = book_buss()['bus_company'];
  $bus_name = book_buss()['bus_name'];
  $location = book_buss()['location'];
  $destination = book_buss()['destination'];
  $date = book_buss()['date'];
  $time = book_buss()['time'];
  $cost = book_buss()['cost'];

  $seat_preference =  $_POST['seat_preference'];




  if ($name == "" || $email == "" || $phone == "" || $adult == "" ||  $seat_preference == "") {
    echo "Please fill all fields";
  } else {

    //This is where the errors are found
    $query = mysqli_query($con, "SELECT * FROM book WHERE email = '$email' ") or
      die("Cannot query table");

    $num = mysqli_num_rows($query);
    if ($num >= 10) {
      echo '<script>alert("Already data with same date!!!!")</script>';
    } else {
      $add = mysqli_query($con, "INSERT INTO book ( name, email,phone,adult,bus_name,date,time,location,
destination,cost,seat_preference) VALUES
( '$name', '$email', '$phone','$adult','$bus_name','$date','$time', '$location','$destination', '$cost',
'$seat_preference') ") or die("Cant insert data");
      if ($add)

        // echo '<script>alert("Congratulations, you have booked the ticket!!!")</script>';
        header("Location: print.php");
    }
  }
  // }
}

?>

<html>

<head>
  <title>ticket_booking_form</title>
</head>

<body>
  <table border="12px" width="50%" align="center" height="70%">
    <tr>
      <td>
        <center> <b>SAJA BUS RESERVATION SYSTEM <br> Bus Ticket</b> </center>
      </td>
    </tr>
    <tr>
      <td>
        <p>Please insert each information correctly....</p>
        <form action="booking.php?id=<?= $id ?>" method="post">

          <p><b> Passenger Info :</b></p>

          <div class="elem-group">
            <label for="name"> Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
          </div>
          <div class="elem-group">
            <label for="email"> E-mail</label>
            <input type="email" id="email" name=" email" placeholder="Enter your email " required>
          </div>
          <div class="elem-group">
            <label for="phone"> Phone no.:</label>
            <input type="number" id="phone" name="phone" placeholder="Enter your phone number" required>
          </div>
          <hr>

          <!-- <p><b>Number of Passenger :</b></p> -->
          <div class="elem-group inlined">
            <label for="adult">Number of Passenger </label>
            <input type="int" id="adult" name="adult" placeholder="Enter number" min="1" required><br>
            <!-- <label for="child">Children</label>
            <input type="int" id="children" name="children" placeholder="Enter number"> -->
          </div> <br>

          <hr>

          <p><b>Booking Details :</b></p>
          <!-- <label for="bus_company"> Bus Company</label>
          <input type="text" id="bus_company" name="bus_company" disabled value="<?php echo book_buss()['bus_company']; ?>"><br> -->
          <label for="bus_name"> Bus Name</label>
          <input type="text" id="bus_name" name="bus_name" disabled value="<?php echo book_buss()['bus_name']; ?>"><br>

          <label for="date">Date</label>
          <input type="text" name="date" disabled value="<?php echo book_buss()['date']; ?>">
          <br>
          <label for="time">time</label>
          <input type="text" name="time" disabled value="<?php echo book_buss()['time']; ?>">
          <br><br>
          <label for="location"> Location</label>
          <input type="text" id="location" name="location" disabled value="<?php echo book_buss()['location']; ?>">
          <br>
          <label for="destination"> Destination</label>
          <input type="text" id="destination" name="destination" disabled value="<?php echo book_buss()['destination']; ?>"><br>

          <label for="cost"> Bus-fare per seat</label>
          <input type="cost" id="cost" name="cost" disabled value="<?php echo book_buss()['cost']; ?>">

          <br>
          <label for="seat-selection"> Select Seat</label>
          <select name="seat_preference" multiple >
          <option value="">Choose option</option>
          <option value="A1">A1</option>
          <option value="A2">A2</option>
          <option value="A3">A3</option>
          <option value="A4">A4</option>
          <option value="A5">A5</option>
          <option value="A6">A6</option>
          <option value="A7">A7</option>
          <option value="A8">A8</option>
          <option value="A9">A9</option>
          <option value="A10">A10</option>
          <option value="A11">A11</option>
          <option value="A12">A12</option>
          <option value="A13">A13</option>
          <option value="A14">A14</option>
          <option value="B1">B1</option>
          <option value="B2">B2</option>
          <option value="B3">B3</option>
          <option value="B4">B4</option>
          <option value="B5">B5</option>
          <option value="B6">B6</option>
          <option value="B7">B7</option>
          <option value="B8">B8</option>
          <option value="B9">B9</option>
          <option value="B10">B10</option>
          <option value="B11">B11</option>
          <option value="B12">B12</option>
          <option value="B13">B13</option>
          <option value="B14">B14</option>
         </select>
         


          </div>
          <p>Hold down the Ctrl (windows) or Command (Mac) button to select multiple options.</p>

          <hr>
          <div class="elem-group">
            <p><b>Others</b></p>
            <label for="message">Anything Else?</label>
            <textarea id="message" name="message" placeholder="Tell us anything else that might be important."></textarea>
          </div><br><br>

          <font face="lato" color="dark-blue">
            <p><br><b>[Note :After confirmed ,if you need to cancelled the ticket,
                inform to the memeber from OUR DETAILS.] </b></p>
          </font>


          <br> Click here to confirmation:<button type="submit">Confirmed</button>
          <!-- <button type="submit">Reset</button> -->
        </form>
      </td>
    </tr>
  </table>
</body>

</html>