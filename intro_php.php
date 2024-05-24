<?php
    date_default_timezone_set('Africa/Nairobi');

    print "This is the first lesson";
    //Displaying a sentence or a string

    print "<br>";

    echo "Today is Monday"; 

    print '<br>';

    print 165916; //this is an integer

    print '<br>';

    print '4564';

    print '<br>';

    print '15 + 45'; //this is a string

    print '<br>';

    echo 15 + 45; //this will dispaly the result of the operation

    //php will help us display dynamic content (Time/Space)
    print '<br>';

    print date('l'); //display the current week date
    
    print '<br>';

    print date ('l', strtotime("tomorrow")); //Display the week day of tomorrow

    print '<br>';

    print date('l', strtotime("+5 days"));

    print '<br>';

    //print date('d/M/Y')

    print date ('d/M/Y', strtotime("+5 months"));

    print '<br>';

    print date('jS F Y, l');

    print '<br>'; //Using HTML to break a line

    print " Today is: ". date('l jS F Y H:i:s');

    print '<br>';

    $fname = "Alex Okama"; //Declaration of a variable or String [or a (group of) word(s)]

    $yob = 2004; //Creating (Declaring) a PHP Variable
    $birth_date = '24-05-2014';

    print $fname;
    print '<br>';

    print $birth_date;
    print '<br>';

    $age = date('Y')-$yob;
    print  $age;
    print '<br>';

    $birthdate = new DateTime($birth_date);

    print $fname. " is ". $age. " years old";
    print '<br>';

    $adult_age = 18;
    

    if ($age >= $adult_age) {
        print $fname. " is an adult"; //{} event in block will happen if the condition is true
    } else {
        print $fname. " is NOT an adult"; //{} event will happen if the condition is false
    }

    print '<br>';

    //Variable Characteristics

    $lname = "Okama"; //Variables are case sensitive. $lname >< $Lname

    print "His last name is $lname"; 
    print "<br>";

    print 'His last name is $lname';
    print '<br>';

    print 'His last name is '. $lname;
    print '<br>';

    //Another way of declaring a variable is by using an array.
    $pers['lname'] = "Okama";

    print $pers ['lname'];
    print '<br>';

    define('lname', 'Okama');
    print lname;


?>
