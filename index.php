<?php
// composer
require 'vendor/autoload.php';

$domain = 'шкафы.рф';
$whois = new Novutec\WhoisParser\Parser();
$whois->setDateFormat('%d.%m.%Y');
$date = $whois->lookup($domain)->expires;


if (!$date) {
    echo "Домен свободен\n";
} else {
    echo "Следующая проверка: $date\n";
}

?>
