<!DOCTYPE html> <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Cindy - Message</title>
<link rel="stylesheet" href="">
<script src="//ruslanbes.com/crossdomain/jquery-2.1.1.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//ruslanbes.com/crossdomain/bootstrap-3.2.0-dist/css/bootstrap.min.css">
<style type="text/css">
#douglass_message {
  width:230px;
}
#douglass_iframe {
  width:230px;
  height:160px;  
}
.bottom {
  position:absolute;
  bottom:0;
}
</style>
</head>
<body>
<p>Hi, I'm Cindy. I want to get a message from Douglas. </p>
<p>Douglas is on <a href="https://douglas.ruslanbes.com/fragment/douglas.php">https://douglas.ruslanbes.com/fragment/douglas.php</a>. Let's get the message using the hash technique</p>
<button type="button" name="get_douglass_message" id="get_douglass_message">Get Douglas's message</button><br/>
<div class="bottom">
  <label for="douglass_message">Douglas:</label><br/>
  <input type="text" id="douglass_message" placeholder="No message received" />
  <iframe src="https://douglas.ruslanbes.com/fragment/douglas.php" id="douglass_iframe"></iframe>
</div>
</body>
</html>
<script type="text/javascript">
$("#get_douglass_message").click(function() {
  $("#douglass_iframe").get(0).contentWindow.location = "https://douglas.ruslanbes.com/fragment/douglas.php" + "#Hi, Douglas. Do you have a message for me?"
    
  window.addEventListener("hashchange", getMessageFromDouglas, false)
  function getMessageFromDouglas() {
    var message_to_cindy = window.location.hash.replace(/^#/,'')
    if (message_to_cindy != '') {
      $("#douglass_message").val(message_to_cindy)
    } else {
      $("#douglass_message").val("<Failed:Cross-domain request>")
    }
  }  
})
</script>
