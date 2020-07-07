<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
require_once("{$base_dir}initcontrols{$ds}index.php");
?>
<div>
<?php 
$file = "{$base_dir}initcontrols{$ds}home.html"; 
include_once($file); 
echo $plHeader;?>   
</div>
