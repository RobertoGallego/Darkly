# Hidden files and directories

## Notes

```bash
wget -rkpN -e robots=off http://192.168.1.86/.hidden/
wget --recursive --no-parent http://192.168.1.86/.hidden/  
wget ‐‐recursive ‐‐no-clobber ‐‐no-parent http://192.168.1.86/.hidden/

find 192.168.1.86/.hidden -name "README"

find 192.168.1.86/.hidden -name "README" -exec cat {} +

find 192.168.1.86/.hidden -name "README" -exec cat {} + > 1

sed -n '/Demande/!p' 1 > 2
sed -n '/Tu/!p' 2 > 3    
sed -n '/Non/!p' 3 > 4
sed -n '/Tou/!p' 4 > 5
```

99dde1d35d1fdd283924d84e6d9f1d820

we double check this.

```bash
grep -rnw '192.168.1.86/.hidden' -e '99dde1d35d1fdd283924d84e6d9f1d820'
192.168.1.86/.hidden/whtccjokayshttvxycsvykxcfm/igeemtxnvexvxezqwntmzjltkt/lmpanswobhwcozdqixbowvbrhw/README:1:99dde1d35d1fdd283924d84e6d9f1d820
```

sha256: d5eec3ec36cf80dce44a896f961c1831a05526ec215693c8f2c39543497d4466

##Correction

this is a admin area normally need to be block for users,
this kind of files they dont need to have important context

## Info

[wget](https://stackoverflow.com/questions/273743/using-wget-to-recursively-fetch-a-directory-with-arbitrary-files-in-it)<br/>
[decryptpassword](https://decryptpassword.com/encrypt/1624782-99dde1d35d1fdd283924d84e6d9f1d820.html)<br/>