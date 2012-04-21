<?php
/**
 * Expected output (got on curl 7.21.0-2):
 * int(0)
 * string(0) ""
 *
 * Actual output on curl 7.24.0-1 and 7.25.0-1:
 * int(35)
 * string(67) "Unknown SSL protocol error in connection to graph.facebook.com:443 "
 *
 * @author irnc
 */

$opts = array(
    CURLOPT_URL => 'https://graph.beta.facebook.com/me',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSLVERSION => 3
);

$ch = curl_init();
curl_setopt_array($ch, $opts);
$result = curl_exec($ch);

var_dump(curl_errno($ch), curl_error($ch));
