<?php 
    $name=$_POST['name'];
				    $email=$_POST['email'];
				    $phone=$_POST['phone'];
				    $subject=$_POST['subject'];
				    $message=$_POST['message']; 
				    if (($name=="")||($email=="")||($phone=="")||($message=="")) 
				        { 
				        echo "<p>Lorem ipsum dolar</br>sit amet, consectetuer </p>"; 
				        } 
				    else{         
				        $from="From: $name<$email>\r\nReturn-path: $email";  
				        $subject="$subject"; 
				        mail("info@jordanmike.nl", $subject, 
				"$message 

				From: 	$name

				Phonenumber: 	$phone

				E-mail:		$email", $from);
				        echo "<p>Lorem ipsum dolar</br>sit amet, consectetuer </p>"; 
				        } 
?>