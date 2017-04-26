<?php 

/*********************************************

Spell List Guide for the Lorien Trust LRP System

Development by Jonathan Kane on behalf of the Tarantula Faction
Enquiries to jon.kane@msdl.net

*********************************************/


class OSdb extends SQLite3{
	function __construct(){
		$this->open('skill.sqlite');
	}
}

$db = new OSdb();
if (!$db) {echo "Database Error";}

$list = $db->query("SELECT * FROM skills WHERE id='" . $_GET['id'] . "' ");
$row=$list->fetchArray(SQLITE3_ASSOC);
?>

<head><title><?php echo $row['name'] ?> </title></head><body>

<?php
echo "<h3 style=\"margin-top:0px;\">" . $row['name'] ."</h3>";

echo "<div style=\"text-align:justify;font-size:small;\">" .$row['desc'] . "</div>";
?></div>

