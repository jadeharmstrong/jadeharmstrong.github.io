<!DOCTYPEhtml>
<html>
	
<head lang='en'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">	
<title>The Silver Lining News</title>
<style type="text/css" >    
			
	@import url('https://fonts.googleapis.com/css2?family=Coming+Soon&family=Nixie+One&display=swap');
	h1 {color:rgb(170,169,173); font-family: 'Nixie One', cursive; font-size:8vw; text-align:center;}
	h2 {color:rgb(170,169,173); font-family: 'Coming Soon', cursive; font-size:1.5vw; text-align:center;}
	h3 {color:black; font-family: 'Coming Soon', cursive; font-size:1.5vw; text-align:center;}
	h4 {color:rgb(170,169,173); font-family: 'Coming Soon', cursive; font-size:1vw; text-align:right;}
	
	.linebreak{height:100px;}
	
	.pixel, .pixel2 {
  		margin:2px;
 		float:left;
  		width:25px;
  		height:25px;
  		color: rgb(192,192,192);
		}
		
	#TSL {background-color:height:25%;black; width:100%;overflow:hidden;}	
	
	#text {background-color:black; width:100%; top-margin:25%;}
	
	.button {background-color: rgb(170,169,173); color:black; font-family: 'Coming Soon', cursive; font-size:1.5vw; align: center; text-align:center; bottom-margin:25%}
	
	#newspaper {background-color:rgb(170,169,173); color:black; width:100%;}  
	
	table.newspaper-table {font-family: 'Coming Soon', cursive; font-size:2vw, color:white;}
  	
	#footer {background-color:black; color: rgb(170,169,173); font-family: 'Coming Soon', cursive; font-size:1vw; text-align:right;float:right;}  
	
	.flow {position:relative; background-color:#000; 
	margin-top:6em; float:left;
	-webkit-box-pack: center; -ms-flex-pack: center; justify-content: center;}
 
	.flowboxes {position: relative;width: 84%;display: -ms-grid;display: grid;margin:0 auto;
	-ms-grid-columns:(minmax(183px, 2fr))[auto-fit];
	grid-template-columns: repeat(auto-fit, minmax(183px, 2fr));
	grid-gap: 14px;
	-ms-grid-column-align: center;
	justify-items: center;font-size:medium;
	background-color:0;
	text-wrap:unrestricted;
	}
	
	.floating-box {font-size:14px;width:100%;height:auto;padding:5px;margin: 0px;color:white;text-align:left;vertical-align:bottom;}
	div.floating-box img {width:100%; height:auto;}
	div.floating-box p { }

</style>
	
</head>
<body style="background-color:black;">
<div id="top">
	<div id="pixel"></div>
	<div class="linebreak"></div>
	
	<div id="TSL">
		<br />
		<h1>The Silver Lining</h1>
		<h2>~Bringing inspiration from your local community~</h2><br />
		<h2>Where would you like to go?</h2>        
		<h2><button onclick="goThere()" >Worldwide</button></h2>
	</div>
	
	<div id="pixel2"></div>
	
</div> <!--End top...-->
    <div class="flow">
<!--Currently Editing...-->
<div id="flowboxes" class="flowboxes"style="text-transform:capitalize;">
<?php 	
$silverlininginfo = file_get_contents("silverlining.json") or die("Unable to open file! silverlining.json");
$insta  = json_decode($silverlininginfo);
console.log($insta);

foreach($insta as $row){
foreach($row as $key => $val){
			echo '<div class="floating-box"><a href="'.$val->postUrl.'" target="_blank"><img src="'.$val->imgUrl.'" width="189px" height="130px"></a>';
			echo $val->description.' '.$val->Last_name.'<br/>';
		echo '<br/></div>';
		}
	} 

 ?>	
 </div></div>
	<!--<table id="newspaper-table">
		<table width=100% border="0" cellpadding="5">
		<div class="row1"> <tr>
			<div id="r1c1"><td align="center" valign="center">
				<img src="https://scontent-iad3-1.cdninstagram.com/v/t51.2885-15/e35/s1080x1080/100984327_3196614683711436_6089922079632086958_n.jpg?_nc_ht=scontent-iad3-1.cdninstagram.com&_nc_cat=100&_nc_ohc=fdISEEEI_6MAX_H_sIk&oh=4eff4575e4196adbe776a39c82d05b2a&oe=5EFC58D7" alt="description here" style="width:100%">
				<br>
				<h3>Being positive doesn't mean ignoring the uglier sides of life. It just means focusing on the good as much as possible!\nYou can do it, try these tips:\n\nJournal, keep a diary about a positive future.</h3>
				</td></div>

			<div id="r1c2"><td align="center" valign="center">
				<img src="https://scontent-iad3-1.cdninstagram.com/v/t51.2885-15/e35/s1080x1080/100984327_3196614683711436_6089922079632086958_n.jpg?_nc_ht=scontent-iad3-1.cdninstagram.com&_nc_cat=100&_nc_ohc=fdISEEEI_6MAX_H_sIk&oh=4eff4575e4196adbe776a39c82d05b2a&oe=5EFC58D7" alt="description here" style="width:100%">
				<br>
				<h3>Being positive doesn't mean ignoring the uglier sides of life. It just means focusing on the good as much as possible!\nYou can do it, try these tips:\n\nJournal, keep a diary about a positive future.</h3>
				</td></div>

			<div id="r1c3"><td align="center" valign="center">
				<img src="https://scontent-iad3-1.cdninstagram.com/v/t51.2885-15/e35/s1080x1080/100984327_3196614683711436_6089922079632086958_n.jpg?_nc_ht=scontent-iad3-1.cdninstagram.com&_nc_cat=100&_nc_ohc=fdISEEEI_6MAX_H_sIk&oh=4eff4575e4196adbe776a39c82d05b2a&oe=5EFC58D7" alt="description here" style="width:100%">
				<br>
				<h3>Being positive doesn't mean ignoring the uglier sides of life. It just means focusing on the good as much as possible!\nYou can do it, try these tips:\n\nJournal, keep a diary about a positive future.</h3>
				</td></div>
		</tr></div>

		<div class="row2"> <tr>
			<div id="r2c1"> <td align="center" valign="center">
				<img src="https://scontent-iad3-1.cdninstagram.com/v/t51.2885-15/e35/s1080x1080/100984327_3196614683711436_6089922079632086958_n.jpg?_nc_ht=scontent-iad3-1.cdninstagram.com&_nc_cat=100&_nc_ohc=fdISEEEI_6MAX_H_sIk&oh=4eff4575e4196adbe776a39c82d05b2a&oe=5EFC58D7" alt="description here" style="width:100%">
				<br>
				<h3>Being positive doesn't mean ignoring the uglier sides of life. It just means focusing on the good as much as possible!\nYou can do it, try these tips:\n\nJournal, keep a diary about a positive future.</h3>
				</td></div>

			<div id="r2c2"> <td align="center" valign="center">
				<img src="https://scontent-iad3-1.cdninstagram.com/v/t51.2885-15/e35/s1080x1080/100984327_3196614683711436_6089922079632086958_n.jpg?_nc_ht=scontent-iad3-1.cdninstagram.com&_nc_cat=100&_nc_ohc=fdISEEEI_6MAX_H_sIk&oh=4eff4575e4196adbe776a39c82d05b2a&oe=5EFC58D7" alt="description here" style="width:100%">
				<br>
				<h3>Being positive doesn't mean ignoring the uglier sides of life. It just means focusing on the good as much as possible!\nYou can do it, try these tips:\n\nJournal, keep a diary about a positive future.</h3>
				</td></div>

			<div id="r2c3"> <td align="center" valign="center">
				<img src="https://scontent-iad3-1.cdninstagram.com/v/t51.2885-15/e35/s1080x1080/100984327_3196614683711436_6089922079632086958_n.jpg?_nc_ht=scontent-iad3-1.cdninstagram.com&_nc_cat=100&_nc_ohc=fdISEEEI_6MAX_H_sIk&oh=4eff4575e4196adbe776a39c82d05b2a&oe=5EFC58D7" alt="description here" style="width:100%">
				<br>
				<h3>Being positive doesn't mean ignoring the uglier sides of life. It just means focusing on the good as much as possible!\nYou can do it, try these tips:\n\nJournal, keep a diary about a positive future.</h3>
				</td></div>
		</tr></div>

		<div class="row3"> <tr>
			<div id="r3c1"> <td align="center" valign="center">
				<img src="https://scontent-iad3-1.cdninstagram.com/v/t51.2885-15/e35/s1080x1080/100984327_3196614683711436_6089922079632086958_n.jpg?_nc_ht=scontent-iad3-1.cdninstagram.com&_nc_cat=100&_nc_ohc=fdISEEEI_6MAX_H_sIk&oh=4eff4575e4196adbe776a39c82d05b2a&oe=5EFC58D7" alt="description here" style="width:100%">
				<br>
				<h3>Being positive doesn't mean ignoring the uglier sides of life. It just means focusing on the good as much as possible!\nYou can do it, try these tips:\n\nJournal, keep a diary about a positive future.</h3>
				</td></div>

			<div id="r3c2"> <td align="center" valign="center">
				<img src="https://scontent-iad3-1.cdninstagram.com/v/t51.2885-15/e35/s1080x1080/100984327_3196614683711436_6089922079632086958_n.jpg?_nc_ht=scontent-iad3-1.cdninstagram.com&_nc_cat=100&_nc_ohc=fdISEEEI_6MAX_H_sIk&oh=4eff4575e4196adbe776a39c82d05b2a&oe=5EFC58D7" alt="description here" style="width:100%">
				<br>
				<h3>Being positive doesn't mean ignoring the uglier sides of life. It just means focusing on the good as much as possible!\nYou can do it, try these tips:\n\nJournal, keep a diary about a positive future.</h3>
				</td></div>
			
			<div id="r3c3"> <td align="center" valign="center">
				<img src="https://scontent-iad3-1.cdninstagram.com/v/t51.2885-15/e35/s1080x1080/100984327_3196614683711436_6089922079632086958_n.jpg?_nc_ht=scontent-iad3-1.cdninstagram.com&_nc_cat=100&_nc_ohc=fdISEEEI_6MAX_H_sIk&oh=4eff4575e4196adbe776a39c82d05b2a&oe=5EFC58D7" alt="description here" style="width:100%">
				<br>
				<h3>Being positive doesn't mean ignoring the uglier sides of life. It just means focusing on the good as much as possible!\nYou can do it, try these tips:\n\nJournal, keep a diary about a positive future.</h3>
				</td></div>
		</tr></div>

	</table></div>-->
	<div id="footer">
		<br><h4>Creator: Jade Armstrong</h4>
	</div>
                  
</body>
	
<script type="text/javascript">
	var colors = [
  		"rgb(54,69,79)",
  		"rgb(192,192,192)",
  		"rgb(64,64,64)",
  		"rgb(128,128,128)",
  		"rgb(150,150,150)",
 		"rgb(224,224,224)",
		]
	
	function getRandomColor() {
		var color = colors[Math.floor(Math.random() * colors.length)];
    		return color;
		}

	var num_of_pixels = Math.floor((document.documentElement.clientWidth)/27);
	console.log(num_of_pixels);
	var output = "<div>";
	var output2 = "<div>";
	var rows =7;
	for(var r = 0; r < rows; r++) {
	for(var i = 0; i < num_of_pixels; i++) {
  		output+= '<div style="';
  		output+= "background-color:"+getRandomColor()+";";
  		output+='"" class="pixel"></div>';
		output2+= '<div style="';
  		output2+= "background-color:"+getRandomColor()+";";
  		output2+='"" class="pixel2"></div>';
		}
	}
	output+="</div>";output2+="</div>";
	document.getElementById('pixel2').innerHTML = output;
	document.getElementById('pixel').innerHTML = output;
	
	function goThere(){alert("button clicked")}
</script>
	
</html>
