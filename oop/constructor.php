<?php
echo '<link href="./include/style.css" rel="stylesheet"></link>';
echo '<h2>What is Constructor?</h2>
      <p>A constructor allows you to initialize an objects properties upon creation of the object.If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

Notice that the construct function starts with two underscores (__)!</p>
      <hr/>';
      echo '<h1>Code</h1>
      <pre><code>
      &lt;?php
       class Car {
         public $name, $color;  // properties
         
         // parameter passed in constructor and above variables are different
         // values will be passed, if the values are not given, defaults will be used
         function __construct($name = "not given", $color = "not given") {
           $this-&gt;name = $name;
           $this-&gt;color = $color;
         }
         
         // function or method
         // $this keyword refers to the current object and is available inside the class only
         function show() {
           echo "The name of the car is " . $this-&gt;name . " and the color is " . $this-&gt;color . ".";
         }
       }
       
       // $display_data object of Car class created
       $display_data = new Car("Toyota", "Red");
       $display_data-&gt;show();
      ?&gt;
      </code></pre>';
      

      echo "<a href='../index.php'><button> << Go Back</button></a>";

?>