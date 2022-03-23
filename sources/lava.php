<?php  if(!defined('SOURCES')) die("Error");		
	$id = htmlspecialchars($_GET['id']);
	//echo $id;die;
	switch($id){
		case 'buoc-3':
			step3();
			$template ="lava/step3";
		break;
		
		case 'buoc-2':
			step2();
			$template ="lava/step2";
		break;	

		default: 
			step1();
			$template = "lava/lava";
			break;
	}	

	function step1()
	{
		global $d,$func,$config_url;
		
		$data = array();
		$data['location'] = (isset($_POST['location']) && $_POST['location'] != '') ? htmlspecialchars($_POST['location']) : '';
		$data['code'] = (isset($_POST['code']) && $_POST['code'] != '') ? htmlspecialchars($_POST['code']) : '';
		if(!empty($_POST))
		{
			$location=$data['location'];
			$code = $data['code'];
			$row_detail = $d->rawQueryOne("select mathe from #_news where mathe = '".$code."' and type = 'the-bao-hanh-lava' and hienthi > 0 limit 0,1");
			//echo $row_detail['mathe'];die;
			if($row_detail['mathe']!='')
			{
				
				$_SESSION['location']=$location;
				$_SESSION['code']=$code;
				$func->redirect('http://labkhoinguyen.vinavietnam.net/bao-hanh-lava/buoc-2');
			}
		}

	}

	function step2()
	{
		global $d,$func,$config_url;
		$location = $_SESSION['location'];
		$code = $_SESSION['code'];
		if(isset($_POST['xacnhan']))
		{
			$_SESSION['location']=$location;
			$_SESSION['code']=$code;
			$func->redirect('http://labkhoinguyen.vinavietnam.net/bao-hanh-lava/buoc-3');
		}
		if(isset($_POST['quaylai']))
		{
			$func->redirect('http://labkhoinguyen.vinavietnam.net/bao-hanh-lava');
		}
	}
	function step3()
	{
		global $d,$func,$config_url;
		$location = $_SESSION['location'];
		$code = $_SESSION['code'];
		if(isset($_POST['quaylai']))
		{
			$func->redirect('http://labkhoinguyen.vinavietnam.net/bao-hanh-lava/buoc-2');
		}
	}
?>