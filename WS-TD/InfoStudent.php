<?php
class InfoStudent {

//function to be exposed must be public
public function getInfoStudent($cin) {
$info = array("CIN:".$cin , "Malek", "Eljaouadi","10/08/1997", 
"Level: 3", "Result:reussi"); 
return $info;
}
}
?>