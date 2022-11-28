<?php

class User {
public $id,$nama,$alamat,$negara;

public function __construct($id = 0 ,$nama = '',$alamat = '',$negara = '') {
$this->id = $id;
$this->nama = $nama;
$this->alamat = $alamat;
$this->negara = $negara;
}

public function setId($id){
$this->id = $id;
}

public function setNama($nama){
$this->nama = $nama;
}

public function setAlamat($alamat){
$this->alamat = $alamat;
}

public function setNegara($negara){
$this->negara = $negara;
}

public function getId(){
return $this->id;
}
public function getNama() {
return $this->nama;
}
public function getAlamat(){
return $this->alamat;
}
public function getNegara(){
return $this->negara;
}
public function display(){
echo 'ID: ' . $this->getId() . '<br>';
echo 'Nama: ' . $this->getNama() . '<br>';




echo 'Alamat: ' . $this->getAlamat() . '<br>';
echo 'Negara: ' . $this->getNegara() . '<hr>';
}
}

class PewarisanUser extends User{

}
$customer1 = new PewarisanUser();
$customer1->setId(1);
$customer1->setNama('maria');
$customer1->setAlamat('berlin');
$customer1->setNegara('german');
echo $customer1->display();
$customer2 = new PewarisanUser();
$customer2->setId(2);
$customer2->setNama('ana');
$customer2->setAlamat('mexico');
$customer2->setNegara('mexico');
echo $customer2->display();
$customer3 = new PewarisanUser();
$customer3->setId(3);
$customer3->setNama('antonio');
$customer3->setAlamat('mexico');
$customer3->setNegara('mexico');
echo $customer3->display();
$customer4 = new PewarisanUser();
$customer4->setId(4);
$customer4->setNama('thomas');
$customer4->setAlamat('london');
$customer4->setNegara('uk');
echo $customer4->display();