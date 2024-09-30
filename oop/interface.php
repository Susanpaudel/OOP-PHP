<?php
echo '<link href="./include/style.css" rel="stylesheet"></link>';
echo '<h2>What are Interfaces?</h2>
      <p>Interfaces allow you to specify what methods a class should implement.<br>

Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".<br>

Interfaces are declared with the interface keyword <br>
we cannot create an object of interface and no access modifier is used.<br>
implements keyword is used which take many interfaces like: class B implements A,C{} <br>
All the method that is define inside interface need to be call inside class B that imaplements A,C <br>
it doesnot contain properties <br>
Why used interface? => if i want to inherite different class like A,C to class B In this case inheritance doesnot work to overcome that interface was used.


</p> 
      <hr/>';
      echo '<h1>Code</h1>
      <pre><code>
      &lt;?php
      interface Sum {
        function sum($a, $b);
      }
      interface Divide {
        function divide($a, $b);
        function test();
      }
      interface Multiply {
        function mutiply($a, $b);
      }
      interface Subtract {
        function subtract($a, $b);
      }
      
      class result implements Sum, Divide, Multiply, Subtract {
        public function sum($a, $b) {
          echo ($a + $b) . \'\\n\';
        }
        public function divide($a, $b) {
          echo ($a / $b) . \'\\n\';
        }
        public function subtract($a, $b) {
          echo ($a - $b) . \'\\n\';
        }
        public function mutiply($a, $b) {
          echo ($a * $b) . \'\\n\';
        }
        public function test() {
          echo "hello";
        }
      }
      
      $obj = new result();
      $obj-&gt;sum(12, 12);
      $obj-&gt;divide(12, 12);
      $obj-&gt;subtract(12, 12);
      $obj-&gt;mutiply(12, 12);
      $obj-&gt;test();
      ?&gt;
      </code></pre>';
      
      
      echo "<a href='../index.php'><button> << Go Back</button></a>";
      
      
      
      



?>