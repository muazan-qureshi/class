<?php  session_start();
class aptech{
	
	function con(){

		$con = mysqli_connect('localhost','root','','mybase');
		return $con;

	}//con end

	function user_data(){
		if(isset($_POST['btn-user'])){
			$a = $_POST['fname'];
			$b = $_POST['email'];
			$c = $_POST['psw'];
			$d = $_POST['phone'];
			$img = $_FILES['img']['name'];
			$tmp_img = $_FILES['img']['tmp_name'];
			$f = $_POST['add'];
			$qu = mysqli_query($this->con(),"INSERT INTO `user_data`( `u_name`, `u_email`, `u_psw`, `contact`, `address`, `u_img`) VALUES ('$a','$b','$c','$d','$f','$img') ");
			move_uploaded_file($tmp_img,"assets/images/users/".$img);
			if(!$qu){
				echo('<script>alert("Some thing is wrong")</script>');
			}
			else{
		echo('<script>alert("Done")</script>');
			}



		}
	}

function login_user(){
	if(isset($_POST['let_me_in'])){
		$email = $_POST['email'];
		$psw = $_POST['psw'];
	$query = mysqli_query($this->con(),"SELECT u_id ,u_email,u_psw,status FROM `user_data` WHERE u_email = '$email' and u_psw = '$psw'");
		$count = mysqli_num_rows($query);
		if($count == 1){
			$_SESSION['user'] =  $_POST['email'];
			echo('<script>window.location.href="index.php"</script>');

		}
		else{
			echo('<script>alert("Something is wrong")</script>');
		}
		


	}

}

function user_login_details(){
	$a = $_SESSION['user'];
		$query = mysqli_query($this->con(),"SELECT * FROM `user_data` where u_email = '$a' ");
		return $query;


}

function total_portal_user(){
	$query = mysqli_query($this->con(),"SELECT count(u_id)  as u FROM `user_data`");
	$q = mysqli_fetch_array($query,MYSQLI_ASSOC)['u'];
	return $q;
}

}//class end
$ob = new aptech;

?>
