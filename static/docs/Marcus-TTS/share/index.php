<?php 
if (array_key_exists("text", $_GET)) {
    $data = [
        "voice" => "en_male_narration",
        "text" => $_GET["text"]
    ];

    $options = [
        "http" => [
            "header" => "Content-Type: application/json\r\n",
            "method" => "POST",
            "content" => http_build_query($data)
       ]
    ];

    $context = stream_context_create($options);
    $result = file_get_contents("https://ottsy.weilbyte.dev/api/generation", false, $context);
    if ($result === false) {
        header("Content-Type: text/plain");
        echo "Failed to get text from API";
    }
    else {
        $result = json_decode($result);
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