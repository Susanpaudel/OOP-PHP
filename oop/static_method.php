<?php
echo '<link href="./include/style.css" rel="stylesheet"></link>';
echo '<h2>What are Static Methods?</h2>
      <p>
      Static methods can be called directly - without creating an instance of the class first.<br>

Static methods are declared with the static keyword
      </p>



      <hr/>';
      echo '<h1>Code</h1>
      <pre><code>
      &lt;?php
      
      class PersonalInfo {
        public static $name = "Susan";
        public static $age = 24;
      
        function __construct() {
          echo self::$name;
        }
      
        static function age_data() {
          echo self::$age;
        }
      }
      
      class deriveClass extends PersonalInfo {
        public function age() {
          Parent::age_data();
        }
      }
      
      $obj = new PersonalInfo();
      echo PersonalInfo::$name;
      
      $obj2 = new deriveClass();
      $obj2-&gt;age();
      
      ?&gt;
      </code></pre>';
      
      
      

      
      
      
      



?>