<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials:true');
header('Access-Control-Allow-Methods: GET, POST, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Accept, Content-Type','Access-Control-Allow-Header');
header('Access-Control-Allow-Max-Age: 3600');
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD']==='OPTIONS') {
    return 0;
}