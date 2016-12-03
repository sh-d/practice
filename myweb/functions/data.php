<?php 
function data_page($dbc,$id)
{
	$query="SELECT * FROM pages where id = $id"; 
	$result=mysqli_query($dbc, $query);
	$data=mysqli_fetch_assoc($result);
	
	$data['body_nohtml']= strip_tags($data['body']);
	
	if($data['body']==$data['body_nohtml'])
	{
		$data['body_formatted'] = '<p>'.$data['body'].'</p>';
		
	}
	else {
		$data['body_formatted']=$data['body'];
	}
	return $data;
}
function login($dbc,$emailid,$password){
	$query = "Select * from users where emailid = \"$emailid\" and password = \"$password\"";
	$result = mysqli_query($dbc, $query);
	$data=mysqli_fetch_assoc($result);
	if($emailid==$data['emailid'] && $password==$data['password']){
		return $data;
	}else {
		echo 'error ';
	}
}

?>