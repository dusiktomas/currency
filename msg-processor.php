<?php
header('Content-type: application/json');
require 'classes/Database.php';
require 'classes/MessageProcessor.php';

if(isset($_POST)){
  try{
    $data = new MessageProcessor();
    $data->saveJsonMessage();
  }catch(Exception $e){
    print('System error: '.$e->getMessage());
    return;
  }
  print 'Processed!';
}
