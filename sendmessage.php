<?php
 if(isset($_POST['submit'])){
include 'includes/config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];



$qry = "INSERT INTO message (name,email,message,subject)
							VALUES('$name','$email','$message','$subject')";
							$result=mysqli_query($conn,$qry) or die(mysqli_error($conn));
							if($result>0){
								echo "<script type = \"text/javascript\">
											alert(\"Thank you for contacting us. You will get a reply as soon as posssible.\");
											window.location = (\"index.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Submission failed. Try Again\");
											window.location = (\"index.php\")
											</script>";
							}
						}


 ?>