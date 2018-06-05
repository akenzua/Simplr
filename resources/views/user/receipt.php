
<?php
session_start();

define("MERCHANTID", "2547916");
define("SERVICETYPEID", "4430731");
define("APIKEY", "1946");
define("CHECKSTATUSURL", "http://www.remitademo.net/remita/ecomm");
define("GATEWAYURL", "http://www.remitademo.net/remita/ecomm/init.reg");
define("PATH", 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']));




//Initialise order id
$orderID = "";
if( isset( $_GET['orderID'] )) {
$orderID = $_GET["orderID"];
}
$response_code ="";
$rrr = "";
$response_message = "";
//Verify Transaction
function remita_transaction_details($orderId){
        $mert =  MERCHANTID;
        $api_key =  APIKEY;
        $concatString = $orderId . $api_key . $mert;
        $hash = hash('sha512', $concatString);
        $url    = CHECKSTATUSURL . '/' . $mert  . '/' . $orderId . '/' . $hash . '/' . 'orderstatus.reg';
        //  Initiate curl
        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL,$url);
        // Execute
        $result=curl_exec($ch);
        // Closing
        curl_close($ch);
        $response = json_decode($result, true);
        return $response;
    }
    if($orderID !=null){
        $response = remita_transaction_details($orderID);
        $response_code = $response['status'];
        if (isset($response['RRR']))
            {
            $rrr = $response['RRR'];
            }
        $response_message = $response['message'];
}
?>

    <?php

        if (Session::has('key')) {
                              $job = Session::get('key');
                            }

            //Set up database connection
            $servername = "localhost";
            $username = "root";
            $password = "";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=bplan", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected successfully"; 
                }
            catch(PDOException $e)
                {
                echo "Connection failed: " . $e->getMessage();
                }

            $sql = "UPDATE jobs SET payfirst='green', order_id = $orderID, rrr = $rrr, code = $response_code WHERE id=$job";

                // Prepare statement
                $stmt = $conn->prepare($sql);

                // execute the query
                $stmt->execute();

                

            $conn = null;
            

         header("Location: /home/questionnaire/1/$job");
            exit;
        ?>


       
