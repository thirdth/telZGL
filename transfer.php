<?php

    // if the caller pressed anything but 1 send them back
    if($_REQUEST['Digits'] != '1') {
        header("Location: hello.php");
        die;
    }

    // the user pressed 1, connect the call to 310-555-1212
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Dial timeout="20">+16159457818</Dial>
    <Say voice="alice">We are sorry, but no one from Teck for lawyers is available. If you would like to leave a brief message, please do so after the tone.</Say>
    <Record maxLength="30" action="hello-monkey-handle-recording.php" />
    <Say>Goodbye</Say>
</Response>
