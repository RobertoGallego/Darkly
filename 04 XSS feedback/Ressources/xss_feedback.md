# Cross Site Scripting XSS Feedback

Cross-Site Scripting (XSS) attacks are a type of injection, in which malicious scripts are injected into otherwise benign and trusted websites. XSS attacks occur when an attacker uses a web application to send malicious code, generally in the form of a browser side script, to a different end user. Flaws that allow these attacks to succeed are quite widespread and occur anywhere a web application uses input from a user within the output it generates without validating or encoding it.

## Notes

we can modify the maxlen put scripts and html, js inside example:

<h1>Élément de titre</h1>

On the Feedback Page 

```bash
http://192.168.99.100/index.php?page=feedback
```

we can get the flag just writing script in the name input
<script> tag in the 'comment' 

THE FLAG IS : 0FBB54BBF7D099713CA4BE297E1BC7DA0173D8B3C21C1811B916A3A86652724E

Just by using a simple typo ("script") we can create an XSS fail.

<svg/onload=alert('XSS')>a

we need to protect form from this kind of attacks because we can stores this code in the database in a comment, creating an article or in any input

## Info

[medium](https://medium.com/@amar.infosec4fun/xss-challenges-4c21b3ae9673)<br/>
[gist](https://gist.github.com/rvrsh3ll/09a8b933291f9f98e8ec)<br/>
[owasp](https://owasp.org/www-community/xss-filter-evasion-cheatsheet)<br/>
[owasp]https://owasp.org/www-community/attacks/xss/<br/>

