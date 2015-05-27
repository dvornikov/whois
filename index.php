<?php
// composer
require 'vendor/autoload.php';

$sld = 'ads-clicks.ru';

$domain = new Phois\Whois\Whois($sld);

$whois_answer = $domain->info();

echo $whois_answer;

preg_match('/^free-date:\s+(\S+)/im', $whois_answer, $matches);

if ($domain->isAvailable()) {
    echo "Домен свободен\n";
} else {
    echo "Следующая проверка: $matches[1]\n";
}

?>
