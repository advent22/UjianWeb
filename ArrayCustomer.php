<?php

class ArrayCustomer {
public $Array = [
[
'id' => 1,
'nama' => 'maria',
'Alamat' => 'berlin',
'Negara' => 'german'
],
[
'id' => 2,
'nama' => 'ana',
'Alamat' => 'mexico',
'Negara' => 'mexico'
],
[
'id' => 3,
'nama' => 'antonio',
'Alamat' => 'mexico',
'Negara' => 'mexico'
],
[
'id' => 4,
'nama' => 'thomas',
'Alamat' => 'london',
'Negara' => 'uk'
]
];

public function display(){
foreach ($this->Array as $key => $value) {
echo 'ID: ' . $value['id'] . '<br>';
echo 'Nama: ' . $value['nama'] . '<br>';
echo 'Alamat: ' . $value['Alamat'] . '<br>';
echo 'Negara: ' . $value['Negara'];
echo '<hr>';
}
}
}
$ArrayCustomer = new ArrayCustomer();
echo $ArrayCustomer->display();