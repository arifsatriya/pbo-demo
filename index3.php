<html>
<head>
	<title>mendaftar file dari sebuah direktori</title>
</head>
<body>
<?php
	$dir='./pbo/'; //menentukan nama folder yang ingin ditampilkan listnya
	echo '<b>daftar file dari folder ',$dir,'</b>';
	$dh=opendir($dir) or die('error');
	while(($f=readdir($dh)) !== false){
		if(is_file($dir.$f)){
			echo '<li><a href="',$dir.$f,'">', $f, '</a></li>';
		}
	}
	closedir($dh);
?>
</body>
</html>