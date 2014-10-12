<?php
header('Content-Type: application/json');
$callback = $_GET['callback']
?>
<?=$callback?>({
"name":"Fred",
"hint":"I will send the message to Eve using JSONP",
// "callback":"<?=htmlspecialchars($callback)?>", // uncomment if you want to look at the callback
"message_to_eve":"Eve, did you get my previous message?"
})