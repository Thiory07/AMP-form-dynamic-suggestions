<?php 

// Read JSON file
$json = file_get_contents('deals.json');

//Decode JSON
$json_data = json_decode($json,true);

if (isset($_GET['q'])) {
  //var_dump($_GET['q']);
  $q = $_GET['q'];
  //var_dump($q);
	if ($q !='') {


	  $deals = array_filter($json_data['response']['deals'], function($deal) {
      global $q;
      if( strpos( $deal['partner']['name'], $q) !== false  )

        {return true; } 
        else 
        {return false; };
    });
   // var_dump('');
    //var_dump($deals);
    $json = array(
      'code' =>  200,
      "response" =>  array(
          'deals' => array(reset($deals))
        )
      );
    echo json_encode($json, JSON_PRETTY_PRINT);
    echo ($response);
	}else{
    //echo json_encode($json_data);
  }
} else{
  //echo json_encode($json_data);
}
?>
