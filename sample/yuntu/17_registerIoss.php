<?php
use Sxqibo\Logistics\Yuntu;

require_once '../../vendor/autoload.php';
require_once '../config.php';

$code      = $config['yunTu']['code'];
$apiSecret = $config['yunTu']['apiSecret'];
$data      = new Yuntu($code, $apiSecret);

/**
 * 17.IOSS号备案
 */
$iossNumber = 'xy1234567890';
$result  = $data->registerIoss($iossNumber);
print_r($result);
