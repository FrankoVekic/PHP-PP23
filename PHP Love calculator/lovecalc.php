<?php 
if(isset($_POST['submit'])){
  $ime1= trim($_POST['name1']);
  $ime2= trim($_POST['name2']);
  $imena = strtolower($ime1) . strtolower($ime2);
  $brojslova=strlen($imena);    

  if(checkInput($ime1,$ime2)==0 || emptyInput($ime1,$ime2)==0){
    echo '<h3>Incorrect input.<br> Try again.</h3>';
  }
  else {
    echo recursiveLove ($names=getNumCount($brojslova,$imena));
  }
}

function emptyInput($ime1,$ime2)
{
  if(empty($ime1) || empty($ime2)){
    return 0;
  }
  else{
    return 1;
  }
}

function checkInput($ime1,$ime2){
  if(!preg_match("/^[a-zA-Z]*$/", $ime1) || !preg_match("/^[a-zA-Z]*$/", $ime2)){
    return 0;
  }
  else {
    return 1;
  }
}

function getNumCount($numOfChars,$namesTogether){
  for($i=0;$i<$numOfChars;$i++){
    $chars=substr($namesTogether,$i,1);
    $names[]=substr_count($namesTogether,$chars);
  }
  return $names=implode('',$names);
}

function recursiveLove($names)
{
  $counter=round(strlen($names)/2);
  if($counter>=2){
      $counter--;
    for($i=0;$i<=$counter;$i++){
      if($i != $counter){
          $results[$i]= substr($names,$i,1) + substr($names,-$i-1,1);
      }
      else if(strlen($names) % 2 == 1){
          $results[$i]=substr($names,$i,1);
        }
        else {
          $results[$i]=substr($names,$i,1) + substr($names,-$i-1,1);
        }
      }
    return recursiveLove($names=implode('',$results));
  }
  return '<h3>'.ucfirst($_POST['name1']).' and '.ucfirst($_POST['name2']).' are<br>'.$names.'% in love!</h3>';
}