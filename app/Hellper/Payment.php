<?php


namespace App\Hellper;

use Illuminate\Support\Facades\Http;


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
                    self::APLICATION_SALT.'|';
                    self::CURRENCY.'|';
                    $amount.'|';
                    $customerRef.'|';
                    self::SERVICE_ID;

        return hash('sha256',$integraty);
    }


    public static function data($amount , $customerRef)
    {
        $paymentRequest = array(
            "applicationId"=> self::APLICATION_ID ,
            "payeeId"=> self::SERVICE_ID ,
            "serviceId"=> self::PAYEE_ID,
            "customerRef"=> $customerRef,
            "currency"=> self::CURRENCY,
            "amount"=> $amount,
            "paymentInfo"=>array(
                "accountNo"=>"123456",
                "customerName"=>"Mohammed Ahmed",
                "serviceType"=>"123"
            ),
            "hash"=> self::appIntegraty($amount , $customerRef),
        );

        return $paymentRequest;
    }


    public static function payed($course)
    {
        $amount = $course->amount + $course->fees;
        $customerRef = uniqid();
        \Session::put('customerRef', $customerRef);

       $response =  Http::withHeaders([
                "Content-Type: application/json",
                "Cookie: SCOUTER=z2qu6oqpugr3h4"
        ])
        ->post("https://syberpay.sybertechnology.com/syberpay/getUrl", self::data($amount , $customerRef));

            // $res = Http::get('http://hashzo.com/api/free/products');
            // return $res;
            // $curl = curl_init();
            // curl_setopt_array($curl, array(
            // CURLOPT_URL => "https://syberpay.sybertechnology.com/syberpay/getUrl",
            // CURLOPT_RETURNTRANSFER => true,
            // CURLOPT_ENCODING => "",
            // CURLOPT_MAXREDIRS => 10,
            // CURLOPT_TIMEOUT => 0,
            // CURLOPT_FOLLOWLOCATION => true,
            // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            // CURLOPT_CUSTOMREQUEST => "POST",
            // CURLOPT_POSTFIELDS => self::data($amount , $customerRef),
            // CURLOPT_HTTPHEADER => array(
            //     "Content-Type: application/json",
            //     "Cookie: SCOUTER=z2qu6oqpugr3h4"
            // ),
            // ));
            // $response = curl_exec($curl);

            // curl_close($curl);

        $re =  json_decode($response);
        return $re->responseMessage.'<br>'.$re->status;
        // return \Session::get('customerRef');
    }

}