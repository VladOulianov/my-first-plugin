<div class="wrap">
  <h1>Liste des légumes</h1>
</div>
<?php
$mydb = new wpdb('user*','password*','legume','localhost:3306');
$rows = $mydb->get_results("select legumename from legume");
echo "<ul>";
foreach ($rows as $obj) :
   echo "<li>".$obj->legumename."</li>";
endforeach;
echo "</ul>";