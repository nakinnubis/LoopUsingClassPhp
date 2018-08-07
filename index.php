<?php
class Loops{
    public $name;
    public $age;

    public  function __construct(array $array,$lookup){   
        $int = 1;    
     $temp=  $this->in_array_r($lookup,$array);
     while($temp && $int  < count($array)){         
        $nam = $this->name =$lookup;       
        echo $nam;    
        $int++ ;     
     }
     
    }
    public function in_array_r($item , $array){
        return preg_match('/"'.preg_quote($item, '/').'"/i' , json_encode($array));
    }
}
$arrayuser = [["Name"=>"Abiola","Age"=>"13"],["Name"=>"Sjay","Age"=>"13"],["Bame"=>"Sjay","Age"=>"13"],["Name"=>"Sjay","Age"=>"13"]];
$user = new Loops($arrayuser,"Name");
$user;

?>