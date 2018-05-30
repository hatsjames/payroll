
<?php
/*


   include("../php-wrapper/fusioncharts.php");



   $hostdb = "localhost";  // MySQl host
  MySQL database name

   // Establish a connection to the database
   $dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);

  
   if ($dbhandle->connect_error) {
  	exit("There was an error with your connection: ".$dbhandle->connect_error);
   }
?>

<html>
   <head>
  	<title></title>
    <link  rel="stylesheet" type="text/css" href="../php-wrapper/style.css" />

<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../php-wrapper/fusioncharts.theme.zune.js"></script>
  	<script src="../php-wrapper/fusioncharts.js"></script>
  </head>

   <body>
  	<?php

     	// Form the SQL query that returns the top 10 most populous countries
     	 $strQuery1 = "SELECT SUM(p_salary) FROM payroll";
     	 $strQuery2 = "SELECT SUM(advance) FROM payroll";
     	 $strQuery3 = "SELECT SUM(loan) FROM payroll";
     	 $strQuery4 = "SELECT SUM(memo) FROM payroll";
		 $strQuery5 = "SELECT SUM(shortage) FROM payroll";
     	
     	
     	// Execute the query, or else return the error message.
     	$result1 = mysqli_query($dbhandle,$strQuery1) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
        $result2 = $dbhandle->query($strQuery2) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
		$result3 = $dbhandle->query($strQuery3) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
		$result4 = $dbhandle->query($strQuery4) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
		$result5 = $dbhandle->query($strQuery5) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
		

     	// If the query returns a valid response, prepare the JSON string
     	
        	// The `$arrData` array holds the chart attributes and data
        	$Data = array(
        	      "chart" => array(
                  "caption" => "Payroll Graph",
                  "yAxisName"=>"Values",
                  "xAxisName"=> "Categories",
                  "theme" => "zune"
              	)
           	);



        	 $Data['data'] = array();

	// Push the data into the array
	
	
        	 $r1 = mysqli_fetch_array($result1);
        	 $r2 = mysqli_fetch_array($result2);
			 $r3 = mysqli_fetch_array($result3);
			 $r4 = mysqli_fetch_array($result4);
			 $r5 = mysqli_fetch_array($result5);
        	
             array_push($Data['data'],array(
              	"label" => "shortages",
              	"value" => $r5["0"]
              	),
				array(
              	"label" =>"Memos",
              	"value" => $r4["0"]
              	),
              	array(
              	"label" => "Loans",
              	"value" => $r3["0"]
              	),
              	array(
              	"label" =>"Advances",
              	"value" => $r2["0"]
              	),
              	array(
              	"label" =>"Salaries",
              	"value" =>$r1["0"]
              	)
           )	;
			
			 
        	
				
				$encode=json_encode($Data); 
				echo $encode;
				
		
				
$columnChart = new FusionCharts("column2D", "myFirstChart" , 600, 300, "chart-1", "json", $encode);

        	// Render the chart
$columnChart->render();

        	// Close the database connection
$dbhandle->close();
	




			  
?>

 <center>
                <div id="chart-1">Chart will render here!</div>
            </center>
    </body>

</html>
