<?php
$responseText = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['prompt'])) {
    $apiKey = 'AIzaSyC1DebI6KMNiyTTVOlKsmztyo5yKm_wcTM'; // Replace with your Gemini API key
    $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=$apiKey";

    $prompt = $_POST['prompt'];
    $postData = [
        "contents" => [
            [
                "parts" => [
                    ["text" => $prompt]
                ]
            ]
        ]
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json'
    ]);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        $responseText = 'Curl error: ' . curl_error($ch);
    } else {
        $responseData = json_decode($response, true);
        $responseText = $responseData['candidates'][0]['content']['parts'][0]['text'] ?? "No response received.";
    }

    curl_close($ch);
}
?>
