<?php  
$first_name= $_POST['first_name'];  
$last_name= $_POST['last_name'];  
$title= $_POST['title'];  
$company= $_POST['company'];  
$address1= $_POST['address1'];  
$address2= $_POST['address2'];  
$city= $_POST['city'];  
$state= $_POST['state'];  
$zip= $_POST['zip'];  
$country= $_POST['country'];  
$email= $_POST['email'];  
$phone= $_POST['phone'];  
$fax= $_POST['fax'];  
$category= $_POST['category'];  
$request_category= $_POST['request_category'];  
$request= $_POST['request'];  
$message=  $_POST['message'];  

$body = "  
First Name: $first_name  
Last Name: $last_name  
Title: $title  
Company: $company  
Address:  
    $address1  
    $address2  
    $city  
    $state  
    $zip  
    $country  

Email: $email  
Phone: $phone  
Fax: $fax  
Request Category: $request_category  
Additional Info: $request 
$message  
";  

if  (!isset($email)  ||  !isset($first_name))  {  
header("Location: [url]http://www.yourwebsite.com/error.php[/url] ");  
}  
elseif  (empty($email)  ||  empty($first_name))  {  
header("Location: [url]http://www.yourwebsite.com/error.php[/url] ");  
}  
else  {  
mail("sayantan.paul04@gmail.com","From: sayantanpaul20010@gmail.com",$body);  
header("Location: [url]http://www.yourwebsite.com/thankyou.php[/url] ");  
}  
?> 