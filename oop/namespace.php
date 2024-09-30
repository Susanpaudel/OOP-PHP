<?php
echo '<link href="./include/style.css" rel="stylesheet"></link>';
echo '<h2>What is namespace?</h2>
      <p>
    With Type hinting we can specify the expected data type (arrays, objects, interface, etc.) for an argument in a function declaration. This practice can be most advantageous because it results in better code organization and improved error messages.
      </p>



      <hr/>';
echo ' <h1>Code Example with Namespaces</h1>
    <pre><code>
&lt;?php
include("include/namespace1.php"); //or use test1;
include("include/namespace2.php"); //or use test2;

$obj = new test1\information;
$obj-&gt;info();
test1\add();

$obj2 = new test2\information;
$obj2-&gt;info();

echo "&lt;h1&gt;Code&lt;/h1&gt;";
echo "&lt;pre&gt;&lt;code&gt;";';

echo "<a href='../index.php'><button> << Go Back</button></a>";
?>