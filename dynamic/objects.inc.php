<?php
class User {
  protected $idUser;
  protected $username;
  protected $password;
  protected $numberOfCommands;
  protected $rang;

  public function __construct($idUser,$username,$password,$numberOfCommands, $rang) {
    $this->idUser = $idUser;
    $this->username = $username;
    $this->password = $password;
    $this->numberOfCommands = $numberOfCommands;
    $this->rang = $rang;
  }

  public function getIdUser() {
    return $this->idUser;
  }

  public function getUsername() {
    return $this->username;
  }

  public function getPassword() {
    return $this->password;
  }

  public function getNumberOfCommands() {
    return $this->numberOfCommands;
  }

  public function getRang() {
    return $this->rang;
  }

  public function getToAdd() {
    return $this->getIdUser().';'.$this->getUsername().';'.$this->getPassword().';'.$this->getNumberOfCommands()."\n";
  }
}

class Category {
  protected $name;
  protected $description;
  protected $numberOfProducts;
  protected $nameImage;
  protected $disabled;

  public function __construct(array $data) {
      foreach($data as $key => $val) {
          if(property_exists(__CLASS__,$key)) {
              $this->$key = $val;
          }
      }
  }

  public function getName() {
    return $this->name;
  }
  public function getDescription() {
    return $this->description;
  }
  public function getNumberOfProducts() {
    return $this->numberOfProducts;
  }
  public function getNameImage() {
    return $this->nameImage;
  }
  public function getDisabled() {
    return $this->disabled;
  }
}

class Product {
  protected $name;
  protected $description;
  protected $price;
  protected $stock;
  protected $quantitySelected;
  protected $category;

  public function __construct(array $data) {
      foreach($data as $key => $val) {
          if(property_exists(__CLASS__,$key)) {
              $this->$key = $val;
          }
      }
  }
  public function getName() {
    return $this->name;
  }
  public function getDescription() {
    return $this->description;
  }
  public function getPrice() {
    return $this->price;
  }
  public function getStock() {
    return $this->stock;
  }
  public function getQuantitySelected() {
    return $this->quantitySelected;
  }
  public function getCategory() {
    return $this->category;
  }
  public function expose() {
    return get_object_vars($this);
}
}

?>
