<h1>Arrays </h1>

<?php
//index arrays
echo'something';

$fname=["Alex okama ","peter","James"];

print_r ($fname);


$colors=array("Black","Green","Yellow","White","Red","Blue");
?>
<pre>
<?php  print_r($colors); ?>
  </pre>
<?php print $fname [1] ?>
<?php
// Associative array 
$user =[
    "Fulname"=>"Alex Okama",
    "email" => "Aokamayo@yahoo.com",
    "phone" =>"+2547247888"


];
?>
<pre>

<?php print_r($user)?>
</pre>


<?Php
//multidimentional arrays
$user_details = [
"Director"=>array(
    "Fulname"=>"Alex Okama",
    "email" => "Aokamayo@yahoo.com",
    "phone" =>[
        "Mobile" => "+249599595959",
        "Work" =>"+67228288",
        "cell"=>"243994949"
    ]
    ),
  
    "secretary"=>array(
        "Fulname"=>"Alex Okama",
        "email" => "Aokamayo@yahoo.com",
        "phone" =>[
            "Mobile" => "+249599595959",
            "Work" =>"+67228288",
            "cell"=>"243994949"
]
        ),

        "Director"=>array(
            "Fulname"=>"Alex Okama",
            "email" => "Aokamayo@yahoo.com",
            "phone" =>[
                "Mobile" => "+249599595959",
                "Work" =>"+67228288",
                "cell"=>"243994949"
    ]
            ),
        ];


print $user_details["secretary"]["phone"]["work"];
?>
<pre>
    <?php print_r($user_details)?>
</pre>

<?php
$items=["Books","Pen", 456,46.5,"File54"];
?>
<pre>
</pre>
<?php

$age = [45,42,23];
$user_age = array_combine($user,$age);

$user_data = array_merge($user,$age);

?>