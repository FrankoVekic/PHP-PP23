<?php 

if(isset($_POST['submit'])){
    $ime1= trim($_POST['name1']);
    $ime2= trim($_POST['name2']);
    $result = $ime1 . $ime2;
    
    if(isset($ime1)&&isset($ime2)){
        $keys = range('a', 'z');
    $values = array_fill(0, 26, 0);
    $name2 = array_combine($keys, $values);
    $word = $result;
    $len = strlen($word);
    for ($i=0; $i<$len; $i++) {
      $letter = strtolower($word[$i]);
      if (array_key_exists($letter, $name2)) {
        $name2[$letter]++;
      }
    }
    print_r($name2);
    echo '<p class="imena">'.$ime1 .' + ' . $ime2 .'</p>';
        
    }
    else {
        header("location: ../index.php");
        exit();
    

    }
}






