<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $date = $time = $row = $seat = $section = $namapembeli = "";
$name_err = $date_err = $time_err = $row_err = $seat_err = $section_err = $namapembeli_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate date
    $input_date = trim($_POST["date"]);
    if(empty($input_date)){
        $date_err = "Please enter an date.";     
    } else{
        $date = $input_date;
    }
    
    // Validate time
    $input_time = trim($_POST["time"]);
    if(empty($input_time)){
        $time_err = "Please enter the time amount.";     
    } else{
        $time = $input_time;
    }

    // Validate row
    $input_row = trim($_POST["row"]);
    if(empty($input_row)){
        $row_err = "Please enter the row amount.";     
    } elseif(!ctype_digit($input_row)){
        $row_err = "Please enter a positive integer value.";
    } else{
        $row = $input_row;
    }

    // Validate seat
    $input_seat = trim($_POST["seat"]);
    if(empty($input_seat)){
        $seat_err = "Please enter the seat amount.";     
    } elseif(!ctype_digit($input_seat)){
        $seat_err = "Please enter a positive integer value.";
    } else{
        $seat = $input_seat;
    }

     // Validate section
     $input_section = trim($_POST["section"]);
     if(empty($input_section)){
         $section_err = "Please enter the section amount.";     
     } else{
         $section = $input_section;
     }

     // Validate namapembeli
     $input_namapembeli = trim($_POST["namapembeli"]);
     if(empty($input_namapembeli)){
         $namapembeli_err = "Please enter the nama pembeli amount.";     
     } else{
         $namapembeli = $input_namapembeli;
     }
     
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($date_err) && empty($time_err) && empty($row_err) && empty($seat_err) && empty($namapembeli_err) ){
        // Prepare an insert statement
        $sql = "INSERT INTO employees (name, date, time, row, seat, section, namapembeli) VALUES (?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssss", $param_name, $param_date, $param_time, $param_row, $param_seat, $param_section, $param_namapembeli);
            
            // Set parameters
            $param_name = $name;
            $param_date = $date;
            $param_time = $time;
            $param_row = $row;
            $param_seat = $seat;
            $param_section = $section;
            $param_namapembeli = $namapembeli;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                echo "<script type='text/javascript'>alert('Buy tiket berhasil!!!'); </script>";
                echo "<script type='text/javascript'>window.location='create.php' </script>";
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Beli Tiket</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a2331dbcf7.js" crossorigin="anonymous"></script>
</head>
<body>
    
<div class="login-box">
  <h2>Beli Tiket  <i class="fa-solid fa-ticket"></i></h2>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <div class="user-box">
    <input type="text" name="namapembeli" class="form-control <?php echo (!empty($namapembeli_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $namapembeli; ?>">
      <span class="invalid-feedback"><?php echo $namapembeli_err;?></span>
      <label>Nama Pembeli <i class="fa-solid fa-person"></i></label>
    </div>
    <br>

    <div class="user-box">
    <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
      <span class="invalid-feedback"><?php echo $name_err;?></span>
      <label>Name Film <i class="fa-solid fa-film"></i></label>
    </div>
    <br>

    <div class="user-box">
    <input type="date" name="date" class="form-control <?php echo (!empty($date_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $date; ?>">
      <span class="invalid-feedback"><?php echo $date_err;?></span>
      <label>Date  <i class="fa-solid fa-calendar-days"></i></label>
    </div>
    <br>

    <div class="user-box">
       <input type="time" name="time" class="form-control <?php echo (!empty($time_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $time; ?>">
      <span class="invalid-feedback"><?php echo $time_err;?></span>
      <label>Time <i class="fa-solid fa-clock"></i></label>
    </div>
    <br>

    <div class="user-box">
       <input type="text" name="section" class="form-control <?php echo (!empty($section_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $section; ?>">
      <span class="invalid-feedback"><?php echo $section_err;?></span>
      <label>Section <i class="fa-solid fa-server"></i></label>
    </div>
    <br>

    <div class="user-box">
       <input type="text" name="row" class="form-control <?php echo (!empty($row_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $row; ?>">
      <span class="invalid-feedback"><?php echo $row_err;?></span>
      <label>Box <i class="fa-solid fa-equals"></i></label>
    </div>
    <br>

    <div class="user-box">
       <input type="text" name="seat" class="form-control <?php echo (!empty($seat_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $seat; ?>">
      <span class="invalid-feedback"><?php echo $seat_err;?></span>
      <label>Seat <i class="fa-solid fa-couch"></i> </label>
    </div>
    <div class="d-flex justify-content-center">
    <a>
    <input type="submit" class="btn btn-trasnparant" style="color: #FFFF00" value="Submit">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </a>

    <a href="../index1.php" class="offset-3">
    <input type="cancel" class="btn btn-trasnparant" style="color: #FFFF00" value="Cancel">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </a>
</div>
  </form>

                    
</body>
<script type="text/javascript">
    $(function() {
        $("#txtDate").datepicker({ 
            dateFormat: 'dd/mm/yy' 
        });
    });
</script>
</html>