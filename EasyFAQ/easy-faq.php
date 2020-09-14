<?php 
/***
* Plugin Name: Easy FAQ's
* Plugin URI:
* Description: plugin for making frequently asked question section by shortcode and accordian with easy manner.
* Version:1.0
* Author: Vaibhav Gangrade
* Author URI:
*/

?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style type="text/css">
	.card-header{
		background-color: #007bff;
		color:white;
	}

	.card{
	box-shadow: 1px 1px 10px 2px #888888; 
	margin-bottom: 35px;
	
	cursor: pointer;
	border-radius: 0px!important; /* For removing bydefault rounded border */
	width: auto;
	}


	/* For making minus and plus symbol by css  */
 .collapsed i.fa.fa-plus:before{
	 content: "\2b";
	 font-weight: bold;
	  font-weight: bold;
      
}
/* if minus sign occure  */
 i.fa.fa-plus:before{
	 content: "\2212";
font-weight: bold;
	  font-weight: bold;
	   
}
</style>
<?php
function EFAQ_section($attr){
	static $i=0; //checking how many times shortcode paste.
	$i++;
	//echo $i;

	$options = shortcode_atts(array(
	'question'=>'question goes here?',
	'answer'=>'answer goews here'	
	),$attr);

$output_data ="<div id='accordion'><div class='card'><div class='card-header' id='headingOne' class='btn btn-primary' data-toggle='collapse' data-target='#collapseOne".$i."' aria-expanded='true' aria-controls='collapseOne'><i class='fa fa-plus'></i> ".$options['question']."</div>
<div id='collapseOne".$i."' class='collapse show' aria-labelledby='headingOne' data-parent='#accordion'>
      <div class='card-body'>
         ".$options['answer']."
      </div>
    </div>
  </div>";


return $output_data;


}

add_shortcode('EFAQ','EFAQ_section');

?>



