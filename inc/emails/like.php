<?php

$data = array(
 '
<head>
  <title>Like Page</title>
</head>
<body>
  <p>Hello '.$email.',</p>
  <p>Please click the following link to like 1callgroup page:<p>
   
</body>
</html>'


	);
	
$headers ='MIME-Version: 1.0\nContent-Type: text/HTML; charset=ISO-8859-1;\n';
$subject = "Like Page";
$to = $email;
$status=mail($to, $subject, $message, $header); 	  	

 
