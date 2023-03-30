<html>
<head>
<title>sum of prime number</title>
</head>
<body>
<form method="POST"><center>
ENTER A MIN VALUE
<input type="text" name="number1"><br><br/>
ENTER A MAX VALUE
<input type="text" name="number2"><br><br/>
<input type=submit value="GET SUM"></center>
</body>
</html>
<?php
if($_POST)
{
	echo"sum of prime number is";
	$min=$_POST['number1'];
	$max=$_POST['number2'];
	$sum=0;
	for($num=$min; $num<=$max;$num++)
	{
		$count=0;
		for($i=2;$i<=sqrt($num);$i++)
		{
			if($num%$i==0)
			{
				$count++;
				break;
			}
		}
		if($count==0 && $num!=1)
			$sum=$sum+$num;
	}
	echo"<b>$sum</b>";
}

?>