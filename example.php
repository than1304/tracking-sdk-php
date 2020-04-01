<?php
/**
 * Get api key url https://my.trackingmore.com/get_apikey.php
 * Documentation url https://www.trackingmore.com/api-index.html
 */

# 引入文件类自动加载 (Introduce file class auto loading)
require_once(dirname(__FILE__)."/Init.class.php");
# 传入 api key 参数 (Pass api key parameter)
\APITracking\Api::setApiKey("Your_Api_Key");

# 获取实时查询结果数据的跟踪单号 (Get a tracking number of real-time query result data)
$data = ["tracking_number" => "RP325552475CN", "carrier_code" => "china-post"];
$response = \APITracking\Realtime::post($data);

# 获取所有支持查询的运输商列表 (Get a list of all carriers)
// $response = \APITracking\Courier::get();

# 创建一个跟踪单号 (Create a tracking number)
// $data = ["tracking_number" => "RP325552475CN", "carrier_code" => "china-post"];
// $response = \APITracking\Single::create($data);

# 创建多个跟踪单号 (Create multiple tracking numbers)
// $data = [
// 	["tracking_number" => "RP325552475CN", "carrier_code" => "china-post"]
// 	["tracking_number" => "LZ448865302CN", "carrier_code" => "china-ems"],
// ];
// $response = \APITracking\Batch::create($data);

# 获取一个跟踪单号的物流信息 (Get logistics information for a tracking number)
// $response = \APITracking\Single::get("RP325552475CN","china-post");

# 获取多个跟踪单号的物流信息 (Get logistics information for multiple tracking numbers)
// $data = ["numbers" => "RP325552475CN,LZ448865302CN"];
// $response = \APITracking\Batch::get($data);

# 修改一个跟踪单号的其他信息 (Modify other information of a tracking number)
// $data = ["order_id" => "#1234"];
// $response = \APITracking\Single::update("RP325552475CN","china-post",$data);

# 修改多个跟踪单号的信息 (Modify the information of multiple tracking numbers)
// $data = [
// 	["tracking_number" => "RP325552475CN", "carrier_code" => "china-post", "order_id" => "#1234",],
// 	["tracking_number" => "LZ448865302CN", "carrier_code" => "china-ems", "order_id" => "#5678",],
// ];
// $response = \APITracking\Batch::update($data);

# 修改一个跟踪单号的运输商简码 (Modify the carrier code of a tracking number)
// $data = ["tracking_number" => "RP325552475CN", "carrier_code" => "china-post", "update_carrier_code" => "china-ems"];
// $response = \APITracking\Single::updateCode($data);

# 删除一个跟踪单号 (Delete a tracking number)
// $response = \APITracking\Single::del("RP325552475CN","china-post");

# 删除多个跟踪单号
// $data = [
// 	["tracking_number" => "RP325552475CN", "carrier_code" => "china-post"],
// 	["tracking_number" => "LZ448865302CN", "carrier_code" => "china-ems"],
// ];
// $response = \APITracking\Batch::del($data);

# 设置多个跟踪单号不再更新 (Set multiple tracking numbers no longer update)
// $data = [
// 	["tracking_number" => "RP325552475CN", "carrier_code" => "china-post"],
// 	["tracking_number" => "LZ448865302CN", "carrier_code" => "china-ems"],
// ];
// $response = \APITracking\Batch::notUpdate($data);

# 获取单号状态统计 (Get status statistics of tracking ticket number)
// $data = ["created_at_min" => time() - 3600 * 24 * 30, "created_at_max" => time()];
// $response = \APITracking\Status::get($data);

# 获取用户信息 (Get user information)
// $response = \APITracking\User::get();

# 
# 查询是否偏远 (Query whether remote)
// $data = [
// 	["country" => "Japan", "postcode" => "7621094"],
// 	["country" => "NZ", "postcode" => "Papaaroha"],
// ];
// $response = \APITracking\Remote::post($data);

# 获取多个运输商的时效 (Get the timeliness of multiple carriers)
// $data = [
// 	["original" => "CN", "destination" => "US", "carrier_code" => "dhl"],
// 	["original" => "CN", "destination" => "RU", "carrier_code" => "dhl"],
// ];
// $response = \APITracking\Costtime::post($data);

# 获取空运跟踪单号实时查询数据 (Obtain real-time query data of air tracking number)
// $data = ["track_number" => "172-28891936"];
// $response = \APITracking\Aircargo\Realtime::post($data);


var_dump($response);