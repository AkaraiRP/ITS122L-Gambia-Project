<?php
require_once 'database.php';
 
// Define variables and initialize with empty values
$name = $location = $date = $event_status = "";
$name_err = $location_err = $date_err = $event_status_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } else{
        $name = $input_name;
    }
    
    // Validate location
    $input_location = trim($_POST["location"]);
    if(empty($input_location)){
        $location_err = "Please enter an location.";     
    } else{
        $location = $input_location;
    }
    
    // Validate date
    $input_date = trim($_POST["date"]);
    if(empty($input_date)){
        $date_err = "Please enter the date.";     
    } else{
        $date = $input_date;
    }

    // Validate event status
    $input_event_status = trim($_POST["event_status"]);
    if(empty($input_event_status)){
        $event_status_err = "Please enter the date.";     
    } else{
        $event_status = $input_event_status;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($location_err) && empty($date_err) && empty($event_status_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO events (event_name, location, date, event_status) VALUES (:name, :location, :date, :event_status)";
 
        if($stmt = $conn->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":name", $param_name);
            $stmt->bindParam(":location", $param_location);
            $stmt->bindParam(":date", $param_date);
            $stmt->bindParam(":event_status", $param_event_status);
            
            // Set parameters
            $param_name = $name;
            $param_location = $location;
            $param_date = $date;
            $param_event_status = $event_status;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
                header("location: /Dashboard/admin.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
    }
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
                    <p>Please fill this form and submit to add event record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Event Name</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <textarea name="location" class="form-control <?php echo (!empty($location_err)) ? 'is-invalid' : ''; ?>"><?php echo $location; ?></textarea>
                            <span class="invalid-feedback"><?php echo $location_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input type="text" name="date" class="form-control <?php echo (!empty($date_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $date; ?>">
                            <span class="invalid-feedback"><?php echo $date_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Event Status</label>
                            <input type="text" name="event_status" class="form-control <?php echo (!empty($event_status_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $event_status; ?>">
                            <span class="invalid-feedback"><?php echo $event_status_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="/Dashboard/admin.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>