<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM employees WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $name = $row["name"];
                $section = $row["section"];
                $namapembeli = $row["namapembeli"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="read.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body >
<main class="ticket rounded">
	<section class="ticket-sub">
		<h3><?php echo $row["name"]; ?></h3>
		<p>No <?php echo $row["id"]; ?></p>
	</section>
	<section class="ticket-main">
		<section class="ticket-seat">
			<h3>Cinema Seats</h3>
			<div class="ticket-seat-box">
				<p>Section</p>
				<h4><?php echo $row["section"]; ?></h4>
			</div>
			<div class="ticket-seat-box">
				<p>Box</p>
				<h4><?php echo $row["row"]; ?></h4>
			</div>
			<div class="ticket-seat-box">
				<p>Seat</p>
				<h4><?php echo $row["seat"]; ?></h4>
			</div>
		</section>
		<section class="ticket-info">
			<div class="ticket-info-brand">
				<h3>Ticket Movie</h3>
			</div>
			<div class="ticket-info-brawler">
				<div class="brawler">
					<span><?php echo $row["namapembeli"]; ?></span>
				</div>
				
			</div>
			<div class="ticket-info-referee">
				<img src="barcode.png">
			</div>
			<div class="ticket-info-date">
				<p><b><?php echo $row["date"]; ?></p>
			</div>
			<div class="ticket-info-misc">
				<p><b><?php echo $row["time"]; ?></b></p>
			</div>
		</section>
	</section>
</main>
</body>
</html>