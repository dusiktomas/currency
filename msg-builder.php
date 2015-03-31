<?php
header('Content-type: application/json');
require 'classes/Database.php';
require 'classes/MessageGraphBuilder.php';

$data = new MessageGraphBuilder();
return print(json_encode($data->buildGraphData()));
