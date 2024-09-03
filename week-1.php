<?php

abstract class Item {
    private $name;
    private $brand;
    private $price;
    private $stockQuantity;

    public function __construct($name, $brand, $price, $stockQuantity) {
        $this->name = $name;
        $this->brand = $brand;
        $this->price = $price;
        $this->stockQuantity = $stockQuantity;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getStockQuantity() {
        return $this->stockQuantity;
    }

    public function setStockQuantity($stockQuantity) {
        $this->stockQuantity = $stockQuantity;
    }

    abstract public function getPhoneDetails();
}

class Smartphone extends Item {
    private $operatingSystem;

    public function __construct($name, $brand, $price, $stockQuantity, $operatingSystem) {
        parent::__construct($name, $brand, $price, $stockQuantity);
        $this->operatingSystem = $operatingSystem;
    }

    public function getPhoneDetails() {
        return "Smartphone: {$this->getName()}, Brand: {$this->getBrand()}, Price: {$this->getPrice()}, OS: {$this->operatingSystem}, Stock: {$this->getStockQuantity()}";
    }

    public function getOperatingSystem() {
        return $this->operatingSystem;
    }

    public function setOperatingSystem($operatingSystem) {
        $this->operatingSystem = $operatingSystem;
    }
}

class Inventory {
    private $phones = [];

    public function addPhone(Item $phone) {
        $this->phones[] = $phone;
    }

    public function deletePhone($name) {
        foreach ($this->phones as $key => $phone) {
            if ($phone->getName() === $name) {
                unset($this->phones[$key]);
                echo "Phone {$name} deleted from inventory.\n";
                return;
            }
        }
        echo "Phone {$name} not found in inventory.\n";
    }

    public function updatePhone($name, $newPrice, $newStockQuantity) {
        foreach ($this->phones as $phone) {
            if ($phone->getName() === $name) {
                $phone->setPrice($newPrice);
                $phone->setStockQuantity($newStockQuantity);
                echo "Phone {$name} updated.\n";
                return;
            }
        }
        echo "Phone {$name} not found in inventory.\n";
    }

    public function displayInventory() {
        foreach ($this->phones as $phone) {
            echo $phone->getPhoneDetails() . "\n";
        }
    }
}


$inventory = new Inventory();

$phone1 = new Smartphone("Galaxy S21", "Samsung", 799.99, 50, "Android");
$phone2 = new Smartphone("iPhone 13", "Apple", 999.99, 30, "iOS");

$inventory->addPhone($phone1);
$inventory->addPhone($phone2);

$inventory->displayInventory();

$inventory->updatePhone("Galaxy S21", 749.99, 45);

$inventory->deletePhone("iPhone 13");

$inventory->displayInventory();
?>
