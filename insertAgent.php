<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.btn{
	background-color: #4CAF50;
	float: right;
	color:white;
	text-decoration:none;	
}


table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Insert Agent</title>
    <link href="./assets/css/bootstrap.css" rel="stylesheet" />
   
    <link href="./assets/css/font-awesome.css" rel="stylesheet" />
    
    <link href="./assets/css/basic.css" rel="stylesheet" />
    
    <link href="./assets/css/custom.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<?php include 'header.php'; 
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Insert Agent
						<button class="btn" align="center"> 
                        <a href="addAgent.php" class="btn">Add Agent</a>
                        </button>
						</h1>
                    
                
				

<?php

include'connection.php';


	    $agent_id       = $_POST["agent_id"];
		$agent_password = $_POST["agent_password"];
		$name           = $_POST["name"];
		$branch         = $_POST["branch"];
		$phone          = $_POST["phone"];
		
	$sql = "INSERT INTO agent "."VALUES('$agent_id','$agent_password','$name', '$branch', '$phone')";
	
	if ($conn->query($sql) === true) {
			echo "New Agent ADDED";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		

?>


			

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


</body>
</html>
