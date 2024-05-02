<?php
class Person {
  public string $firstName;
  public string $lastName;

  public function __construct(string $firstName, string $lastNama) {
    $this->firstName = $firstName;
    $this->lastName = $lastNama;
  }

  public function show() : void {
    echo "私の名前は{$this->lastName}{$this->firstName}です。" . PHP_EOL;
  }
}
?>