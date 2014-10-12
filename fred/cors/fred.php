<?php
  header('Access-Control-Allow-Origin: http://eve.ruslanbes.com');
?>
<!DOCTYPE html> <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Fred - CORS</title>
<link rel="stylesheet" href="">
<script src="//ruslanbes.com/crossdomain/jquery-2.1.1.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//ruslanbes.com/crossdomain/bootstrap-3.2.0-dist/css/bootstrap.min.css">

<style type="text/css">
#message_to_eve {
  font-weight: bold;
} 
.code {
  font-family: monospace;
  background-color: #E0E0E0;
}
</style>
</head>
<body>
<p>Hi, I'm Fred. I have a message to Eve.</p>
<p>Unlike <a href="http://douglas.ruslanbes.com/cors/douglas.php">Douglas</a> I also send a header <span class="code">Access-Control-Allow-Origin: http://eve.ruslanbes.com</span> .</p>
<p>My message is: <span id="message_to_eve">Eve, you are beautiful</span></p>
</body>
</html>
