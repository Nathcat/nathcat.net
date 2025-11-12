<?php 
if (array_key_exists("text", $_GET)) {
    $data = json_encode([
        "voice" => "en_male_narration",
        "text" => $_GET["text"]
    ]);

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://ottsy.weilbyte.dev/api/generation");
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $headers = array(
        "Accept: application/json",
        "Content-Type: application/json"
    );

    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_USERAGENT, "cURL/PHP");
    $result = curl_exec($curl);
    curl_close($curl);

    if ($result === false) {
        header("Content-Type: text/plain");
        echo "Failed to get text from API";
    }
    else {
        $result = json_decode($result, true);
        if ($result["success"] === false) {
            header("Content-Type: text/plain");
            echo "Failed to get text from API: " . $result["error"];
        }
        else {
            header("Content-Type: audio/mpeg");
            echo base64_decode($result["data"]);
        }
    }
}
else {
    header("Content-Type: text/plain");
    echo "Must specify text parameter.";
}
?>