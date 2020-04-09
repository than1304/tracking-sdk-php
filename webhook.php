<?php
/**
 * setting webhook url https://my.trackingmore.com/webhook_setting.php
 * Documentation url https://www.trackingmore.com/webhook.html
 */

# 引入文件类自动加载 (Introduce file class auto loading)
require_once(dirname(__FILE__)."/Init.class.php");

# 验证签名的邮箱，如果需要数据签名验证数据的来源是否来源于 trackingmore 的某个账户，请填写您的账户登陆邮箱，如果验证失败则会拦截数据 ( Verify the signed mailbox. If you need a data signature to verify whether the source of the data comes from an account of trackingmore, please fill in your account login mailbox. If the verification fails, it will intercept the data )
$verifyEmail = "";

# 获取推送内容 ( Get webhook content )
$response = \APITracking\Webhook::get($verifyEmail);

# 将推送内容写入日志文件，注意：需要读写权限 ( Write the push content to the log file, note: read and write permissions are required )
file_put_contents(dirname(__FILE__)."/webhook.txt",$response."\r\n",FILE_APPEND);

# 如果通过了数据审核逻辑 反回 200 状态码，此处只是简单示例 ( If you pass the data review logic and return a 200 status code, here is just a simple example )
if(!empty($response)) echo "200";

exit;