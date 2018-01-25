<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Message to="<?=$_REQUEST['PhoneNumber']?>"> <?=htmlspecialchars(substr($_REQUEST['From'] . ": " . $_REQUEST['Body'], 0, 1600))?> </Message>
</Response>
