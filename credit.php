<?php

error_reporting(-1);

$creditBalance = 40000; /* Долг */
$percent = 1.03; /* 3% в мес от суммы */
$servicePayment = 1000; /* Комиссия */
$monthlyPayment = 5000; /* Плата анона в месяц */
$paymentTotal = 0; /* Сколько всего отдал банку анон */

/* Посчитаем расходы 20 раз на 20 месяцев вперед */

for ($month = 1; $month <= 20; $month++) {
	$creditBalance = ($creditBalance * $percent) + $servicePayment - $monthlyPayment;
	$paymentTotal = $paymentTotal + $monthlyPayment;
	echo "$month месяц спустя: долг =  $creditBalance руб, выплачено всего $paymentTotal руб.\n";

/* Если баланс отрицательный - хватит считать */
	if ($creditBalance < 0){
		echo "С меня хватит!";
		break;
	}
	
}
?>