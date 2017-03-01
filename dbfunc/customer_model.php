<?php 
function getAgent($id)
{
	$sql=mysql_query("SELECT * FROM ".ALLMEMBERS." WHERE agentId = '$id'");
	$res = mysql_fetch_assoc($sql);
	return $res;
}
function getOrderAmount($id)
{
	$sql=mysql_query("SELECT Balance,PendingAmount,AdvAmount FROM ".ORDERMASTER." WHERE CustomerID = '$id'");
	$res = mysql_fetch_assoc($sql);
	return $res;
}
function getBank($val)
{
	$result_list = array();
	$sql="SELECT * FROM ".INSTITUTE." WHERE ins_code LIKE 'ins_code_" . $val. "%'";
	$query2 = mysql_query($sql);
	while($row = mysql_fetch_assoc($query2)) 
	{
		$result_list[] = $row;
	}
	return $result_list;
}
function insertCustomer($postdata,$customerId,$file) 
{
	
/*echo"<pre>";
print_r($postdata);
echo"</pre>";	*/
//die();
$requirment2="";
$facility2="";

if(isset($postdata['email'])&&$postdata['email']!='')
		{$email = $postdata['email'];}else{$email = '';}
if(isset($postdata['costomer_type'])&&$postdata['costomer_type']!='')
		{$costomer_type = $postdata['costomer_type'];}else{$costomer_type = '';}
if(isset($postdata['customer_id'])&&$postdata['customer_id']!='')
		{$customer_id = $postdata['customer_id'];}else{$customer_id = '';}
if(isset($postdata['sourcess'])&&$postdata['sourcess']!='')
		{$sourcess = $postdata['sourcess'];}else{$sourcess = '';}	
if(isset($postdata['services'])&&$postdata['services']!='')
		{$services = $postdata['services'];}else{$services = '';}			
if(isset($postdata['source_type'])&&$postdata['source_type']!='')
		{$source_type = $postdata['source_type'];}else{$source_type = '';}			
if(isset($postdata['source_date'])&&$postdata['source_date']!='')
		{$source_date2 = $postdata['source_date'];$source_date = date('Y-m-d',strtotime($source_date2));}else{$source_date = '';}	
if(isset($postdata['company'])&&$postdata['company']!='')
		{$company = $postdata['company'];}else{$company = '';}	
if(isset($postdata['prev_company'])&&$postdata['prev_company']!='')
		{$prev_company = $postdata['prev_company'];}else{$prev_company = '';}	
if(isset($postdata['bank'])&&$postdata['bank']!='')
		{$bank = $postdata['bank'];}else{$bank = '';}		
if(isset($postdata['mobile'])&&$postdata['mobile']!='')
		{$mobile = $postdata['mobile'];}else{$mobile = '';}				
if(isset($postdata['address'])&&$postdata['address']!='')
		{$address = $postdata['address'];}else{$address = '';}
if(isset($postdata['dob'])&&$postdata['dob']!='')
		{$dob2 = $postdata['dob'];$dob = date('Y-m-d',strtotime($dob2));}else{$dob = '';}
if(isset($postdata['pincode'])&&$postdata['pincode']!='')
		{$pincode = $postdata['pincode'];}else{$pincode = '';}
if(isset($postdata['block'])&&$postdata['block']!='')
		{$block = $postdata['block'];}else{$block = '';}		
if(isset($postdata['district'])&&$postdata['district']!='')
		{$district = $postdata['district'];}else{$district = '';}		
if(isset($postdata['zonalcode'])&&$postdata['zonalcode']!='')
		{$zonalcode = $postdata['zonalcode'];}else{$zonalcode = '';}			
if(isset($postdata['identity'])&&$postdata['identity']!='')
		{$identity = $postdata['identity'];}else{$identity = '';}
if(isset($postdata['facility_manager'])&&$postdata['facility_manager']!='')
		{$facility_manager = $postdata['facility_manager'];}else{$facility_manager = '';}
if(isset($postdata['cardnumber'])&&$postdata['cardnumber']!='')
		{$cardnumber = $postdata['cardnumber'];}else{$cardnumber = '';}
if(isset($postdata['pancardno'])&&$postdata['pancardno']!='')
		{$pancardno = $postdata['pancardno'];}else{$pancardno = '';}
if(isset($postdata['field_staff'])&&$postdata['field_staff']!='')
		{$field_staff = $postdata['field_staff'];}else{$field_staff = '';}
if(isset($postdata['travel_agent'])&&$postdata['travel_agent']!='')
		{$travel_agent = $postdata['travel_agent'];}else{$travel_agent = '';}	
if(isset($postdata['tele_caller'])&&$postdata['tele_caller']!='')
		{$tele_caller = $postdata['tele_caller'];}else{$tele_caller = '';}	
if(isset($postdata['nationality'])&&$postdata['nationality']!='')
		{$nationality= $postdata['nationality'];}else{$nationality= '';}													
if(isset($postdata['mname'])&&$postdata['mname']!='')
		{$mname= $postdata['mname'];}else{$mname= '';}	
	
if(isset($postdata['state'])&&$postdata['state']!='')
		{$state = $postdata['state'];}else{$state = '';}	
if(isset($postdata['city'])&&$postdata['city']!='')
		{$city = $postdata['city'];}else{$city = '';}	
if(isset($postdata['status'])&&$postdata['status']!='')
		{$status = $postdata['status'];}else{$status = '';}			
if(isset($postdata['source_form'])&&$postdata['source_form']!='')
		{$source_form = $postdata['source_form'];}else{$source_form = '';}	
		
if(isset($postdata['contact_person'])&&$postdata['contact_person']!='')
		{$contact_person = $postdata['contact_person'];}else{$contact_person = '';}	
if(isset($postdata['fire_safety'])&&$postdata['fire_safety']!='')
		{$fire_safety = $postdata['fire_safety'];}else{$fire_safety = '';}	
if(isset($postdata['marriage_anniv'])&&$postdata['marriage_anniv']!='')
		{$marriage_anniv = $postdata['marriage_anniv'];}else{$marriage_anniv = '';}	
if(isset($postdata['segment'])&&$postdata['segment']!='')
		{$segment = $postdata['segment'];}else{$segment = '';}	
if(isset($postdata['factory'])&&$postdata['factory']!='')
		{$factory = $postdata['factory'];}else{$factory = '';}	
if(isset($postdata['head_office'])&&$postdata['head_office']!='')
		{$head_office = $postdata['head_office'];}else{$head_office = '';}	
if(isset($postdata['reginal_office'])&&$postdata['reginal_office']!='')
		{$reginal_office = $postdata['reginal_office'];}else{$reginal_office = '';}	
if(isset($postdata['landmark'])&&$postdata['landmark']!='')
		{$landmark = $postdata['landmark'];}else{$landmark = '';}	
if(isset($postdata['busstop'])&&$postdata['busstop']!='')
		{$busstop = $postdata['busstop'];}else{$busstop = '';}	
if(isset($postdata['railway_station'])&&$postdata['railway_station']!='')
		{$railway_station = $postdata['railway_station'];}else{$railway_station = '';}	
						
if($customerId!='')
{
	   $sql = "UPDATE ".CUSTOMERMASTER." SET `costomer_type` = '$postdata[costomer_type]',
											`source_type` = '$source_type',
											`sourced` = '$source_type',
											`source_date` = '$source_date',
											`email` = '$email',
											`dob` = '$dob',
											`services` = '$services',
											`mobile` = '$mobile',
											`state` = '$state',
											`city` = '$city',
											`address` = '$postdata[address]',
											`contact_person` = '$contact_person',
											`fire_safety` = '$fire_safety',
											`marriage_anniv` = '$marriage_anniv',
											`segment` = '$segment',
											`factory` = '$factory',
											`head_office` = '$head_office',
											`reginal_office` = '$reginal_office',
											`landmark` = '$landmark',
											`busstop` = '$busstop',
											`railway_station` = '$railway_station',
											`district` = '$district',
											`company` = '$company',
											`prev_company` = '$prev_company',
											`bank_name` = '$bank',
											`source_form` = '$source_form',
											`pincode` = '$pincode',
											`block` = '$block',
											`zonalcode` = '$zonalcode',
											`identity` = '$identity',
											`cardnumber` = '$cardnumber',
											`pancardno` = '$pancardno',
											`field_staff` = '$field_staff',
											`travel_agent` = '$travel_agent',
											`tele_caller_name` = '$tele_caller',
											`manager` = '$facility_manager',
											`nationality` = '$nationality',
											`status` = '$status' WHERE customerId = '$customerId'"; 
mysql_query($sql) or die("can't Perform");
$msg = "Customer Info Update Successfully";											
}else{		
$customerId = $postdata['customer_id'];	
$cusId = "cus-".rand(0,100000);
      $sql = "INSERT INTO ".CUSTOMERMASTER." SET `customerId` = '$postdata[customer_id]',
  											`cusId` = '$cusId',
 											`costomer_type` = '$postdata[costomer_type]',
											`source_type` = '$source_type',
											`sourced` = '$source_type',
											`source_date` = '$source_date',
											`email` = '$email',
											`dob` = '$dob',
											`services` = '$services',
											`mobile` = '$mobile',
											`state` = '$state',
											`city` = '$city',
											`address` = '$postdata[address]',
											`contact_person` = '$contact_person',
											`fire_safety` = '$fire_safety',
											`marriage_anniv` = '$marriage_anniv',
											`segment` = '$segment',
											`factory` = '$factory',
											`head_office` = '$head_office',
											`reginal_office` = '$reginal_office',
											`landmark` = '$landmark',
											`busstop` = '$busstop',
											`railway_station` = '$railway_station',
											`district` = '$district',
											`company` = '$company',
											`prev_company` = '$prev_company',
											`bank_name` = '$bank',
											`source_form` = '$source_form',
											`pincode` = '$pincode',
											`block` = '$block',
											`zonalcode` = '$zonalcode',
											`identity` = '$identity',
											`cardnumber` = '$cardnumber',
											`pancardno` = '$pancardno',
											`travel_agent` = '$travel_agent',
											`tele_caller_name` = '$tele_caller',
											`manager` = '$facility_manager',
											`nationality` = '$nationality',
											`status` = '$status',
											`insert_date` = NOW()"; 
mysql_query($sql) or die("can't Perform");
//$customerId = mysql_insert_id();
$msg = "Customer Info Save Successfully";	
}
if($customerId!='')
		{
		if($file['idproof']['name']!='')
		{
			$num = rand(0,10000);
			$allowed_ext = array('docs','doc','txt','pdf','jpg','png','jpeg');
			if(!empty($file['idproof']['name']))
			{
				$info = pathinfo($file['idproof']['name']);
				$exe = $info['extension'];
				if(in_array($exe,$allowed_ext))
				{
					$idproof = "idproof".$num.'.'.$exe; 
					$target = 'uploads/'.$idproof;
					$result = move_uploaded_file($file['idproof']['tmp_name'], $target);
				}else{ return "false"; }
				$sql2 = "UPDATE ".CUSTOMERMASTER." SET idproof='$idproof' WHERE customerId = '".$customerId."'"; 
				mysql_query($sql2);
				
			}
			}
		$msg = "Customer Info Save Successfully";
		}else{
		$msg = "Faled to save information";
		}
 return $msg;	
}


/*function show_all_active_pricelist()
	  {
	$result_list = array();
	   $sql="select * from ".PRICEMASTER." where `status`='1'";
	$rs=mysql_query($sql);
	while($row = mysql_fetch_array($rs)) 
	{
		  
   		$result_list[]= $row;
		
	}
	return $result_list;
	  }*/
	  
	  

/*function show_data($id)
{
	
	  $sql = "Select * from  ".CUSTOMERMASTER." where CustomerId='$id'";
	 $rs=mysql_query($sql);
	 $row=mysql_fetch_array($rs);
	 return $row;
 
}*/

 /*function update_data($postdata,$id) 
{
	$return_list=array();

   
   $sql="UPDATE ".CUSTOMERMASTER." SET `CustomerCode` = '$postdata[CustomerCode]', `CustomerName` = '$postdata[CustomerName]', 
   `State`='$postdata[state]',`City`='$postdata[City]' ,`Pin`='$postdata[pin]',`CustomerAddress` = '$postdata[CustomerAddress]', `CustomerMobile` = '$postdata[CustomerMobile]', `CustomerEmail` = '$postdata[CustomerEmail]',`CustomerPreferences` = '$postdata[CustomerPreferences]',
  `CustomerDiscount` = '$postdata[CustomerDiscount]', `CustomerNotification`='$postdata[CustomerNotification]', `CustomerPricelist`='$postdata[CustomerPricelist]', `CustomerAreaLocation`='$postdata[CustomerAreaLocation]', `CustomerMembershipId`='$postdata[CustomerMembershipId]', `Barcode`='$postdata[Barcode]', `CustomerBirthDay`='$postdata[CustomerBirthDay]', `CustomerAnniversary`='$postdata[CustomerAnniversary]', `CustomerRemarks`='$postdata[CustomerRemarks]', `NameofRef`='$postdata[NameofRef]', `PhoneofRef`='$postdata[PhoneofRef]', `CustomerWebsiteRegistration`='$postdata[CustomerWebsiteRegistration]',`Dnd`='$postdata[Dnd]',`Status`='$postdata[Status]'
  
  where `CustomerId`='$id'";
  
 
  
  
    
	mysql_query($sql);
	// exit();
	$m=1;
	return $m;
	
 
}*/



   
	/*  function show_all_data()
	  {
	$result_list = array();
	 $sql="select * from ".CUSTOMERMASTER." where `status`='1' or `status`='0'";
	$rs=mysql_query($sql);
	while($row = mysql_fetch_array($rs)) 
	{
   		$result_list[]= $row;
	}
	return $result_list;
	}*/
	
function city()
{
	$sql = "Select * from  ".CITYMASTER." where `Status`='1'";
	 $rs=mysql_query($sql);
	while($row = mysql_fetch_array($rs)) 
	{
   		$result_list[]= $row;
	}
	return $result_list;
	
	
}


 function state()
	  {
		  
		   $sql="select * from ".STATEMASTER." where `status`='1' or `status`='0'";
	   $rs=mysql_query($sql);
		  while($row = mysql_fetch_array($rs)) 
	{
		  
   		$statelist[]= $row;
		
	}
	return $statelist;
	  }
	  
	  function dnd()
	  {
		  
		  
		         $sql = "Select * from  ".CUSTOMERMASTER." where `Status`='1' and `Dnd`='on'";
	 $rs=mysql_query($sql);
	// $row=mysql_fetch_array($rs);
	 if(mysql_num_rows($rs)>0)
	 {
	  while($row = mysql_fetch_array($rs)) 
	{
		  
   		$return_list[]= $row;
		
	}
	  }
	  else
	  {
		  
		 $return_list[]= 0; 
	  }
	  
	 
	  
	  return $return_list;
	  }
	  
	   function normal()
	  {
		  
		         $sql = "Select * from  ".CUSTOMERMASTER." where  `Dnd`='' and `Status`='1' ";
	 $rs=mysql_query($sql);
	//$row=mysql_fetch_array($rs);
	 if(mysql_num_rows($rs)>0)
		   {
		  
	   while($row = mysql_fetch_array($rs)) 
	{
		  
   		$return_list[]= $row;
		
	}
		   }
		   
		   else
		   {
			   $return_list[]= 0;
		   }
		   
		// print_r($return_list);
		// exit();
	  
	  return $return_list;
	  }
	  
	  
	   function all()
	  {
		  
		          $sql = "Select * from  ".CUSTOMERMASTER."  where `Status`='1' ";
	 $rs=mysql_query($sql);
	//$row=mysql_fetch_array($rs);
	 if(mysql_num_rows($rs)>0)
		   {
		  
	   while($row = mysql_fetch_array($rs)) 
	{
		  
   		$return_list[]= $row;
		
	}
		   }
		   
		   else
		   {
			   $return_list[]= 0;
		   }
		   
		// print_r($return_list);
		// exit();
	  
	  return $return_list;
	  }
function getCustomer()
{
	 $sql = "select * from  ".CUSTOMERMASTER." where 1";
	 $rs=mysql_query($sql);
	 while($row=mysql_fetch_assoc($rs))
	 {
		$data[] =  $row;
	 }
	 return $data;
}
function getTenCustomer()
{
	 $sql = "SELECT * FROM  ".CUSTOMERMASTER." ORDER BY insert_date DESC";
	 $rs=mysql_query($sql);
	 while($row=mysql_fetch_assoc($rs))
	 {
		$data[] =  $row;
	 }
	 return $data;
}
function getCustomerBirthday()
{
	 $sql = "SELECT * FROM  ".CUSTOMERMASTER." ORDER BY insert_date DESC";
	 $rs=mysql_query($sql);
	 while($row=mysql_fetch_assoc($rs))
	 {
		$data[] =  $row;
	 }
	 return $data;
}
function getOneCustomer($customerId)
{
	 $sql = "select * from  ".CUSTOMERMASTER." where customerId = '$customerId'";
	 $rs=mysql_query($sql);
	 $row=mysql_fetch_assoc($rs);
	 return $row;
}
function deleteCustomer($customerId)
{
	$sql = "DELETE FROM  ".CUSTOMERMASTER." WHERE `customerId`='$customerId'";
	 $rs=mysql_query($sql);
	 return"Customer Delete Successfully";	
}
function getCustomerByorder($orderId)
{
	 $sql = "SELECT * FROM  ".CUSTOMERMASTER." as c,".ORDERMASTER." as o WHERE o.OrderID = '$orderId' AND c.customerId = o.CustomerID";
	 $rs=mysql_query($sql);
	 $row=mysql_fetch_assoc($rs);
	 return $row;
}
?>
	
