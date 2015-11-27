<?php
require_once('databaseconn.php');
$type=$_GET['type'];

switch ($type){
case 'saleloft':
	$query="select * from property where property_type='loft' and property_for='sale';";
	$results=$db->query($query);
	$stmt=$db->prepare($query);
	$stmt->execute();
	$results=$stmt->fetchAll();

	break;
	
	case 'sale1bedroom':
		$query="select * from property where property_type='1 bedroom' and property_for='sale';";
		$results=$db->query($query);
		$stmt=$db->prepare($query);
		$stmt->execute();
		$results=$stmt->fetchAll();
		
		break;
		
		case 'sale2bedroom':
			$query="select * from property where property_type='2 bedroom' and property_for='sale';";
			$results=$db->query($query);
			$stmt=$db->prepare($query);
			$stmt->execute();
			$results=$stmt->fetchAll();
			
			break;
			
			case 'sale3bedroom':
				$query="select * from property where property_type='3 bedroom' and property_for='sale';";
				$results=$db->query($query);
				$stmt=$db->prepare($query);
				$stmt->execute();
				$results=$stmt->fetchAll();
				
				break;
				case 'saleall':
					$query="select * from property where property_for='sale';";
					$results=$db->query($query);
					$stmt=$db->prepare($query);
					$stmt->execute();
					$results=$stmt->fetchAll();
					break;
					
					case 'rentloft':
						$query="select * from property where property_type='loft' and property_for='rent';";
						$results=$db->query($query);
						$stmt=$db->prepare($query);
						$stmt->execute();
						$results=$stmt->fetchAll();
						
						break;
						case 'rent1bedroom':
							$query="select * from property where property_type='1 bedroom' and property_for='rent';";
							$results=$db->query($query);
							$stmt=$db->prepare($query);
							$stmt->execute();
							$results=$stmt->fetchAll();
							
							break;
							case 'rent2bedroom':
								$query="select * from property where property_type='2 bedroom' and property_for='rent';";
								$results=$db->query($query);
								$stmt=$db->prepare($query);
								$stmt->execute();
								$results=$stmt->fetchAll();
								
								break;
								case 'rent3bedroom':
									$query="select * from property where property_type='3 bedroom' and property_for='rent';";
									$results=$db->query($query);
									$stmt=$db->prepare($query);
									$stmt->execute();
									$results=$stmt->fetchAll();
									
									break;
									case 'rentall':
										$query="select * from property where property_for='rent';";
										$results=$db->query($query);
										$stmt=$db->prepare($query);
										$stmt->execute();
										$results=$stmt->fetchAll();
									}
	

if($results!=null){
	echo"APARTMENT AVAILABLE".'</br>'.'</br>';
	foreach($results as $result){
	echo '<img src="images/comingsoon.jpg">'.'<br>';
    echo  "NEIGHBORHOOD: ",$result['neighbourhood'].'<br>';
	echo  "BEDS: ",$result['beds'].'<br>';
	echo  "BATHS: ",$result['baths'].'<br>';
	echo  "PRICE: $",$result['price'].'<br>';
	echo  "AVAILABLE DATE: ",$result['available_date'].'<br>'.'<br>'.'<br>';
}
 }
?>