<?php
function spaPost($key,$array){
   
    if(isset($_POST[$key])){
        
        return $_POST[$key];

    }
    else{
        return null;
    }
if(array_key_exists($key,$arrray)){
   
    return $array[$key];

}
else{
    
    return null;
}
}










?>