<?php
echo '<link href="./include/style.css" rel="stylesheet"></link>';
echo '<h2>What is method and proterties Overriding?</h2>
      <p>when the mathod and properties of parent class and child class are same in that case overriding occurs.</p> 
      <hr/>';
      echo '<h1>Code</h1>
      <pre><code>
      &lt;?php
      class A {
        public $a;
        
        public function show() {
          echo "I am from A Class\n";
        }
      }
      
      class B extends A {
        function show() {
          echo "I am from B Class";
        }
      }
      
      $obj = new A();
      $obj-&gt;show();
      
      $obj2 = new B();
      $obj2-&gt;show();
      ?&gt;
      </code></pre>';
      
      
      
      



?>