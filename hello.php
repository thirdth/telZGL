<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
  <Dial timeout="20">+16159457818</Dial>
  <Say voice="alice">We're sorry, Zack Glaser Legal is unavailable. If you would like to leave a brief message, please do so after the tone.</Say>
  <Record maxLength="180" />
  <Say voice="alice">Thank you. Zack Glaser Legal will get back to your shortly. Goodbye</Say>
</Response>
