
<?php


$data = file_get_contents("https://jsonplaceholder.typicode.com/albums/1");


echo $data."<br>";


Print_r($http_response_header[0]);


// Get the HTTP response code
foreach ($http_response_header as $key => $r) {
  if (stripos($r, 'HTTP/') === 0) {
    list(,$code, $status) = explode(' ', $r, 3);
    echo "<br> Code: $code, Status: $status";
    if($code == 200){
        echo '<br>Success .. Redirect to index page';
    }
  }
}