<?php 

// Read JSON file
$json = file_get_contents('deals.json');

//Decode JSON
$json_data = json_decode($json,true);

if (isset($_GET['q'])) {
  
  $q = $_GET['q'];
  
	if ($q !='') {


	  $deals = array_filter($json_data['response']['deals'], function($deal) {
      global $q;
      if( strpos( $deal['partner']['name'], $q) !== false  )
        {return true; }
    });
   
    
    $json = array(
      'code' =>  200,
      "response" =>  array(
          'deals' => array_values($deals)
        )
      );
    
    echo json_encode($json);

	}else{
    
  }
} else{
  
}
?>
