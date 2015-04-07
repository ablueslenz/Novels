<?php
$q = $_GET['value'];


//$genre = $_GET['genre'];

$con = mysqli_connect('localhost','root','root','NAD');

if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"NAD");

$query = "Select *  From novels where Title like '%$q%' OR ISBN like '%$q%' OR Lastname like '%$q%' OR Firstname like '%$q%' OR PublicationYear like 
'%$q%' OR Subgenre like '%$q%'";

$run = mysqli_query($con, $query);

if(mysqli_num_rows($run) > 0) {
    while($row=mysqli_fetch_array($run)) {
      
      $Title = $row['Title'];
      $Lastname = $row['Lastname'];
      $Firstname = $row['Firstname'];
      $ISBN = $row['ISBN'];
      $bookimage = $row['bookimage'];
      $PublicationYear = $row['PublicationYear'];
      $Audience = $row['Audience'];
      $Subgenre = $row['Subgenre'];
      $BirthCountry = $row['BirthCountry'];
      $Translations = $row['Translations'];
      $FirstEdition = $row['FirstEdition'];
      $Subjects = $row['Subjects'];



      echo "<h1>Search Results</h1>";
      echo "<hr>"; 
    
      echo "<p>Title: <a href=\"search_display.php?id=$q2\">". $Title ."</a>\n</p>";
      echo "<p>Author: $Lastname, $Firstname</p>";
      echo "<p>ISBN: $ISBN</p>";
    
     
      

echo "<div>          
     <hr>
      <p>Publication Year: $PublicationYear</p></div>";

echo  "<div>          
      
      
      <p>Audience: $Audience</p>
       
      </div>
      ";
 echo  "<div>          
      
      <p>Subgenre(s):  $Subgenre</p>
      
      </div>";

 echo
      "<div>          
      
      <p>Author's Birth Country: $BirthCountry</p>
      
     
      </div>";

  echo "<div>          
      
      <p>Translations: $Translations</p></div>";

   echo "<div>
      <p>Format: $FirstEdition</p></div>"; 

   echo "<div>
         <p>General Subjects: $Subjects</p>
        <hr>
        </div>";
      
     

    }
}
else {
  echo "<p>Search not found</p>";
}

?>
