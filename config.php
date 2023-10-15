<?php
    if($_SERVER['HTTP_ORIGIN'] == 'https://webappapi-server.azurewebsites.net'){
        
        $result = array('current_version'=> 376, 'required_version' => 376); 
        echo json_encode($result);

    }else{
        http_response_code(403);
        die('<h1>Forbidden</h1>');
        
    }
?>
