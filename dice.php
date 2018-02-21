<?php

error_reporting(-1);

$diceHuman1=mt_rand(1, 6);

echo "Первый бросок человека...\n";
echo "Выпало $diceHuman1\n";


$diceHuman2=mt_rand(1, 6);

echo "Второй бросок человека...\n";
echo "Выпало $diceHuman2\n";


$diceBot1=mt_rand(1, 6);

echo "Первый бросок бота...\n";
echo "Выпало $diceBot1\n";


$diceBot2=mt_rand(1, 6);

echo "Второй бросок бота...\n";
echo "Выпало $diceBot2\n";

$sumDiceHuman=($diceHuman1+$diceHuman2);
$sumDiceBot=($diceBot1+$diceBot2);

echo "У человека выпало $sumDiceHuman, а у бота - $sumDiceBot\n";

if ($sumDiceHuman > $sumDiceBot) {
	echo "Человек выиграл!\n";
} elseif ($sumDiceHuman < $sumDiceBot) {
	echo "Робот победил!\n";
} elseif ($sumDiceHuman == $sumDiceBot) {
	echo "Играем еще!\n";
	exit();
}
?>