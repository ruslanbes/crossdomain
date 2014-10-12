<!DOCTYPE html> <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Cindy - CORS</title>
<link rel="stylesheet" href="">
<script src="//ruslanbes.com/crossdomain/jquery-2.1.1.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//ruslanbes.com/crossdomain/bootstrap-3.2.0-dist/css/bootstrap.min.css">
<style type="text/css">
#douglass_message {
  width:230px;
}
.bottom {
  position:absolute;
  bottom:0;
}
</style>
</head>
<body>
<p>Hi, I'm Cindy. I want to get a message from Douglas.</p>
<p>I'm sitting on the domain <strong>cindy</strong>.ruslanbes.com and Douglas is on the domain <strong>douglas</strong>.ruslanbes.com. I will try to do the same what Alice did and get the message from <a href="http://douglas.ruslanbes.com/cors/douglas.php">http://douglas.ruslanbes.com/cors/douglas.php</a></p>
<button type="button" name="get_douglass_message" id="get_douglass_message">Get Douglas's message</button><br/>
<div class="bottom">
  <label for="douglass_message">Doug:</label>
  <input type="text" id="douglass_message" placeholder="No message received"/>
</div>
</body>
</html>
<script type="text/javascript">
$("#get_douglass_message").click(function() {
  $.get("http://douglas.ruslanbes.com/cors/douglas.php").done( function(data){
    $('#douglass_message').val( $('#message_to_cindy', data).text() )  
  }).fail( function(data) {
    $('#douglass_message').val( "<Failed:Cross-domain request>" )  
  })
})
</script>
