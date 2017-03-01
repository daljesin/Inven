<?php 
function insert_city($sql_bd) 
{
	$sql = "INSERT INTO ".CITYMASTER."(`CityID`,`Statename`, `CityName`, `CityCode`,`Status`)".$sql_bd;
	mysql_query($sql);
	return 2;		
}

function service_price($serviceid,$garmentid)
{
     $sql = "Select `GarmentPrice` from  ".GARMENTPRICE."   where  `GarmentService`='$serviceid' and `GarmentID`='$garmentid'";
	 $rs=mysql_query($sql);
	 $row=mysql_fetch_array($rs);
	 if($row['GarmentPrice']=='')
	 $row['GarmentPrice']=0;
	 return $row['GarmentPrice'];
}


function show_data($id)
{
	

	
	    $sql = "Select * from  ".CITYMASTER." WHERE `CityID`='$id'";
	 $rs=mysql_query($sql);
	 $row=mysql_fetch_array($rs);
	 return $row;
 
}

 function update_data($postdata,$id) 
{
	//print_r($postdata);
	$return_list=array();
	
   $sql="UPDATE ".CITYMASTER." SET `Statename`='$postdata[state]',
  `CityName`='$postdata[city_name]', `CityCode`='$postdata[city_code]',`Status`='$postdata[Status]'
  WHERE  `CityID`='$id'";
	mysql_query($sql);
	
	
	
	
	$return_list['id']=$id;
	$return_list['m']='1';
	return $return_list;
	//exit();
	
 
}

   
	  function show_all_data()
	  {
	$result_list = array();
	  $sql="select * from ".CITYMASTER." where `status`='1' or `status`='0'";
	$rs=mysql_query($sql);
	while($row = mysql_fetch_array($rs)) 
	{
   		$result_list[]= $row;
	}
	return $result_list;
	}
	
	
	 function show_all_service_data()
	  {
	$result_list = array();
	$sql="select * from ".SERVICEMASTER." where `status`='1'";
	$rs=mysql_query($sql);
	while($row = mysql_fetch_array($rs)) 
	{
   		$result_list[]= $row;
	}
	return $result_list;
	}
	
 function show_all_state_data()
	  {
	$result_list = array();
	$sql="select * from ".STATEMASTER." where `status`='1'";
	$rs=mysql_query($sql);
	while($row = mysql_fetch_array($rs)) 
	{
   		$result_list[]= $row;
	}
	return $result_list;
	}	
	
function showSingalCity($id) 
{
	
    $sql="SELECT * FROM ".CITYMASTER." WHERE  `CityID`='$id'";
	$qry = mysql_query($sql) or die("can");
	return mysql_fetch_assoc($qry);
}
	
	
	
	  function show_all_pricelist_data()
	  {
	$result_list = array();
	  $sql="select * from ".PRICEMASTER." where `status`='1' or `status`='0'";
	$rs=mysql_query($sql);
	while($row = mysql_fetch_array($rs)) 
	{
		  
   		$PriceList[]= $row;
		
	}
	return $PriceList;
	
	  }
	  
function showAllCity()
{
	$result_list = array();
	$sql="select * from ".CITYMASTER." where `status`='1'";
	$rs=mysql_query($sql);
	while($row = mysql_fetch_array($rs)) 
	{
		$result_list[]= $row;
	}
	return $result_list;
}	 
	  
function del($id) 
{
	
    $sql="DELETE FROM ".CITYMASTER." WHERE  `CityID`='$id'";
	mysql_query($sql) or die("can");
}	  
		?>
	
