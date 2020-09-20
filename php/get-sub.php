<?php


    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://rzp_test_dePlubEU9z2Fn8:cv9J9wl3AWyCHYNqc26GHpYJ@api.razorpay.com/v1/subscriptions",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "plan_id=plan_FfHbMinPRndfNV&total_count=100&customer_notify=1",
        CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
            "content-type: application/x-www-form-urlencoded",
            "postman-token: 67d92778-3ca8-ffb4-9680-c384d115f95a"
        ),
    )); 

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        // echo $response;
        echo json_encode($response);
    }
?>