<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
*{
	margin:0;
	padding:0;	
	-webkit-transition:all 1s;
}
div.banner{
	width:600px;
	height:120px;
	overflow:hidden;
	outline:2px dashed red;
	position:relative;
	margin-left:20px;
	margin-top:20px;
}

div.banner div.scroll{
	position:absolute;
	width:1600px;
	height:inherit;	
	left:120px;
	top:10px;
}
div.banner div.scroll > div{
	float:left;
	width:200px;
	height:100px;	
	margin-right:20px;
}
/*div.banner div.scroll > div:nth-child(1){
	
	
}
div.banner div.scroll > div:nth-child(2){
	background-color:blue;
}
div.banner div.scroll > div:nth-child(3){
	background-color:yellow;
	
}
div.banner div.scroll > div:nth-child(3):hover{
	
	-webkit-transition:all 1s;
}
div.banner div.scroll > div:nth-child(4){
	background-color:#00FFFF;
}
div.banner div.scroll > div:nth-child(5){
	background-color:orange;
}*/
div.but{
	width:50px;
	height:50px;
	background-color:#00CCFF;
}
div.left{
	-webkit-transform:matrix(0.5, -0.3, 0, 1, 0, 0);
	margin-right:-10px;
}
div.right{
	-webkit-transform:matrix(0.5, 0.3, 0, 1, 0, 0);
}

</style>

</head>

<body>
<div class="banner">
	<div class="scroll">
		<?php
			$n=0;
			$c=1;
				// dir
				//while
					// echo <div><img src='?' /></div>
					
				$dir = './images2';
		$allowed_type = array('jpg','jpeg','png','gif');

		$d = dir($dir);
		while( $f = $d->read() ){
			$ftype = end(explode('.', $f));
			if( !in_array( strtolower($ftype),$allowed_type) ) continue;
			echo "<div><img src='$dir/$f' width='100'/></div>";
			$n++;
		}
				
			?>
        </div>
	</div>
	
<div class="but"></div>
</body>
</html>
<script type="text/javascript" language="javascript">
var i=0,j=1,k=2;
butt=document.getElementsByClassName('but').item(0);
divs=document.getElementsByClassName('scroll').item(0);
butt.onclick=function(){	
	divs.style.left=(i*255)+'px';
	divs.getElementsByTagName('div').item((j+j)-2).className='';
	divs.getElementsByTagName('div').item(j-1).className='left';
	divs.getElementsByTagName('div').item(j).className='';
	divs.getElementsByTagName('div').item(j+1).className='right';
	i--;
	j++;
	
}

</script>
