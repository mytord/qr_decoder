<?php
require __DIR__ . '/vendor/autoload.php';

$loginImage = __DIR__ . '/login.png';
$enrollImage = __DIR__ . '/enroll.png';

$loginPattern = '/^\$PK2\$(.+)\$PKAGID\$(.+)\$PKASID\$(.+)\$PKCRID\$(.+)\$PKASTY\$(.+)$/';
$enrollPattern = '/^\$PK5\$(.+)\$PKAGID\$(.+)\$PKASID\$(.+)\$PKCRID\$(.+)\$PKASTY\$(.+)\$PKURN\$(.+)(https?\:\/\/.+)$/';

$decoder = new Libern\QRCodeReader\QRCodeReader();

preg_match($loginPattern, $decoder->decode($loginImage), $dataForLogin);
preg_match($enrollPattern, $decoder->decode($enrollImage), $dataForEnroll);

var_dump($dataForEnroll);
var_dump($dataForLogin);