<?php 

function uploadExcelReport($file)
{
	if($file['excelfile']['name']!='')
		{
			$num = rand(0,10000);
			$allowed_ext = array('xls','csv');
			if(!empty($file['excelfile']['name']))
			{
				$info = pathinfo($file['excelfile']['name']);
				$exe = $info['extension'];
				if(in_array($exe,$allowed_ext))
				{
					$excelfile = "excelfile".$num.'.'.$exe; 
					$target = 'uploads/'.$excelfile;
					$result = move_uploaded_file($file['excelfile']['tmp_name'], $target);
					//$sql3 = "UPDATE ".APPOINTMENT." SET idproof='$excelfile'"; 
				    //$qry = mysql_query($sql3);
					if($result)
					{
						$msg=$excelfile;
					}else{
							$msg = "File Upload Failed";
						 }
				}else{ $msg="Please Upload Excel file only!"; }
				return $msg;
			}
		}
}
function insertExcelData($name,$address,$email,$phone,$company,$source,$status)
{
			$query = "INSERT INTO crm_lead_data SET name='".$name."',
													address = '".$address."',
													email = '".$email."',
													phone = '".$phone."',
													company = '".$company."',
													source = '".$source."',
													status = '".$status."',
													uploadedBy = '".$_SESSION['UserID']."',
													insert_date = NOW()";
			$qry = mysql_query($query);
			if($qry==1)
			{$msg = "Data insert Successfully";}else{$msg="insert Failed";}
			return $msg;
}
function getAllUploadData()
{
	$sql = mysql_query("SELECT * FROM crm_lead_data WHERE 1");
	while($res = mysql_fetch_assoc($sql))
	{
		$data[] = $res;
	}
	return $data;
}
function getLeadRow($id)
{
	$sql = mysql_query("SELECT * FROM crm_lead_data WHERE id = '$id'");
	$res = mysql_fetch_assoc($sql);
	return $res;
}
function deleteExportData($id)
{
	$qry = mysql_query("DELETE FROM crm_lead_data WHERE id='$id'");
	if($qry==1)
	{$msg = "Data insert Successfully";}else{$msg="insert Failed";}
	return $msg;
}
function updateleadCallStatus($id)
{
	//echo "UPDATE crm_lead_data SET calling = '1' WHERE id='$id'";
	$qry = mysql_query("UPDATE crm_lead_data SET calling = '1' WHERE id='$id'");
	if($qry==1)
	{$msg = "Lead Call Not Responding";}else{$msg="Lead call Failed";}
	return $msg;
}
function insertFollowup($id,$type)
{
	$followup = checkFollowLeads($id);
	if($followup == "true")
	{
		//echo "UPDATE crm_follow_up SET `lead_type` = '$type' WHERE `leadId` = '$id'";
		$updateqry = mysql_query("UPDATE crm_follow_up SET `lead_type` = '$type' WHERE `leadId` = '$id'");
		if($updateqry==1)
		{$msg="Followup Update Successfully";}else{$msg = "Update Failed";}
	}else{
	$sql = "INSERT INTO crm_follow_up SET `leadId` = '$id',
											`lead_type` = '$type',
											`followup_date`=NOW(),
											`createdBy` = '$_SESSION[UserID]',
											`storename` = '$_SESSION[storeName]',
											`insert_date` = NOW()";
	$qry = mysql_query($sql);
	}
	if($qry==1)
	{$msg="Followup Insert Successfully";}else{$msg = "Status Failed";}

	$lead = checkLeads($id);
	if($lead == "true")
	{
	$sql = mysql_query("UPDATE crm_leads SET `lead_type` = '$type' WHERE `leadId` = '$id'");
	}else{
		$sql = mysql_query("INSERT INTO crm_leads SET `leadId` = '$id',
															`storename` = '$_SESSION[storeName]',
															`lead_type` = '$type',
															`createdBy` = '$_SESSION[UserID]',
															`insert_date` = NOW()");
		}
	return $msg;
}
function checkLeads($id)
{
	$qry = mysql_query("SELECT * FROM crm_leads WHERE `leadId` = '$id'");
	$num = mysql_num_rows($qry);
	if($num>0)
	{return "true";}else{return "false";}
}
function checkFollowLeads($id)
{
	$qry = mysql_query("SELECT * FROM crm_follow_up WHERE `leadId` = '$id'");
	$num = mysql_num_rows($qry);
	if($num>0)
	{return "true";}else{return "false";}
}
function makeAppointment($postdata)
{
	
	$appId = "";
	$name = "";
	$address = "";
	$email = "";
	$phone = "";
	$company = "";
	$source = "";
	$status = "";
	$userId = "";
	$interval="";
	if(isset($postdata['app_date'])&&$postdata['app_date']!='')
	{ $app_date2 = $postdata['app_date'];$app_date = date('Y-m-d',strtotime($app_date2));}else{ $app_date='';}
	if(isset($postdata['sourced'])&&$postdata['sourced']!=''){$sourced = $postdata['sourced'];}else{$sourced = "";}
	
	if(isset($postdata['interval'])&&$postdata['interval']!=''){$interval = $postdata['interval'];}else{$interval = "";}
	if(isset($postdata['apptime'])&&$postdata['apptime']!=''){$apptime = $postdata['apptime'].' '.$interval;}else{$apptime = "";}
	if(isset($postdata['sales_agent'])&&$postdata['sales_agent']!=''){$sales_agent = $postdata['sales_agent'];}else{$sales_agent = "";}
	if(isset($postdata['conversion'])&&$postdata['conversion']!=''){$conversion = $postdata['conversion'];}else{$conversion = "";}
	if(isset($postdata['manager_name'])&&$postdata['manager_name']!=''){$manager = $postdata['manager_name'];}else{$manager = "";}
	if(isset($postdata['appoint_status'])&&$postdata['appoint_status']!=''){$appoint_status = $postdata['appoint_status'];}else{$appoint_status = "";}
	if(isset($postdata['tele_agent'])&&$postdata['tele_agent']!=''){$tele_agent = $postdata['tele_agent'];}else{$tele_agent = "";}
	if(isset($postdata['comment'])&&$postdata['comment']!=''){ $comment = $postdata['comment'];}else{ $comment='';}
	$leadId = $postdata['leadId'];
	
	if($_SESSION['StoreCode']=="")
			{
			$storeCode = $_SESSION['storeName'];
			}else{
			$storeCode = $_SESSION['StoreCode'];
			}
			 $appId = "app-".rand(0,100).time();
			   $sql = "INSERT INTO ".APPOINTMENT." SET `appoint_id` = '$appId',
											`leadId` = '$leadId',
											`StoreCode` = '$storeCode',
											`sourced` = '$sourced',
											`sales_agent` = '$sales_agent',
											`conversion` = '$conversion',
											`manager` = '$manager',
											`tele_caller` = '$tele_agent',
											`followup_date` = '$app_date',
											`time`='$apptime',
											`appoint_status`='$appoint_status',
											`comment` = '$comment'"; 
											
			$qry = mysql_query($sql) or die("can't Perform");
			if($qry==1)
			{
			$sql2 = mysql_query("INSERT INTO ".APPOINTTMENTHISTORY." SET `appoint_id` = '$appId',
											`customerId` = '$customerId',
											`fname` = '$name',
											`address` = '$address',
											`email` = '$email',
											`mobile` = '$phone',
											`sales_agent` = '$sales_agent',
											`conversion` = '$conversion',
											`manager` = '$manager',
											`sourced` = '$sourced',
											`comment` = '$comment'"); 
				$lead = checkLeads($leadId);
				if($lead == "true")
				{
					$sql = mysql_query("UPDATE crm_leads SET `lead_type` = '1' WHERE `leadId` = '$leadId'");
				}else{
					$sql = mysql_query("INSERT INTO crm_leads SET `leadId` = '$leadId',
															`storename` = '$storeCode',
															`lead_type` = '1',
															`createdBy` = '$_SESSION[UserID]',
															`insert_date` = NOW()");
					
					}
			}
	if($qry==1)	
	{
		$msg = "Appointment Saved Successfully";
		}else{$msg = "Appointment Failed";}
		return $msg;
	}
function notInterested($id,$type)
{
	if($_SESSION['StoreCode']=="")
		{
		$storeCode = $_SESSION['storeName'];
		}else{
		$storeCode = $_SESSION['StoreCode'];
		}
	$lead = checkLeads($id);
	if($lead == "true")
	{
		$update = mysql_query("UPDATE crm_leads SET `lead_type` = '$type' WHERE `leadId` = '$id'");
		if($update==1)
		{$msg="Status Update Successfully";}else{$msg = "Update Failed";}
	}else{
	 $sql = "INSERT INTO crm_leads SET `leadId` = '$id',
										`storename` = '$storeCode',
											`lead_type` = '$type',
											`createdBy` = '$_SESSION[UserID]',
											`insert_date` = NOW()";
	$qry = mysql_query($sql);
	if($qry==1)
	{$msg="Status Insert Successfully";}else{$msg = "Status Failed";}
	}
	return $msg;
}
function checkDuplicateCustomer($name,$email,$company)
{
	$sql = "SELECT * FROM crm_customer_master WHERE email = '$email' AND (company = '$company' OR fname = '$name')";
	$qry = mysql_query($sql);
	$num = mysql_num_rows($qry);
	if($num>0)
	{return "true";}else{return "false";}
}
function getLeadStatus($leadId)
{
	//echo "SELECT * FROM crm_leads WHERE `leadId` = '$leadId'";
	$qry = mysql_query("SELECT * FROM crm_leads WHERE `leadId` = '$leadId'");
	$res = mysql_fetch_assoc($qry);
	return $res;
}
function appointmentCoversion($appoint_id)
{
	$sql = "SELECT a.*,l.* FROM crm_lead_data as l,".APPOINTMENT." as a WHERE l.id = a.leadId";
	$qry = mysql_query($sql);
	$userRow = mysql_fetch_assoc($qry);
	if($_SESSION['StoreCode']=="")
		{
		$storeCode = $_SESSION['storeName'];
		}else{
		$storeCode = $_SESSION['StoreCode'];
		}
		if(!empty($userRow))
		{	
			$appId = $userRow['appoint_id'];
			$leadId = $userRow['leadId'];
			$customerId = 'cus-app-'.rand(0,100).time();
			$app_date = $userRow['appoint_date'];
			$time = $userRow['time'];
			$conversion = $userRow['conversion'];
			$name = $userRow['name'];
			$address = $userRow['address'];
			$email = $userRow['email'];
			$phone = $userRow['phone'];
			$company = $userRow['company'];
			$source = $userRow['source'];
			$status = $userRow['status'];
			$customer = checkDuplicateCustomer($name,$email,$company);
			if($customer=="false")
			{
			$sqlCus = "INSERT INTO ".CUSTOMERMASTER." SET `customerId` = '$customerId',
   											`StoreCode` = '$storeCode',
 											`fname` = '$name',
											`address` = '$address',
											`email` = '$email',
											`mobile` = '$phone',
											`company` = '$company',
											`appoint_date` = '$app_date',
											`time` = '$time',
											`status` = '$conversion',
											`insert_date` = NOW()"; 
			 $cssql = mysql_query($sqlCus);
				if($cssql==1)	
				{
					mysql_query("UPDATE ".APPOINTMENT." SET appoint_status = '3' WHERE appoint_id = '$appId'");
					mysql_query("UPDATE crm_lead SET lead_type = '1' WHERE leadId = '$leadId'");
					$msg = "Appointment Converted";
				}
			}else{$msg = "This Customer Already Exists";}
			 $sqlApp = "UPDATE ".APPOINTMENT." SET `customerId` = '$customerId',
   											`StoreCode` = '$storeCode',
 											`fname` = '$name',
											`address` = '$address',
											`email` = '$email',
											`mobile` = '$phone',
											`company` = '$company',
											`followup_date` = '$app_date',
											`time` = '$time',
											`status` = '$conversion',
											`insert_date` = NOW() WHERE appoint_id = '$appId'"; 
			mysql_query($sqlApp);
			
		}
		return $msg;
	}
?>
	
