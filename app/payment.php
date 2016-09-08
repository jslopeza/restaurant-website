 <?php
    $loginID        = "";
    $transactionKey = "";
    $amount         = $_POST['grandTotal'];
    $description    = "Sample Transaction";
    $label          = "Submit Payment"; // The is the label on the 'submit' button
    $testMode       = "true";
    // By default, this sample code is designed to post to our test server for
    // developer accounts: https://test.authorize.net/gateway/transact.dll
    // for real accounts (even in test mode), please make sure that you are
    // posting to: https://secure.authorize.net/gateway/transact.dll
    $url            = "https://test.authorize.net/gateway/transact.dll";

    // If an amount or description were posted to this page, the defaults are overidden
    if (array_key_exists("amount",$_REQUEST))
        { $amount = $_REQUEST["amount"]; }
    if (array_key_exists("description",$_REQUEST))
        { $description = $_REQUEST["description"]; }

    // an invoice is generated using the date and time
    $invoice    = date('YmdHis');
    // a sequence number is randomly generated
    $sequence   = rand(1, 1000);
    // a timestamp is generated
    $timeStamp  = time();

    // The following lines generate the SIM fingerprint.  PHP versions 5.1.2 and
    // newer have the necessary hmac function built in.  For older versions, it
    // will try to use the mhash library.
    if( phpversion() >= '5.1.2' )
        { $fingerprint = hash_hmac("md5", $loginID . "^" . $sequence . "^" . $timeStamp . "^" . $amount . "^", $transactionKey); }
    else
        { $fingerprint = bin2hex(mhash(MHASH_MD5, $loginID . "^" . $sequence . "^" . $timeStamp . "^" . $amount . "^", $transactionKey)); }

?>
<form id="finalCheckout" method="post" action="https://test.authorize.net/gateway/transact.dll">
    <input type='hidden' name='x_login' value='<?php echo $loginID; ?>' />
    <input type='hidden' name='x_amount' value='<?php echo $amount; ?>' />
    <input type='hidden' name='x_description' value='<?php echo $description; ?>' />
    <input type='hidden' name='x_invoice_num' value='<?php echo $invoice; ?>' />
    <input type='hidden' name='x_fp_sequence' value='<?php echo $sequence; ?>' />
    <input type='hidden' name='x_fp_timestamp' value='<?php echo $timeStamp; ?>' />
    <input type='hidden' name='x_fp_hash' value='<?php echo $fingerprint; ?>' />
    <input type='hidden' name='x_test_request' value='<?php echo $testMode; ?>' />
    <input type='hidden' name='x_show_form' value='PAYMENT_FORM' />
</form>

<script src="scripts/libs/jquery-1.10.2.min.js"></script>
<script>
$(document).ready(function(){
    $('#finalCheckout').submit();
});
</script>
