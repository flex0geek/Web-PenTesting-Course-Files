<?php

header("Content-Type: application/json");
if(isset($_GET['callback'])){
	echo $_GET['callback'].'({"username":"guest","Full Name":"Guest user", "email":"guest@gmail.com","privateGroups":["priv","private","our course","Work Group"]})';
}else{
	echo '{"username":"guest","Full Name":"Guest user", "email":"guest@gmail.com","privateGroups":["priv","private","our course","Work Group"]}';
}