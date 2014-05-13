//Array que convertiremos en JSON
$miArray = array();

$json_data = json_encode($miArray);

    // echo "<pre>";
    // print_r(json_decode($json_data));
    // echo "</pre>";

    $post = file_get_contents('http://192.168.39.112:18080/captarjeta/seam/resource/rest/requestform_service/new_requestform',null,stream_context_create(array(
        'http' => array(
            'protocol_version' => 1.1,
            'user_agent'       => 'PHPExample',
            'method'           => 'POST',
            'header'           => "Content-type: application/json\r\n".
                                  "Connection: close\r\n" .
                                  "Content-length: " . strlen($json_data) . "\r\n",
            'content'          => $json_data,
        ),
    )));

    if ($post) {
        echo $post;
    } else {
        echo "POST failed";
    }
