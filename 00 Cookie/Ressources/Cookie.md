# Secure Cookie Attribute

The secure attribute is an option that can be set by the application server when sending a new cookie to the user within an HTTP Response. The purpose of the secure attribute is to prevent cookies from being observed by unauthorized parties due to the transmission of the cookie in clear text.

## Notes

Checking the cookie we can see that we have:

```bash
HTTP/1.1 200 OK
Server: nginx/1.8.0
Date: Wed, 17 Mar 2021 12:57:30 GMT
Content-Type: text/html
Transfer-Encoding: chunked
Connection: keep-alive
X-Powered-By: PHP/5.3.10-1ubuntu3.19
Set-Cookie: I_am_admin=68934a3e9455fa72420237eb05902327; expires=Wed, 17-Mar-2021 13:57:25 GMT
```

```bash
http://192.168.1.34/?page=member&id=%3Cscript%3Ealert(document.cookie)%3C/script%3E&Submit=Submit#
```

if we look the Set-Cookie we can note that we get: 

```bash
I_am_admin=68934a3e9455fa72420237eb05902327
```

that mean our value is false checking the hash algorithm md5. so we are not admin.
if we change this value to true (b326b5062b2f0e69046810717534cb09) we get the flag.

```php
<
	?php
	$str = 'false';
	echo md5($str);
?>
```

## Info
[md5](https://md5.gromweb.com/?string=42)
[owasp cookie](https://owasp.org/www-community/controls/SecureCookieAttribute#)
[owasp top 10 guide](https://thehackerish.com/owasp-top-10-the-ultimate-guide/)
