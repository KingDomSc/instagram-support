<?php
function Letsdoit($data){
    return hash_hmac('sha256', $data, 'b03e0daaf2ab17cda2a569cace938d639d1288a1197f9ecf97efd0a4ec0874d7');
}
function guidv4()
{
    if (function_exists('com_create_guid') === true) { return trim(com_create_guid(), '{}'); }
    $data = openssl_random_pseudo_bytes(16);
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}
if (isset($_POST['get'])) {
    $gguid = guidv4();
    $url = 'https://i.instagram.com/api/v1/accounts/assisted_account_recovery/';
    $da = '{"username_or_email":"'.$_POST['username'].'","_uuid":"'.strtoupper($gguid).'","device_id":"'.strtoupper($gguid).'","_csrftoken":"missing","qe_version":"ae_v1"}';
    $params = 'signed_body='.Letsdoit($da).'.'.$da.'&ig_sig_key_version=4';
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_POST,count($params));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'User-Agent: Instagram 10.15.0 Android',
    'Accept-Language: en-US',
    'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
    'Expect: 100-continue'
    ));
    $datas = curl_setopt($ch,CURLOPT_POSTFIELDS,$params);
    $response = curl_exec($ch);
    $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    $header = substr($response, 0, $header_size);
    $status = substr($response, $header_size);
}
?>