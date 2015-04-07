<?php
$q2= $_GET['value'];


$con = mysqli_connect('localhost','root','root','NAD');

if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"NAD");

$query = "Select *  From novels where Title like '%$q2%' OR ISBN like '%$q2%' OR Lastname like '%$q2%' OR Firstname like '%$q2%' OR
PublicationYear like '%$q2%' OR Audience like '%$q2%' OR Subgenre like '%$q2%' OR AuthorCountry like '%$q2%' OR Language like '%$q2%' OR
Format like '%$q2%' OR Subjects like '%$q2%'";



$run = mysqli_query($con, $query);

if(mysqli_num_rows($run) > 0) {
    while($row=mysqli_fetch_array($run)) {

      $bookimage = $row['bookimage'];
     $Title = $row['Title'];
      $Lastname = $row['Lastname'];
      $Firstname = $row['Firstname'];
      $ISBN = $row['ISBN'];
      $Year = $row['PublicationYear'];
      $Audience = $row['Audience'];
      $Subgenre = $row['Subgenre'];
      $AuthorCountry = $row['AuthorCountry'];
      $Language = $row['Language'];
      $Format = $row['Format'];
      $Subjects = $row['Subjects'];

echo "<div>
    <p>$Title</p>
      <p>$Lastname, $Firstname</p>;
      <p>$ISBN</p>
      
      </div> ";


echo "<div>          
      
   
      <p>$PublicationYear</p></div>";

echo  "<div>          
      
      
      <p>$Audience</p></div>
      ";
 echo  "<div>          
      
      <p>$Subgenre</p></div>";

 echo
      "<div>          
      
      <p>$AuthorCountry</p>
      </div>";

  echo "<div>          
      
      <p>$Language</p></div>";

   echo "<div>
      <p>$Format</p></div>"; 

   echo "<div>
         <p>$Subjects</p>
        </div>";
      
     

    }
}
else {
  echo "<p>Search not found</p>";
}

?>