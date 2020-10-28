<!DOCTYPE html>
<html>

<!-- Header-->
<?php
include ("header.php");
?>

<!-- Body -->
<body>
<!-- Style of the table -->
<table border = "2" style = " margin-left:620px">

<?php
// Building the table with name of countries and its capitals //
$Countriesinfo = array  ( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
foreach($Countriesinfo as $x => $x_value){
    echo "<tr><td>". $x ."<td>".$x_value."</tr></td>";
}
?>
</table>
</body>

<br>
<!-- Adding footer -->
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-large"> 
<p>Powered by CJ</a></p>
</footer>

</html>
