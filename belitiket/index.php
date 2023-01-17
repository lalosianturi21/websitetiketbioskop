<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a2331dbcf7.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .wrapper{
            width: 900px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width:200px;
        }

        .ticket img {
            width: 50px;
        }

    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body style="background: #780206;  /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #061161, #780206);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #061161, #780206); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left ticket text-light">Daftar Pembelian Tiket <img src="ticket.png"></h2>
                        <a href="../index1.php" class="btn pull-right" style="background: #93FFD8"><i class="fa-solid fa-house"></i><b> Back To Home</b></a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM employees";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr class='text-center text-light'>";
                                        echo "<th >#</th>";
                                        echo "<th>Nama Pembeli</th>";
                                        echo "<th>Nama Film</th>";
                                        echo "<th>Date</th>";
                                        echo "<th>Time</th>";
                                        echo "<th>Section</th>";
                                        echo "<th>Row</th>";
                                        echo "<th>Box</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td class='text-light text-center'>" . $row['id'] . "</td>";
                                        echo "<td class='text-light text-center'>" . $row['namapembeli'] . "</td>";
                                        echo "<td class='text-light text-center'>" . $row['name'] . "</td>";
                                        echo "<td class='text-light text-center'>" . $row['date'] . "</td>";
                                        echo "<td class='text-light text-center'>" . $row['time'] . "</td>";
                                        echo "<td class='text-light text-center'>" . $row['section'] . "</td>";
                                        echo "<td class='text-light text-center'>" . $row['row'] . "</td>";
                                        echo "<td class='text-light text-center'>" . $row['seat'] . "</td>";
                                        echo "<td class='text-light text-center text-center'>";
                                            echo '<a href="read.php?id='. $row['id'] .'" class="btn btn-info">Lihat ticket</a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>