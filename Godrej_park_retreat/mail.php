<?php 
if(isset($_POST['submit'])){ 
      
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $message ="";
    $property = $_POST['mgh'];
    $email = $_POST['email'];
    $mobile = $_POST['phone'];
    $ipaddress = $_POST['ipaddress'];
    $enquiry = $_POST['message'];
    $subject = "Soparnika Life On The Green New Upcoming Project Property Landing Page";
    $message = "Name : ".$name ."\n"."Email : ". $email ."\n" . "Mobile : ".$mobile."\n" . "Message: ".$enquiry."\n"."property: ".$property."\n" . $_POST['message']."\n "."\n";
    $message .= "This email is coming from Soparnika Life On The Green New Upcoming Project Property Landing Page Form Submission";
     
      // API CAll For CRM Leads
    $apiUrl = "https://connect.leadrat.com/api/v1/integration/GoogleAds";
    $apiKey = "MWMwMTM5M2EtMjViMi00MGI1LTllNGUtYmEzM2RlOWE1ZTBm";

    $postData = array(
        "name" => $name,
        "email" => $email,
        "mobile" => $mobile,
        "location" => $ipaddress,
        // Add all other fields here...
    );

    $headers = array(
        "API-Key: " . $apiKey,
        "Content-Type: application/json",
    );

    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);

    if ($response === false) {
        echo "cURL Error: " . curl_error($ch);
    } else {
        echo "API Response: " . $response;
    }

    // API Call End For CRM Leads           
                
                                  $fields = array(
    "sender_id" => "SHHOME",
    "message" => "Property- .$property. Name- .$name., Mobile-.$mobile., Email- .$email. 
Regards, SearchHomes india pvt ltd",
    "template_id" => "1207163731895114985",
    "entity_id" => "1201159178483176795",
    "route" => "dlt_manual",
    "numbers" => "9036611811",
);
// ,8638868550,6264159415,8951927450, 8147267372, 9036611811
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: E2SO3Qc7HLJc7foeIWZrM8CAGhMFVV07L5YU9ZpykVYCWQ4BhTEBocweBqy6",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
    
					?>
						<script>
							window.location.href='thank_you.php';
						</script>
					<?php
    }
?>