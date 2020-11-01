<?php
	if (!empty($_POST["dept"]))
	{
		foreach ($_POST["dept"] as $key => $value) {
		echo $value."<br>";
		}
	}
?>