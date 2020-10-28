
<!DOCTYPE html>
<html lang ="en">

<!-- Template from w3schools-->

<title>W3.CSS Template</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!-- Header -->

<?php include ("header.php") ?>

<!-- Main S -->

<div class= "style" style="margin-left:620px"> 

<!-- Adding the countries to the drop down list-->
<form action="form.php" method="get"> 

  <select name="country" id="input"> 
  <option>Select a Country</option>
  <option>Italy</option>
  <option>Luxembourg</option>
  <option>Belgium</option>
  <option>Denmark</option>
  <option>Finland</option>
  <option>France</option>
  <option>Slovakia</option>
  <option>Slovenia</option>
  <option>Germany</option>
  <option>Greece</option>
  <option>Ireland</option>
  <option>Netherlands</option>
  <option>Portugal</option>
  <option>Spain</option>
  <option>Sweden</option>
  <option>United Kingdom</option>
  <option>Cyprus</option>
  <option>Lithuania</option>
  <option>Czech Republic</option>
  <option>Estonia</option>
  <option>Hungary</option>
  <option>Latvia</option>
  <option>Malta</option>
  <option>Austria</option>
  <option>Poland</option>
  </select>

 <!-- Setting up the Submit button  -->
  <button type="submit">Submit</button> 
</form>
</div>
 <br>
<!-- Here I added a mini table just to show the country and the capital-->
<table border = "2" style = " margin-left:620px"> 
  <tr>
      <th>Country</th>
      <th>Capital</th>
  </tr>
  <tr>


<?php
// Setting up array //
$Countriesinfo = array  ( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

// The objective of this is verify if the value $Get and the value country exist in the URL //
if (isset($_GET['country'])) {         

  // This part here is just to make easier the utility of data, avoid repeating $Get all the time //
  $countryKey = $_GET['country']; 

  
// This code is to make sure that exists a key in the array associated to that value //
  if (array_key_exists($countryKey, $Countriesinfo)) {

      // ucfirst is very useful, because if I forget to put a caps letter, this function will correct for me immediately //
      $countryUpperCase = ucfirst($countryKey);
      $countryCapital = $Countriesinfo[$countryKey];
      
      // echo will generate two cells with the name of the country and the capital which are the td (data's table) //
      echo "
          <td>$countryUpperCase</td>
          <td>$countryCapital</td>
      ";
  }

} else {
  echo "
      <td> None </td>
      <td> None </td>
  ";
}

?>
</tr>
</table>
<br>
 <!-- Footer -->
    <?php
      include ("footer.php");
    ?>
</html>






