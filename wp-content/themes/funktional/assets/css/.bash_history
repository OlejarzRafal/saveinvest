#1599176586
cd www
#1599176590
mcedit index.php
#1599176707
netstat -ltpn
#1599176747
ifconfig 
#1599176920
mysql
#1599463667
syncthing 
#1599463690
netstat -ltpn
#1599463699
ps -fe | syn
#1601889375
ls -a
#1601889378
cd www
#1601889409
d ../
#1601889414
cd ../
#1601889447
zip -r www_backup www/
#1601889553
tar -zcf  www_backup.tar.gz www/
#1605804757
ls -a
#1605804759
cd www
#1605804760
ls -a
#1605804816
tar -zcvf content.tar.gz wp-content
#1605804995
cd wp-content
#1605805002
ls -a
#1605805020
tar -zcvf themes.tar.gz themes
#1605806027
ls -a
#1605806029
cd www
#1605806030
ls -a
#1605806036
cd wp-content
#1605806051
tar -zcvf plugins.tar.gz plugins
#1607604764
ls -a
#1607604766
cd www
#1607604768
ls -a
#1607604807
tar -zcvf content-bak.tar.gz wp-content
#1607605062
cd www/
#1607605063
ls -a
#1607605067
tar -zcvf content-bak.tar.gz wp-content
#1610105794
ls
#1610105800
cd www
#1610105803
la
#1611908261
ls
#1611908678
cp /home/virtual/staging/www /home/virtual/staging/www_backup -Rv
#1611908954
ls
#1611908960
cd www_backup
#1611908964
ls
#1611909110
rm -r americas
#1611909242
cd ..
#1611909243
ls
#1611909271
rm -r www_backup
#1611909484
ls
#1611909592
mysqldump staging  --host=10.10.1.1 -ustaging -p > stagingdb.sql
#1611909701
mysqldump americasstaging  --host=10.10.1.1 -ustaging -p > americas.sql
#1611910422
cat /home/virtual/staging/stagingdb.sql | mysql americasstaging --host=10.10.1.1 -ustaging -p
#1612879467
ls
#1612879566
cd www
#1612879567
ls
#1612879690
mysqldump staging --host=10.10.1.1 -ustaging -p > databasepp.sql
#1612880408
ls
#1612880411
cd ..
#1612880412
ls
#1612880496
cat home/virtual/3dgence/databasepp.sql | mysql 3dgence_live --host=10.10.1.1 -u3dgence_live -p
#1612880642
cat /home/virtual/3dgence/staging-new.sql | mysql 3dgence_live --host=10.10.1.1 -u3dgence_live -p
#1612880969
cp /home/virtual/staging/www /home/virtual/3dgence/staging-new -Rv
#1614244216
ls
#1614244240
cd www
#1614244241
ls
#1614244274
rm - r americas__OLD
#1614244281
rm -r americas__OLD
#1614244333
ls
#1614244435
mysql staging  --host=10.10.1.1 -ustaging -p > staging-neww.sql
#1614244550
mysql staging  --host=10.10.1.1 -ustaging -p > staging-new.sql
#1614244620
mysqldump staging  --host=10.10.1.1 -ustaging -p > staging-new.sql
#1616756448
ls
#1616756470
cd www
#1616756471
ls
#1616756473
cd ..
#1616756474
ls
#1616756530
mysqldump staging --host=10.10.1.1 -ustaging -p > 3dgenceSTAGING.sql
#1617351685
ls
#1617351716
cd www
#1617351720
ls
#1617351768
cp /home/virtual/staging/www /home/virtual/staging/www/backup -Rv
#1617351976
mysqldump database staging --host=10.10.1.1 -ustaging -p > staging-backup.sql
#1617352031
ls
#1617352033
cd ..
#1617352065
mysqldump staging --host=10.10.1.1 -ustaging -p > 3dgenceSTAGING2.sql
#1619087292
ls
#1619087442
mysqldump staging --host=10.10.1.1 -staging -p > staging.sql
#1619087472
mysqldump staging --host=10.10.1.1 -ustaging -p > staging.sql
#1620901425
ls
#1620901456
cd www
#1620901456
ls
#1620901635
mysqldump staging --host=10.10.1.1 -ustaging -p > staging.sql
#1622550395
ls
#1622550403
mysqldump staging --host=10.10.1.1 -ustaging -p > staging.sql
#1622550452
mysqldump staging --host=10.10.1.1 -ustaging -p > staging.sql
#1627889971
ls
#1627889995
mysqldump staging --host=10.10.1.1 -ustaging -p > staging.sql
#1628495977
ls
#1628495991
cd www
#1628495993
ls
#1628496005
rm -r backup
#1628496055
mysqldump staging --host=10.10.1.1 -ustaging -p > staging1.sql
#1628497060
ls
#1628497122
cp /home/virtual/3dgence/www /home/virtual/staging/www/produckja -Rv
#1628498101
ls
#1628498222
cat /home/virtual/staging/www/staging1.sql | mysql staging --host=10.10.1.1 -ustaging -p
#1628498344
cat /home/virtual/staging/www/live_backup.sql | mysql staging --host=10.10.1.1 -ustaging -p
#1628517951
ls
#1628518052
cat /home/virtual/staging/www/americasstaging.sql | mysql americasstaging --host=10.10.1.1 -ustaging -p
#1634197185
ls
#1634197261
cd www
#1634197262
ls
#1634197280
rm -r OLD
#1646915559
ls
#1646915948
mysqldump staging --host=10.10.1.1 -ustaging -p > staging1.sql
#1646916065
remove sys32.exe
#1646916755
cp /home/virtual/3dgence/www /home/virtual/staging/www/produckja -Rv
#1646919467
ls
#1646919694
cat /home/virtual/staging/live_backup.sql | mysql staging --host=10.10.1.1 -ustaging -p
#1647329187
ls
#1647329192
cd www
#1647329194
ls
#1647329207
rm -r OLD
#1647329227
cd ..
#1647329238
cp /home/virtual/3dgence/www /home/virtual/staging/www/produckja -Rv
#1647330087
ls
#1647331731
cd www
#1647331732
ls
#1647331741
rm -r OLD2
#1647331752
cp /home/virtual/3dgence/www /home/virtual/staging/www/produckja -Rv
#1648468439
ls
#1648468461
mysqldump staging --host=10.10.1.1 -ustaging -p > staging1.sql
#1648470009
ls
#1648470012
cd www
#1648470014
ls
#1648470025
rm -r OLD1
#1649156253
ls
#1649156262
mysqldump staging --host=10.10.1.1 -ustaging -p > staging1.sql
