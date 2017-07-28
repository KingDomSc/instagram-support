# Instagram Support
A simply script to contact with `instagram support` after close a instagram support center in facebook .

# Tree ~

1. index.php :
<dl>
<dt>1. Contain 8 object.</dt>
<dd>
<dl>
<dt>
1. Account Type
</dt>
<dd>
As Combobox .
</dd>
</dl>
<dl>
<dt>
2. Problem Type
</dt>
<dd>
As Combobox .
</dd>
</dl>
<dl>
<dt>
3. Signup Email
</dt>
<dd>
As Inputbox , EMAIL .
</dd>
</dl>
<dl>
<dt>
4. Username
</dt>
<dd>
As Inputbox , TEXT .
</dd>
</dl>
<dl>
<dt>
5. Contact Email
</dt>
<dd>
As Inputbox , EMAIL .
</dd>
</dl>
<dl>
<dt>
6. Proxy
</dt>
<dd>
As Inputbox , TEXT .
</dd>
</dl>
<dl>
<dt>
7. Contact Message
</dt>
<dd>
As Textarea , TEXT .
</dd>
</dl>
<dl>
<dt>
8. Check Username
</dt>
<dd>
As Button , Send Rquest to - Check.php - .
</dd>
</dl>
</dd>
</dl>

2. check.php :
- Send Request to instagram ` api ` to check if username accept to contact with supporting or not .
- Parameter :
```php
$da = '{"username_or_email":"'.$_POST['username'].'","_uuid":"'.strtoupper($gguid).'","device_id":"'.strtoupper($gguid).'","_csrftoken":"missing","qe_version":"ae_v1"}';
$params = 'signed_body='.Letsdoit($da).'.'.$da.'&ig_sig_key_version=4';
```
- Url :
```php
$url = 'https://i.instagram.com/api/v1/accounts/assisted_account_recovery/';
```

3. do.php
- send your message with ` hacked or trouble ` accounts to instagram support.
- Parameter :
```php
$da = '{"reason_failed":"'.$_POST['Problemtype'].'","signup_email":"'.$_POST['e1'].'","_csrftoken":"missing","username":"'.$_POST['u1'].'","additional_info":"'.$_POST['sq'].'","guid":"'.$gguid.'","device_id":"'.$gguid.'","contact_email":"'.$_POST['c1'].'","account_type":"'.$_POST['Accounttype'].'"}';
$params = 'signed_body='.hashsha($da).'.'.$da.'&ig_sig_key_version=4';
```
- Url :
```php
$url = 'https://i.instagram.com/api/v1/users/vetted_device_login_support/';
```
- Check if users set proxy or not :
```php
if ((isset($_POST['p1'])) && (!trim($_POST['p1']) == NULL)) {
        curl_setopt($ch, CURLOPT_PROXY, $_POST['p1']);
}
```
