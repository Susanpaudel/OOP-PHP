<?php
echo '<link href="./include/style.css" rel="stylesheet"></link>';
echo '<h2>What is Destructor?</h2>
      <p>If you create a __destruct() function, PHP will automatically call this function at the end of the script..

Notice that the distructor function starts with two underscores (__) also called magic function!</p>
      <hr/>';
      echo ' <h1>PHP Class Example with Constructor and Destructor</h1>
    <pre><code>
&lt;?php
class A {
    //called first
    function __construct() {
        echo "I am from constructor";
    }
  
    function info() {
        echo "I am from function";
    }
    //call at the end of script
    function __destruct() {
        echo "I am from destructor";
    }
}

$obj = new A();
$obj-&gt;info();
$obj-&gt;info();

?&gt;
    </code></pre>';
      



?>