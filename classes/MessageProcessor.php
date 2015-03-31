<?php
class MessageProcessor{
  
  private $jsonMessage;
  private $validPostMap = array(
    'userId',
    'currencyFrom',
    'currencyTo',
    'ammountSell',
    'ammountBuy',
    'rate',
    'timePlaced',
    'originatingCountry',
  );

  public function __construct(){
    $this->jsonMessage = $this->processRawData();
    $this->validJsonData();
  }

  private function processRawData(){
    $data = json_decode(file_get_contents('php://input'), true);
    if($data === Null){
      throw new Exception('Json Parser Error!');
    }
    return $data;
  }

  private function validJsonData(){
    foreach($this->getJsonMessage() as $key=>$val){
      if(! in_array($key, $this->getValidPostMap())){
        throw new Exception('Unexpected post: '.$key);
      }
    }
  }

  public function saveJsonMessage(){
    $valuesDefinition = implode(',',$this->getValidPostMap());
    $values = "'".implode("','", $this->getJsonMessage())."'";
    $query = "INSERT INTO messages($valuesDefinition) VALUES ($values)";
    if(Database::handler()->query($query)){
      return true;
    }
    throw new Exception('Saving failed! Internal error');
  }

  private function getValidPostMap(){
    return $this->validPostMap;
  }

  private function getJsonMessage(){
    return $this->jsonMessage;
  }
}
