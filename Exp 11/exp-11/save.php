<?php
include 'dbconfig.php';
include 'Index.html';
include 'API.php';
include '.htaccess';
if (isset($_POST['order_id']) && $_POST['order_id']!="") {
    $order_id = $_POST['order_id'];
    $url = "http://localhost/php_practice/API.php".$order_id;
    $client = curl_init($url);
    curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
    $response = curl_exec($client);
    $result = json_decode($response,true);
    echo "<table>";
    echo"<tr><td>Order ID:</td><td>";
    echo $result['order_id'];
    echo "</td></tr>";
    echo "<tr><td>Amount:</td><td>";
    echo $result['amount'];
    echo "</td></tr>";
    echo "<tr><td>Response Code:</td><td>";
    echo $result['response_code'];
    echo "</td></tr>";
    echo  "<tr><td>Response Desc:</td><td>";
    echo $result['response_desc'];
    echo "</td></tr>";
    echo "</table>"; }
?>