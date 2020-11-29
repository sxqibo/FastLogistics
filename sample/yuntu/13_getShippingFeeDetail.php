<?php
use Sxqibo\Logistics\Yuntu;

require_once '../vendor/autoload.php';
require_once './config.php';

$data = new Yuntu($code, $apiSecret);

/**
 * 13.查询物流运费明细
 * $orderNo 可以是 本地订单号 或 运单号
 * 本地订单号 42259-47
 * 运单号 YT2031721266061991
 */
$orderNo = "42259-47";              //本地订单号,待测试,正式用时用下边的11去掉，暂时放的，以防误操作

$result = $data->getShippingFeeDetail($orderNo);
print_r($result);
