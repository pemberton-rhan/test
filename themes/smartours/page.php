<?php get_header(); ?>	
  
  <?php
  
    function compareArrays() {
  
      $employee1 = ["first" => "bob", "last" => "smith", "email" => "bob@example.com"];
      $employee2 = ["first" => "sue", "last" => "smith", "email" => "smith@example.com"];
      $employee3 = ["first" => "sue", "last" => "storm", "email" => "smith@example.com"];
    
      $commonValue = array_intersect($employee2, $employee3);
      if (count($commonValue) > 1) {
        //var_dump($commonValue);
        echo "This is TRUE. At least 2 of the 3 keys have matching values.";
      } else {
        echo "This is FALSE. Not enough keys have matching values";
      }
    
    }
    
    compareArrays();
    
  ?>
  
  <hr>
  
  <?php 
  
    function compareStrings() {
      
      $string1 = "dub275ifops1";
      $string2 = "zxp7qitrs.-?";
      
      $string1Array = str_split($string1);
      $string2Array = str_split($string2);
      
      $commonValues = array_intersect($string1Array, $string2Array);
      
      echo "The following characters are in both strings - " . implode(" ", $commonValues);
      
    }
    
    compareStrings();
    
  ?>

<?php get_footer(); ?>



<!-- foreach($employee as $x => $val) {
  echo "$x = $val<br>";
} -->