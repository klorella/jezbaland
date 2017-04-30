<?php
$data = json_decode(file_get_contents("http://panel.omgserv.com/json/43951/players"));
if (empty($data->players)) {
		echo('<li>No player online</li>');
} else {
	foreach ($data->players as $player) {
		echo('<li>'.$player.'</li>');
	}
}
?>