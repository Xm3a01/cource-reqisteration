<?php

require('./paymentData.php');
session_start();
//this the customerRef and should be save in post or get or cookie 
$customerRef=$_SESSION['customerRef'];
$amount=$_POST['amount'] + $_POST['fee'] ;

//the integrity hash data .
$hpara=  $applicationKey .'|'.
         $applicationId .'|'
         . $serviceId .'|'.
          $amount.'|'.
           $currency .'|'.
            $customerRef .'|'.
           $applicationSalt;


// echo $hpara."<br/>" ;

$hash=hash('sha256',$hpara);

// echo $hash."<br/>";


$test = array(
  "applicationId"=> $applicationId ,
  "payeeId"=>$payeeId ,
  "serviceId"=>$serviceId,
  "customerRef"=>$customerRef,
  "currency"=>$currency,
  "amount"=>$amount,
  "paymentInfo"=>array(
    "accountNo"=>"123456",
    "customerName"=>"Mohammed Ahmed",
    "serviceType"=>"123"
  ),
  "hash"=>$hash
);
$res = json_encode($test);

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://syberpay.sybertechnology.com/syberpay/getUrl",
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

$newURL=json_decode($response)->paymentUrl;
$_SESSION['transactionId']=json_decode($response)->transactionId;
echo $response;
// Add transaction id to session 

header('Location: '.$newURL);