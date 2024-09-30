<?php
echo '<link href="./include/style.css" rel="stylesheet"></link>';
echo '<h2>What are Abstract Classes and Methods?</h2>
      <p>Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.<br>

An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.<br>

An abstract class or method is defined with the abstract keyword.<br>
we cannot create an object of abstract class but from it child we can create the object and can acess the abstract method.<br>
we can create other method with it code inside abstract class
</p> 
      <hr/>';
      echo '<h1>Code</h1>
<pre><code>
&lt;?php
abstract class Sum {
  protected $a, $b;

  abstract protected function result($a, $b);
}

class derviceClass extends Sum {
  public function result($a, $b) {
    echo ($a + $b);
  }
}

$obj = new derviceClass();
$obj-&gt;result(12, 12);
?&gt;
</code></pre>';

      
echo "<a href='../index.php'><button> << Go Back</button></a>";   
      
      



?>