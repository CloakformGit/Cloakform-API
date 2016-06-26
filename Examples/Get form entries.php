<?php
require_once('../Cloakform/curl_api_request.php');

// Get form entries
$request = array(
    'action' => 'getFormEntries', 
    'form_id' => '',
    'search' => '', // search by question/question ID, answer, date or recordid.
    'search_type' => '', // tell us what your searching for. Possible values: question, questionID, answer, date or recordid.
    'from' => 'yyyy-mm-dd', // from date, leave empty to get all entries, max 5000 per request
    'till' => 'yyyy-mm-dd', // till date, leave empty to get all entries
    'offet' => '', // entry offset, from which entry do we have to start fetching data
 );
 
$Cloakform_result = curl_api_request($request);
if($Cloakform_result->{'error_message'} == '') {

   foreach($Cloakform_result as $entry){
    
    /* Returns:
    
    $entry->recordID;
    $entry->date_started;
    $entry->date_finished;
    $entry->status;
    $entry->total_corrections;
    $entry->payment_status;
    $entry->device_information;
    
    // iterate through the entries
    foreach($entry['entries'] as $key => $entry_data) {
	 echo $customer['name']; 
	}
	
    */
    
	}
}
else
{
// process given error(s)
echo $Cloakform_result->{'error_message'};
}
?>