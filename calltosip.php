<?php
echo header('content-type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8"?>';
/** Get sip endpoint list **/
$params=$_REQUEST['SipUser'];
$toNumberList=explode(",",$params);
?>
<Response>
    <?php
    for($i=0; $i < sizeof($toNumberList) ;$i++) { $to=$toNumberList[$i]; ?>
        <Dial timeout="20">

            <Sip>
                <?php echo $to; ?>
            </Sip>

        </Dial>
        <Say voice="alice">We're sorry, Zack Glaser Legal is unavailable. If you would like to leave a brief message, please do so after the tone.</Say>
        <Record maxLength="180" />
        <Say voice="alice">Thank you. Zack Glaser Legal will get back to your shortly. Goodbye</Say>
        <?php } ?>
</Response>
