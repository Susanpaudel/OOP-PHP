<?php
echo '<link href="./include/style.css" rel="stylesheet"></link>';
echo '<h2>What are Type Hinting?</h2>
      <p>
    With Type hinting we can specify the expected data type (arrays, objects, interface, etc.) for an argument in a function declaration. This practice can be most advantageous because it results in better code organization and improved error messages.
      </p>



      <hr/>';
      echo '<h1>Code</h1>
<pre><code>
&lt;?php

class Information {
    public function data(string $name, float $height, int $age, array $friends, bool $test) {
        echo "Hello my name is " . $name . ". My height is " . $height . "ft. My age is " . $age . ".\n";
        foreach ($friends as $friend) {
            echo $friend . "\n";
        }
        echo $test . "\n";
    }
}

$data = new Information;
$data-&gt;data("Susan", 5.6, 12, [\'Nepal\', \'India\', \'China\'], 1);

class School {
    public function display_names(Student $names) {
        foreach ($names-&gt;names() as $name) {
            echo $name . "\n";
        }
    }
}

class Student {
    public function names() {
        return array(\'Susan\', \'Ram\', \'Shyam\');
    }
}

$sch = new School();
$stu = new Student();
$sch-&gt;display_names($stu);

?&gt;
</code></pre>';


      
      

      
      
      
      



?>