<?php
echo '<link href="./include/style.css" rel="stylesheet"></link>';
echo '<h2>What is Access Modifiers?</h2>
      <p>Properties and methods can have access modifiers which control where they can be accessed.

There are three access modifiers:<br>

public - the property or method can be accessed from everywhere. This is default <br>
protected - the property or method can be accessed within the class and by classes derived from that class <br>
private - the property or method can ONLY be accessed within the class</p> 
      <hr/>';
      echo '<h1>Code</h1>
      <pre><code>
      &lt;?php
      class Fruit {
        public $name;
        protected $color;
        private $weight;
      }
      
      $mango = new Fruit();
      $mango-&gt;name = \'Mango\'; // OK
      $mango-&gt;color = \'Yellow\'; // ERROR
      $mango-&gt;weight = \'300\'; // ERROR
      ?&gt;
      </code></pre>';
      
      
      echo "<a href='../index.php'><button> << Go Back</button></a>";



?>