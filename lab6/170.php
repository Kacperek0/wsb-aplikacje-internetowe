<?php
$bazaDanych = new mysqli('localhost','root', 'root', 'testpass', '3308');
if ($bazaDanych->connect_error) {
die('Błąd połączenia z bazą danych (numer błędu: '
. $bazaDanych->connect_errno . ') Komunikat błędu: '
. $bazaDanych->connect_error);
}
$sql="select Language, IsOfficial, Percentage "
. "from countrylanguage where CountryCode='POL'";
$wynikZapytania=$bazaDanych->query($sql);
while($rekord = $wynikZapytania->fetch_object()) {
print("<tr><td>{$rekord->Language}</td>");
print("<td>{$rekord->IsOfficial}</td>");
print("<td>{$rekord->Percentage}</td></tr>");
}
?>
