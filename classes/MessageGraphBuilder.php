<?php
class MessageGraphBuilder{
  const HIGHLIGHT_COLOR = '#FF5A5E';

  private function rand_color() {
    return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
  }

  public function getCurrencyFrom(){
    return $this->buildArray(Database::arrayQuery(
       'SELECT currencyFrom AS label, COUNT( * ) AS count FROM `messages` GROUP BY currencyFrom'
    ));
  }

  public function getCurrencyTo(){
    return $this->buildArray(Database::arrayQuery(
      'SELECT currencyTo AS label, COUNT( * ) AS count FROM `messages` GROUP BY currencyTo'
    ));
  }

  public function getOriginatingCountry(){
    return $this->buildArray(Database::arrayQuery(
      'SELECT originatingCountry AS label, COUNT( * ) AS count FROM `messages` GROUP BY originatingCountry'
    ));
  }

  public function buildGraphData(){
    return array(
      'currencyFrom' => $this->getCurrencyFrom(),
      'currencyTo' => $this->getCurrencyTo(),
      'originatingCountry' => $this->getOriginatingCountry(),
    );
  }

  private function buildArray($array){
    $result = array();
    foreach($array as $field){
      $result[] = array(
        'label' => $field['label'],
        'value' => $field['count'],
        'color' => $this->rand_color(),
        'hightlight' => self::HIGHLIGHT_COLOR,
      );
    }
    return $result;
  }

  public static function get(){
    return new self();
  }
}
