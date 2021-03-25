<?php


namespace App\Hellper;

use Illuminate\Support\Facades\Http;
use GuzzleHttp\Exception\ConnectException;


class Payment {

    public const APLICATION_ID = "C0ur$3$@pp00082";
    public const SERVICE_ID = 'C0ur$3$S300142';
    public const PAYEE_ID="0010050057";
    public const APLICATION_KEY ="k3Jv5lc0p8";
    public const APLICATION_SALT ="peoG26LNyG";
    public const CURRENCY ="SDG"; 


    public static function appIntegraty($amount , $customerRef)
    {
       $integraty = self::APLICATION_KEY.'|'.
                    self::APLICATION_ID.'|'.
                    self::SERVICE_ID.'|'.
                    $amount.'|'.
                    self::CURRENCY.'|'.
                    $customerRef.'|'.
                    self::APLICATION_SALT;

        return hash('sha256',$integraty);
    }


    public static function data($amount , $customerRef)
    {
        $paymentRequest = [
            "applicationId"=> self::APLICATION_ID ,
            "serviceId"=> self::SERVICE_ID ,
            "payeeId"=> self::PAYEE_ID,
            "customerRef"=> $customerRef,
            "currency"=> self::CURRENCY,
            "amount"=> $amount,
            "paymentInfo"=>[
                "accountNo"=>"123456",
                "customerName"=>"Mohammed Ahmed",
                "serviceType"=>"123"
            ],
            "hash"=> self::appIntegraty($amount , $customerRef),
        ];

        return $paymentRequest;
    }


    public static function payed($course)
    {
        $amount = $course->amount + $course->feeses ;
        $customerRef = uniqid();
        \Session::put('customerRef', $customerRef);

        try {
       $response =  Http::withHeaders([
                "Content-Type: application/json",
                "Cookie: SCOUTER=z2qu6oqpugr3h4"
        ])
        ->post("https://syberpay.sybertechnology.com/syberpay/getUrl", self::data($amount , $customerRef));

       }
       catch (ConnectException $e) {
        return $e;
       }
        return redirect(json_decode($response)->paymentUrl);
    }

    public static function listner($request)
    {

    }

    public static function listnerIntegraty($postRequest)
    {
        $integraty = self::APLICATION_KEY.'|'.
                     $postRequest['transactionId'].'|'.
                     $postRequest['token'].'|'.
                     self::APLICATION_SALT;

        echo $integraty ."<br/>??". \Session::get('customerRef');

        // return $integraty;
    }

}