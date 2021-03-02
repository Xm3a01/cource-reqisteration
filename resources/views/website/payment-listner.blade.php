// <?php

// Start the session
session_start();  

// read transaction id from session

require('./paymentData.php');

$req = json_encode($_POST);
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");



//this the customerRef and should be save in post or get or cookie 
$customerRef= $_SESSION ["customerRef"];
$transactionId = $_POST["transactionId"];
$token = $_POST["token"];
$res_hash = $_POST["hash"];

$integraty=  $applicationKey .'|'
         . $transactionId .'|'.
         $token.'|'.
          $applicationSalt;
echo $integraty ."<br/>??". $customerRef;
$hash=hash('sha256',$integraty);

if (strcmp ($hash, $res_hash)== 0){
    echo  "hash ". $res_hash ."<br/>" .  "hash ". $hash;
    $hpara=  $applicationKey .'|'
            .$applicationId.'|'
         . $transactionId .'|'.
          $applicationSalt;


// echo $hpara."<br/>" ;

$hash=hash('sha256',$hpara);

// echo $hash."<br/>";


$test = array(
  "applicationId"=> $applicationId ,
  "transactionId"=>$transactionId ,
  "hash"=>$hash
);
$res = json_encode($test);

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://syberpay.sybertechnology.com/syberpay/payment_status",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $res,
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Cookie: SCOUTER=z2qu6oqpugr3h4"
  ),
));
$response = curl_exec($curl);
curl_close($curl);

$response = json_decode($response , true) ;
echo " <br/> resp  ".$response['payment']["responseCode"]. " <br/>";


fwrite($myfile, $response->payment->responseCode);

$s =0 ;
if ($response['payment']["responseCode"] === 0 ){
    
    include 'connection.php';
    $customerRef = $response->payment->customerRef ;
    
    echo "------------". mysqli_query($link, $sql);
    fwrite($myfile, "\n this for testin in the session save the payment status ");

}
}else{
    
    
}

echo "<br/>payment session".$_SESSION ['payment'];
fclose($myfile);
//the integrity hash data .