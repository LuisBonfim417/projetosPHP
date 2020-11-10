< ? php
$ connection = mysql_connect ( "MYSQL5030.site4now.net" , "9f9dea_arduino" , "Bidy061989" ) ;
mysql_select_db ( "db_9f9dea_arduino" , $ conexão ) ;
mysql_query ( "INSERT INTO` tempumid` (` temperatura`) VALUE ('" . $ _GET [ ' value ' ] . "') " , $ connection ) ;

? >