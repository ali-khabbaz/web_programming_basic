<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nixy Banner</title>
<link type="text/css" rel="stylesheet" href="banner.css" />
<script type="text/javascript" src="banner.js" ></script>
</head>
<body>
<div class="container">
	<div class="banner">
    	<div class="scroll">
			<?php
			$n=0;
			$c=1;
				// dir
				//while
					// echo <div><img src='?' /></div>
					
				$dir = './images';
		$allowed_type = array('jpg','jpeg','png','gif');

		$d = dir($dir);
		while( $f = $d->read() ){
			$ftype = end(explode('.', $f));
			if( !in_array( strtolower($ftype),$allowed_type) ) continue;
			echo "<div><img src='$dir/$f' /></div>";
			$n++;
		}
				
			?>
        </div>
        <ul class="btn">
        	<?php
				// be tedad img ha li besazid !
				$dir = './images';
		$allowed_type = array('jpg','jpeg','png','gif');

		$d = dir($dir);
				while( $f = $d->read() ){
			$ftype = end(explode('.', $f));
			if( !in_array( strtolower($ftype),$allowed_type) ) continue;
			echo "<li><img src='$dir/$f' /></li>";
			
		}
			?>
        </ul>
			
</div>
		
        
    </div>
    	
</div>

</body>
</html>
