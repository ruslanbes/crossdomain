<!DOCTYPE html> <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Eve - JSONP</title>
<link rel="stylesheet" href="">
<script src="//ruslanbes.com/crossdomain/jquery-2.1.1.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//ruslanbes.com/crossdomain/bootstrap-3.2.0-dist/css/bootstrap.min.css">
<style type="text/css">
#freds_message {
  width:230px;
  height:60px;
}
.bottom {
  position:absolute;
  bottom:0;
}
</style>
</head>
<body>
<p>Hi, I'm Eve. I want to get a message from Fred. </p>
Fred has written his message in JSON too but left it on his domain: <a href="http://fred.ruslanbes.com/jsonp/fred.php">http://fred.ruslanbes.com/jsonp/fred.php</a>. Unlike Douglas, Fred and I are using JSONP.</p>
<button type="button" name="get_freds_message" id="get_freds_message">Get Fred's message</button>
<div class="bottom">
  <label for="freds_message">Fred:</label><br/>
  <textarea id="freds_message" placeholder="No message received"></textarea>
</div>
</body>
</html>
<script type="text/javascript">
$("#get_freds_message").click(function() {
  $.getJSON("http://fred.ruslanbes.com/jsonp/fred.php?callback=?").done( function(data){
    $('#freds_message').val( data.message_to_eve )  
    // console.log(data.callback) // uncomment if you want to look at the callback
  }).fail( function(data) {
    $('#freds_message').val( "<Failed:Cross-domain request>" )  
  })
})
</script>
