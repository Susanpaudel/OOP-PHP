<?php
echo '<link href="./include/style.css" rel="stylesheet"></link>';
echo '<h2>What is Inheritance?</h2>
      <p>When a class derives from another class.

The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.

An inherited class is defined by using the extends keyword.</p>
      <hr/>';
      echo '<h1>Code</h1>
      <pre><code>
      &lt;?php
       class employee {
         public $name, $salary, $address;
         
         function __construct($name = "not given", $salary = 0, $address = "not given") {
           $this-&gt;name = $name;
           $this-&gt;salary = $salary;
           $this-&gt;address = $address;
         }
         
         function emp_info() {
           echo \'&lt;h1&gt;Employee Info&lt;/h1&gt;&lt;p&gt;\' . $this-&gt;name . \' name employee from \' . $this-&gt;address . \' has salary of \' . $this-&gt;salary . \'&lt;/p&gt;\';
         }
       }
       
       class manager extends employee {
         public $bonus;
         
         function __construct($name = "not given", $salary = 0, $address = "not given", $bonus = 0) {
           parent::__construct($name, $salary, $address);
           $this-&gt;bonus = $bonus;
         }
         
         function manager_info() {
           echo \'&lt;h1&gt;Manager Info&lt;/h1&gt;&lt;p&gt;\' . $this-&gt;name . \' name employee from \' . $this-&gt;address . \' has salary of \' . ($this-&gt;salary + $this-&gt;bonus) . \'&lt;/p&gt;\';
         }
       }
       
       $emp = new manager("Susan Paudel", 1000, "Hetauda");
       $emp-&gt;emp_info();
       $emp-&gt;manager_info();
      ?&gt;
      </code></pre>';
      
      



?>