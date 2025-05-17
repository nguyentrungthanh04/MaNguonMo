<?php  

class ProductModel
{
    // Thuoc tinh cua lop ProductModel
    private $ID;
    private $Name;
    private $Description;
    private $Price;

    //Constructor de khoi tao doi tuong ProductModel
    public function __construct($ID, $Name, $Description, $Price){
        $this->ID = $ID;
        $this->Name =$Name;
        $this->Description = $Description;
        $this->Price = $Price;
    }

    // Getter va Setter cho thuoc tinh ID
    public function getID(){
        return $this->ID;
    }

    public function setID($ID){
        $this->ID = $ID;
    }
    // Getter và Setter cho thuộc tính Name 
    public function getName() 
    { 
        return $this->Name; 
    } 
 
    public function setName($Name) 
    { 
        $this->Name = $Name; 
    } 
 
    // Getter và Setter cho thuộc tính Description 
    public function getDescription() 
    { 
        return $this->Description; 
    } 
 
    public function setDescription($Description) 
    { 
        $this->Description = $Description; 
    } 
 
    // Getter và Setter cho thuộc tính Price 
    public function getPrice() 
    { 
        return $this->Price; 
    } 
 
    public function setPrice($Price) 
    { 
        $this->Price = $Price; 
    } 
}

?>