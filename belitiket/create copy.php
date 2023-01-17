<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $date = $time = $row = $seat = "";
$name_err = $date_err = $time_err = $row_err = $seat_err = "";
 
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
    } else{
        $row = $input_row;
    }

    $input_seat = trim($_POST["seat"]);
    if(empty($input_seat)){
        $seat_err = "Please enter the seat amount.";     
    } else{
        $seat = $input_seat;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($date_err) && empty($time_err) && empty($row_err) && empty($seat_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO employees (name, date, time, row, seat) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_name, $param_date, $param_time, $param_row, $param_seat);
            
            // Set parameters
            $param_name = $name;
            $param_date = $date;
            $param_time = $time;
            $param_row = $row;
            $param_seat = $seat;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
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
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>date</label>
                            <input type="date" name="date" class="form-control <?php echo (!empty($date_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $date; ?>">
                            <span class="invalid-feedback"><?php echo $date_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>time</label>
                            <input type="time" name="time" class="form-control <?php echo (!empty($time_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $time; ?>">
                            <span class="invalid-feedback"><?php echo $time_err;?></span>
                        </div>

                        <div class="form-group">
                            <label>Row</label>
                            <input type="text" name="row" class="form-control <?php echo (!empty($row_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $row; ?>">
                            <span class="invalid-feedback"><?php echo $row_err;?></span>
                        </div>

                        <div class="form-group">
                            <label>seat</label>
                            <input type="text" name="seat" class="form-control <?php echo (!empty($seat_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $seat; ?>">
                            <span class="invalid-feedback"><?php echo $seat_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>