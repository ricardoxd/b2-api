<?php
require "../b2_api.php"; // Include the API wrapper

$account_id = ""; // Account ID, obtained from your B2 bucket page
$app_key    = ""; // Application ID, obtained from your B2 bucket page
$file_id    = ""; // The ID of the file you wish to download

$b2 = new b2_api; // Create a new instance of b2_api
$output = $b2->b2_authorize_account($account_id, $app_key); // Runs b2_authorize_account
$output = $b2->b2_download_file_by_id($file_id); // Runs b2_download_file_by_id

echo "b2_download_file_by_id\n\n";
var_dump($output);