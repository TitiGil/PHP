<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       class test{
          public $name;
          public $age;
           
           public function __construct(){
               echo 'Constructed<br>';
            }
            
            public function __destruct() {
                echo 'Destructed';
            }
            
            public function setName($mame){
                $this->name=$mame;
            }
            public function setAge($age){
                $this->age=$age;
            }
            
            public function __get($property) {
                if(property_exists($this, $property)){
                    return $this->$property;
                }
                
            }
            public function __set($property, $value) {
              if(property_exists($this, $property))
                  $this->property=$value;
            }
       }
       
       
       $test1=new test();
       $test1->setAge(10);
        $test1->setName('amin');
        $test1->__set('age',15);
        echo 'Name is ' . $test1->__get('name') . '<br>';
        echo 'and the age is '. $test1->__get('age').'<br>';
       
       
        ?>
    </body>
</html>
