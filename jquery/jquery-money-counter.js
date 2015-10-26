<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>None</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript">

	var refDate = new Date();
	var refValue = "00.00";

	function insertCommas(nAmt){
		
		var currAmt = nAmt.toFixed(2);
	 	while(/(\d+)(\d{3})/.test(currAmt))
			{
			 currAmt = currAmt.replace(/(\d+)(\d{3})/, "$1,$2");
			}
		return currAmt;
	}

	function RooneyCounter(){

		var currDate = new Date();
		var elapsedSeconds = Math.round((refDate-currDate)/140);
		var elapsedValue = elapsedSeconds/100;  
		var nRef = refValue.replace(/\,/g,"");
		var result = insertCommas(nRef - elapsedValue);
		document.getElementById('upCountRooney').innerHTML = " $"+ result;
		setTimeout("RooneyCounter()",1000);
	}

	function CameronCounter(){

		var currDate = new Date();
		var elapsedSeconds = Math.round((refDate-currDate)/2000);
		var elapsedValue = elapsedSeconds/100;  
		var nRef = refValue.replace(/\,/g,"");
		var result = insertCommas(nRef - elapsedValue);
		document.getElementById('upCountCameron').innerHTML = " $"+ result;
		setTimeout("CameronCounter()",1000);
	}

	function TeacherCounter(){

		var currDate = new Date();
		var elapsedSeconds = Math.round((refDate-currDate)/20000);
		var elapsedValue = elapsedSeconds/100;  
		var nRef = refValue.replace(/\,/g,"");
		var result = insertCommas(nRef - elapsedValue);
		document.getElementById('upCountTeacher').innerHTML = " $"+ result;
		setTimeout("TeacherCounter()",1000);
	}

	function CivilSerCounter(){

		var currDate = new Date();
		var elapsedSeconds = Math.round((refDate-currDate)/45000);
		var elapsedValue = elapsedSeconds/100;  
		var nRef = refValue.replace(/\,/g,"");
		var result = insertCommas(nRef - elapsedValue);
		document.getElementById('upCountCivilSer').innerHTML = " $"+ result;
		setTimeout("CivilSerCounter()",1000);
	}

	navigator.appName == "Microsoft Internet Explorer" ? attachEvent('onload', RooneyCounter, false) : addEventListener('load', RooneyCounter, false);
	navigator.appName == "Microsoft Internet Explorer" ? attachEvent('onload', CameronCounter, false) : addEventListener('load', CameronCounter, false);
	navigator.appName == "Microsoft Internet Explorer" ? attachEvent('onload', TeacherCounter, false) : addEventListener('load', TeacherCounter, false);
	navigator.appName == "Microsoft Internet Explorer" ? attachEvent('onload', CivilSerCounter, false) : addEventListener('load', CivilSerCounter, false);
	

</script>

</head>
	<body>
		<div id="upCountRooney"></div>
		<div id="upCountCameron"></div>
		<div id="upCountTeacher"></div>
		<div id="upCountCivilSer"></div>
	</body>
</html>