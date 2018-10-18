<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Cummings10');
define('DB_NAME', 'lg');
 

/* Attempt to connect to MySQL database */
/*******
	Have To Make $con as a session to pass between pages 
	OR
	Can use a function
	******/
function dbConnect(){
	$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Creating Connection between PHP and Console
function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}
// Check connection
if (!$conn) {
    die ("ERROR: Could not connect. " . mysqli_connect_error());
}
debug_to_console( "Connected successfully" );
  	return $conn;

}


 


?>