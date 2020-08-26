<?php

include_once 'Patient.php';
include_once 'ListPatients.php';

$patient1 = new Patient('Smith',5);
$patient2 = new Patient('Jones',4);
$patient3 = new Patient('Fehrenbach',6);
$patient4 = new Patient('Brown',1);
$patient5 = new Patient('Ingram',1);

$list = new ListPatients();
$list->add($patient1);
$list->add($patient2);
$list->add($patient3);
$list->add($patient4);
$list->add($patient5);

echo '<pre>';
print_r($list);
