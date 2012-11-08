<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<?php	

		$to = $_POST['clientEmail'];
		$subject = 'Home watch checklist results';
		
    	$message = '<h3>Client Information</h3>';
    	$message .= '<p>Client Name:</p>';
		$message .= $_POST['clientName'];
        $message .= '<p>Client Email:</p>';
		$message .= $_POST['clientEmail'];
        $message .= '<p>Client Address:</p>';
		$message .= $_POST['address'];
        $message .= '<p>Data Completed:</p>';
		$message .= $_POST['data'];
		$message .= '<br/>';
        $message .= '<h3>Exterior Checklist</h3>';
		$message .= '<br/>';
        $message .= '<p>Remove solicitations, newspapers, phonebooks, and debris:</p>';
        $message .= $_POST['ext1'];
        $message .= $_POST['ext1notes'];
        $message .= '<br/>';
        $message .= '<p>Check all doors and windows for signs of weather damage and vandalism:</p>';
        $message .= $_POST['ext2'];
        $message .= $_POST['ext2notes'];
        $message .= '<br/>';
        $message .= '<p>Check irrigation system and timer setting:</p>';
        $message .= $_POST['ext3'];
        $message .= $_POST['ext3notes']; 
        $message .= '<br/>';
        $message .= '<p>Visual inspection of landscaping and weeds:</p>';
        $message .= $_POST['ext4']; 
        $message .= $_POST['ext4notes']; 
        $message .= '<br/>';
        $message .= '<p>Visual inspection of pool and spa area- water level, service:</p>';
        $message .= $_POST['ext5']; 
        $message .= $_POST['ext5notes']; 
        $message .= '<br/>';
        $message .= '<p>Check for signs of pests, wasp/bee nests and mold:</p>';
        $message .= $_POST['ext6'];
        $message .= $_POST['ext6notes'];
        $message .= '<br/>';
        $message .= '<p>Check faucets and hoses for leaks:</p>';
        $message .= $_POST['ext7'];
        $message .= $_POST['ext7notes']; 
        $message .= '<br/>';
        $message .= '<p>Check and replace any burned out security light bulbs:</p>';
        $message .= $_POST['ext8']; 
        $message .= $_POST['ext8notes']; 
        $message .= '<br/>';
        $message .= '<p>Inspect screen enclosed patio for damage/tampering:</p>';
        $message .= $_POST['ext9'];
        $message .= $_POST['ext9notes'];
        $message .= '<br/>';
        $message .= '<p>Check mail box for mail/tampering:</p>';
        $message .= $_POST['ext10'];
        $message .= $_POST['ext10notes']; 
        $message .= '<br/>';
        $message .= '<p>Sweep front entry:</p>';
        $message .= $_POST['ext11'];
        $message .= $_POST['ext11notes']; 
        $message .= '<br/>';
        $message .='<h3>Interior Checklist</h3>';
        $message .= '<br/>';
        $message .='<p>Alarm system check:</p>';
        $message .=$_POST['int1'];
        $message .=$_POST['int1notes'];
        $message .= '<br/>';
        $message .='<p>Check if all doors and windows are locked:</p>';
        $message .=$_POST['int2']; 
        $message .=$_POST['int2notes']; 
        $message .= '<br/>';
        $message .='<p>Check sinks, drains, showers, and tubs for leaks:</p>';
        $message .=$_POST['int3'];
        $message .=$_POST['int3notes']; 
        $message .= '<br/>';
        $message .='<p>Check for signs of pest infestation:</p>';
        $message .=$_POST['int4']; 
        $message .=$_POST['int4notes']; 
        $message .= '<br/>';
        $message .='<p>Check for signs of mold, unusual sounds or smells:</p>';
        $message .=$_POST['int5']; 
        $message .=$_POST['int5notes']; 
        $message .= '<br/>';
        $message .='<p>Flush toilets, run faucets, check for leaks:</p>';
        $message .=$_POST['int6']; 
        $message .=$_POST['int6notes']; 
        $message .= '<br/>';
        $message .='<p>Refrigerator - Operation and temperature settings:</p>';
        $message .=$_POST['int7']; 
        $message .=$_POST['int7notes']; 
        $message .= '<br/>';
        $message .='<p>Dishwasher - Check for leaks:</p>';
        $message .=$_POST['int8']; 
        $message .=$_POST['int8notes']; 
        $message .= '<br/>';
        $message .='<p>Garbage disposal - Operate, run water, check for leaks:</p>';
        $message .=$_POST['int9']; 
        $message .=$_POST['int9notes']; 
        $message .= '<br/>';
        $message .='<p>Air Conditioning - temperature check - filters:</p>';
        $message .=$_POST['int10'];
        $message .=$_POST['int10notes']; 
        $message .= '<br/>';
        $message .='<p>Smoke Detectors - batteries:</p>';
        $message .=$_POST['int11']; 
        $message .=$_POST['int11notes']; 
        $message .= '<br/>';
        $message .='<p>Security lights/timers - replace bulbs:</p>';
        $message .=$_POST['int12']; 
        $message .=$_POST['int12notes']; 
        $message .= '<br/>';
        $message .='<p>Water Softener -salt level:</p>';
        $message .=$_POST['int13'];
        $message .=$_POST['int13notes']; 
        $message .= '<br/>';
        $message .='<p>Clothes Washer - check for leaks:</p>';
        $message .=$_POST['int14']; 
        $message .=$_POST['int14notes']; 
        $message .= '<br/>';
        $message .='<p>Water indoor plants:</p>';
        $message .=$_POST['int15']; 
        $message .=$_POST['int15notes']; 
        $message .= '<br/>';
        $message .='<p>Check that garage door opener is unplugged or locked:</p>';
        $message .=$_POST['int16']; 
        $message .=$_POST['int16notes']; 
        $message .= '<br/>';
        $message .='<p>Start and run vehicle motor:</p>';
        $message .=$_POST['int17']; 
        $message .=$_POST['int17notes']; 
        $message .= '<br/>';
        $message .='<p>Recheck all door and window locks, lock front door upon leaving:</p>';
        $message .=$_POST['int18']; 
        $message .=$_POST['int18notes']; 
		
		mail($to, $subject, $message);
		echo "Checklist Sent";
?>

</body>
</html>