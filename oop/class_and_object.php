<?php

echo '<link href="./include/style.css" rel="stylesheet"></link>';
echo "<h2>What is Class?</h2>
      <p>Class is define by using class keywords which contain properties and methods.</p>
      <p>class Car{
      
      }</p>

      <hr/>
";
echo '<h2>What is Object?</h2>
      <p>Object is defined by using the <strong>new</strong> keyword, which helps to call properties and methods from classes. An object is created with the help of the class name.</p>
      <p>
        $object = new Car(); //where $object variable is the object for class Car 
      </p>
      <hr/>';

      echo '<h1>Code</h1>
      <pre><code>
      class Car {
        public $name, $color;  // properties
        
        // function or method
        // $this keyword refers to the current object and is available inside the class only
        function show() {
          echo "The name of the car is " . $this->name . " and the color is " . $this->color . ".";
        }
      }
      
      // $display_data is an object of the Car class
      $display_data = new Car();
      
      // Assigning values using the object of the Car class
      $display_data->name = "Toyota";
      $display_data->color = "Red";
      
      // Calling the function or method using the object
      $display_data->show();
      </code></pre>';
      

      echo "<a href='../index.php'><button> << Go Back</button></a>";

?>