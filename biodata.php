<?php 

$biodata = [
  "name" => "Moch Rizaldi Ananda Kurnia",
  "age" => 18,
  "hobbies" => [
    "Hiking",
    "Gaming",
    "Otaku"
  ],
  "IsMarried" => false,
  "schoolList" => [
    [
    "name" => "SDN Cinunuk 08",
    "yearIn" => 2008,
    "yearOut" => 2014,
    "major" => null
    ],
    [
      "name" => "SMPN 3 Cileunyi",
      "yearIn" => 2014,
      "yearOut" => 2017,
      "major" => null
    ],
    [
      "name" => "SMK Bakti Nusantara 666",
      "yearIn" => 2017,
      "yearOut" => 2020,
      "major" => "Rekayasa Perangkat Lunak"
      ]
    ],
  "skills" => [
    [
      "skillName" => "JavaScript",
      "level" => "Advanced"
    ],
    [
      "skillName" => "PHP",
      "level" => "Beginner"
    ]
    ],
  "interestInCoding" => true
];

print_r($biodata);

?>