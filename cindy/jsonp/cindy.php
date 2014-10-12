<!DOCTYPE html> <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Cindy - JSONP</title>
<link rel="stylesheet" href="">
<script src="//ruslanbes.com/crossdomain/jquery-2.1.1.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//ruslanbes.com/crossdomain/bootstrap-3.2.0-dist/css/bootstrap.min.css">

<style type="text/css">
#douglass_message {
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
<p>Hi, I'm Cindy. I want to get a message from Douglas. </p>
Douglas has written his message in JSON too but left it on his domain: <a href="http://douglas.ruslanbes.com/jsonp/douglas.php">http://douglas.ruslanbes.com/jsonp/douglas.php</a>. Let's get it!</p>
<button type="button" name="get_douglass_message" id="get_douglass_message">Get Douglas's message</button><br/>
<div class="bottom">
  <label for="douglass_message">Douglas:</label><br/>
  <textarea id="douglass_message" placeholder="No message received"></textarea>
</div>
</body>
</html>
<script type="text/javascript">
$("#get_douglass_message").click(function() {
  $.getJSON("http://douglas.ruslanbes.com/jsonp/douglas.php").done( function(data){
    $('#douglass_message').val( data.message_to_cindy )  
  }).fail( function(data) {
    $('#douglass_message').val( "<Failed:Cross-domain request>" )  
  })
})
</script>
