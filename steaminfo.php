<?php
$steamid = $_POST["id"];
$steamurl = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=CF2C7E8DD24B66C01D2773753211010F&steamids=" . $steamid;
$json = file_get_contents( $steamurl );

$playerSummaries = json_decode( $json );
$response = $playerSummaries->response;
$players = $response->players;

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Ergebnis - API-Test</title>
</head>
<body>

Die Informationen zu dem Spieler <?php echo $_POST["name"]; ?> wurden über die folgende URL abgerufen:<br>
<?php
echo "<a href=\"" . $steamurl . "\">" . $steamurl . "</a><br>";
echo "<table><tr><th>Name</th><th>Steam-Name</th><th>Onlinestatus</th></tr>";
foreach ( $players as $player )
{
  echo "<tr><td>" . $player->realname . "</td><td>" . $player->personaname . "</td><td>" . $player->personastate . "</td></tr>";
}
echo "</table>";
?>

</body>
</html>
