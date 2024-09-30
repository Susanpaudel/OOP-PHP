<?php
echo '<link href="./include/style.css" rel="stylesheet"></link>';
echo '<h2>What are Traits?</h2>
      <p>
     Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).<br>

Traits are declared with the trait keyword<br>
call the trait by using use trait name inside class
      </p>



      <hr/>';
      echo '<h1>Code</h1>
<pre><code>
&lt;?php

trait information {
  public function message() {
    echo "Hello world";
  }
}

class A {
  use information;
}

class B {
  use information;
}

$obj = new B();
$obj-&gt;message();

?&gt;
</code></pre>';

      
      

      
      
      
      



?>