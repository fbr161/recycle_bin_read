<?php

    $url="http://localhost/recycle_bin/api/api/post/api_read_profile.php";
     
    $data = array( "email"=> "lg@gmail.com" );
    $ch = curl_init( $url );
    # Setup request to send json via POST.
    $payload = json_encode( $data );
     
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    # Return response instead of printing.
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    # Send request.
    $result = curl_exec($ch);
    curl_close($ch);

    //user information
    $user_info = json_decode($result, true);
    print_r($user_info);
    /// end

?>
