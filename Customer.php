<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
class Customer {
public $id, $nama, $alamat, $negara;
}
$customer1 = new Customer();
$customer2 = new Customer();
$customer3 = new Customer();
$customer4 = new Customer();

echo 'ID: ' . $customer1->id = 1 . '<br>';
echo 'Nama: ' . $customer1->nama = "maria" . '<br>';
echo 'Alamat: ' . $customer1->alamat = "berlin" . '<br>';
echo 'Negara: ' . $customer1->negara = "german" . '<hr>';

echo 'ID: ' . $customer2->id = 2 . '<br>';
echo 'Nama: ' . $customer2->nama = "Ana" . '<br>';
echo 'Alamat: ' . $customer2->alamat = "Mexico" . '<br>';
echo 'Negara: ' . $customer2->negara = "Mexico" . '<hr>';

echo 'ID: ' . $customer3->id = 3 . '<br>';
echo 'Nama: ' . $customer3->nama = "antonio" . '<br>';
echo 'Alamat: ' . $customer3->alamat = "mexico" . '<br>';
echo 'Negara: ' . $customer3->negara = "mexico" . '<hr>';

echo 'ID: ' . $customer4->id = 4 . '<br>';
echo 'Nama: ' . $customer4->nama = "thomas" . '<br>';
echo 'Alamat: ' . $customer4->alamat = "london" . '<br>';



echo 'Negara: ' . $customer4->negara = "uk" . '<hr>';
        ?>
    </body>
</html>
