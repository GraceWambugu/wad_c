<h1>Loops</h1>

<h4> While loop</h4>
<?php
//while loop
$init = 0;
while($init <=10){
    print $init . "<br>";
    $init++;
}
?>

<h4>Do while</h4>
<?php
$i=11;
do{
  
    print $i . "<br>";
    $i++;
}while ($i <16);
?>

<h4>For </h4>
<?php
for($s=44;$s<55;$s+=2){
print $s . "<br>";

}
?>
<h4>Foreach</h4>
<?php
$months=["january","February","March","April","May","June","July","Agust","september","Octoober","November","December"];
foreach($months AS $month){
    print $month . ", " ;
}
?>

<form action=" ">
    <select name = "" id="">
        <option value="">--Months--</option>
        <?php
        foreach($month AS $month){
            echo"<option value =''>$month</option>";

        }
        ?>
    </select>
    <select name = "" id="">
        <option value="">--Years --</option>
        <?php
        $y=2015;
        while($y<2030);
            print"<option value=''>$y</option>";
            $y++;
        
?>
    </select>


