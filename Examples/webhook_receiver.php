<?php
/*
Cloakform PHP Webhook Receiver
Author: Ralph van der Sanden
INTRO:
1. A webhook will be sent in JSON format.
2. This example script reads the JSON data.
3. By looking at the event ($type) you'll know which values to expect and what to do with it.
4. Add your code to process/store the data
5. If processing is succesfull then echo [webhook_received] to let us know you received and processed the webhook.
*/
require_once("./Cloakform/curl_api_request.php");
// Load posted json data:
$json = file_get_contents('php://input');
$json = json_decode($json, TRUE);

// Example how to read the received variables:
$type = $json['type']; // this variable will tell you which event triggered this webhook
$form_id = $json['form_id'];
$customer_id = $json['customer_id'];

// Important:
// To know which variables are available for a specific event go to:
// https://www.cloakform.com/documentation/webhooks/events/

// [webhook_received] is a signal for us that you received and processed the webhook
// Only echo when everything on your end is processed.
// if we don't receive this signal we'll try 5 more times at larger intervals.
echo '[webhook_received]'; // important
?>