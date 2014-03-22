<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Twitterからひっぱってくるぞー【ADDIX】</title>
<meta name="Description" content="" />
<meta name="Keywords" content="" />
<meta http-equiv="Content-Style-Type" content="text/css" />

</head>
<body>
<p>

	<?php
	if (is_uploaded_file($_FILES["upfile"]["tmp_name"])) {
  			
  		if (move_uploaded_file($_FILES["upfile"]["tmp_name"], "files/" . $_FILES["upfile"]["name"])) {
    
    	chmod("files/" . $_FILES["upfile"]["name"], 0644);
    		
    		echo $_FILES["upfile"]["name"] . "をアップロードしました。";
 			} else {
    		echo "ファイルをアップロードできません。";
  			}
	
	} else {
  			echo "ファイルが選択されていません。";
	}

?></p>
</body>
</html>