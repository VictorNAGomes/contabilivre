<?PHP
function sendMessage($releaseDate, $gameTitle) {
    $content      = array(
        "en" => 'O jogo ' . $gameTitle . ' será lançado hoje!!!',
        "pt" => 'O jogo ' . $gameTitle . ' será lançado hoje!!!'
    );
    $hashes_array = array();
    array_push($hashes_array, array(
        "id" => "access-button",
        "text" => "Acessar",
        "icon" => "http://i.imgur.com/N8SN8ZS.png",
        "url" => "https://mygamelist1.000webhostapp.com/index.php"
    ));
    $fields = array(
        'app_id' => "afea1b54-70cb-4459-b4ba-24c6d307ac9e",
        'included_segments' => array(
            'Subscribed Users'
        ),
        'data' => array(
            "foo" => "bar"
        ),
        'contents' => $content,
        'web_buttons' => $hashes_array,
        'send_after' => $releaseDate . " 16:22:00 GMT-0300"
    );
    
    $fields = json_encode($fields);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charset=utf-8',
        'Authorization: Basic MzkzZTI3YTEtMDZiNC00ZDE0LWEyNTUtYmM1YmZkMzI5MDVl'
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    return $response;
}
?>