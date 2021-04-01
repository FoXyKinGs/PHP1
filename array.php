<?php 

$data = [
  "id" => 1,
  "name" => "Leanne Graham",
  "username" => "Bret",
  "email" => "Sincere@april.biz",
  "address" => [
    "street" => "Kulas Light",
    "suite" => "Apt. 556",
    "city" => "Gwenborough",
    "zipcode" => "92998-3874"
  ],
  "phone" => "1-770-736-8031 x56442",
  "website" => "hildegard.org",
  "hobbies" => ["Swimming"]
];

$data["name"] = "Moch Rizaldi Ananda Kurnia";
$data["email"] ="Mochrizaldianandakurnia21@gmail.com";
$data["hobbies"] = ["Hiking","Gaming","Otaku"];
print_r($data);

echo "<pre>";

[ 'address' => [ 'street' => $street, 'city' => $city ]] = $data;

echo $street.", ".$city;

?>

