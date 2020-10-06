<?php
// Reads the variables sent via POST from our gateway
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON Welcome to the (app) Service Center\n";
    $response .= "1. Report a Fault \n";
    $response .= "2. Get News Updates";

} else if ($text == "1") {
    // logic for first level response for first option
    $response = "CON What fault would you like to report? \n";
    $response .= "1. Burst Water Pipe \n";
    $response .= "2. Burst Sewage System\n";
    $response .= "3. Damaged Electricity Pole\n";
    $response .= "4. Power Outage \n";
    $response .= "5. Dangerous Pothole\n";
    $response .= "0. Back \n";

} else if($text == "1*1") {
    // Logic for a first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END The issue has been reported to WUC ";

}  else if ($text == "1*2") {

    // This is a terminal request. Note how we start the response with END
    $response = "END The issue has been reported to WUC ";


}   else if ($text == "1*3") {

    // This is a terminal request. Note how we start the response with END
    $response = "END The issue has been reported to BPC ";

}   else if ($text == "1*4") {

      // This is a terminal request. Note how we start the response with END
      $response = "END The issue has been reported to BPC ";

}   else if ($text == "1*5") {

        // This is a terminal request. Note how we start the response with END
      $response = "END The issue has been reported to Transport & Roads Department ";


}    else if ( $text == "1*0" ) {
  // To go back to the previous menu
	 //TODO

}    else if($text == "2") {
    // Logic for a first level response for the second option
    $response = "CON What Alerts do you want to see? \n";
    $response .= "1. Water Utilities Cooperation\n";
    $response .= "2. Botswana Power Cooperation\n";
    $response .= "3. Department of Roads & Transport\n";
    $response .= "0. Back\n";

}   else if ($text == "2*1") {
    // Business logic for second level response
    $response = "END No current alerts available \n";

}   else if ($text == "2*2") {
    // Business logic for second level response
    $response = "END No current alerts available \n";

}   else if ($text == "2*3") {
    // Business logic for second level response
    $response = "END No current alerts available \n";

}    else if ( $text == "1*0" ) {
    // To go back to the previous menu
  	//TODO
}
      
// Echo the response back to the API
header('Content-type: text/plain');
echo $response;
