<?php
$user = "test_user";
$pwd = "pwd";
$host = "localhost";
$dbName = "test_phpdb";
$dns = "mysql:host{$host};port=8889;dbname={$dbName};";
$conn = new PDO($dns, $user, $pwd);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$pst = $conn->query("select * from mst_shops");
$result = $pst->fetchAll();
// var_dump($result);
echo "<pre>";
print_r($result);
echo "</ pre>";

$conn = null;