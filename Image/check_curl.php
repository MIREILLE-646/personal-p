<?php
// Check if cURL is enabled
if (function_exists('curl_version')) {
    echo 'cURL is enabled on this server.';
} else {
    echo 'cURL is not enabled on this server.';
}


// API endpoint URL
$apiUrl = 'https://your-odoo-instance.com/api/endpoint';

// API key
$apiKey = '14781b7407a19275240a290578fc3d3b9ccef245';

// Set up headers
$headers = [
    'Authorization: Bearer ' . $apiKey,
    'Content-Type: application/json', // Adjust content type based on your API requirements
];

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// Execute cURL session
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'cURL error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Handle the API response here
// ...

?>