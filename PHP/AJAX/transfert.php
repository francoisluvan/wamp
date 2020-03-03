<?PHP

$fpout = fopen("source.json","w+");
$table = $_POST["tabl"];
fputs($fpout, $table);
echo 'banane';
?>
