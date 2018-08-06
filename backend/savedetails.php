<?php session_start();
date_default_timezone_set('Asia/Kolkata');


	require_once('../dbconnect.php');

	$bsugar = mysqli_escape_string($conn,$_POST['sugar']);

$query = "SELECT * FROM records ORDER BY date DESC;";

$result = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($result);

$timestamp = $result['date'];
if(!(empty($result['num'])))
{
    $num = $result['num'];
    $today = new DateTime(); // This object represents current date/time
    $today->setTime( 0, 0, 0 ); // reset time part, to prevent partial comparison

    $match_date = DateTime::createFromFormat( "Y-m-d H:i:s", $timestamp );
    $match_date->setTime( 0, 0, 0 ); // reset time part, to prevent partial comparison

    $diff = $today->diff( $match_date );
    $diffDays = (integer)$diff->format( "%R%a" ); // Extract days count in interval

    switch( $diffDays ) {
    case 0:
        //Today
        break;
    case -1:
        //Yesterday
        $num++;
        break;
    case +1:
        //Tomorrow
				$num++;
        break;
    default:
        //Sometime"
				$num++;
    }
}else{
    $num = 1;
}

$query = "INSERT INTO `records` (`bs_value`,`num`) VALUES ('$bsugar','$num');";
mysqli_query($conn, $query);
 ?>
