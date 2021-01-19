<?php 
function EFAQ_section($attr){ 
	//shortcode function
	static $i = 0; //checking how many times shortcode paste.
	$i++;
	$options = shortcode_atts(array(
	'question'=> 'question goes here?',
	'answer'=>'answer goews here'	
	),$attr);
	$output_data ="<div id='accordion".$i."'><div class='card'><div class='card-header' id='headingOne' class='btn btn-primary' data-toggle='collapse' data-target='#collapseOne".$i."' aria-expanded='true' aria-controls='collapseOne'> $i)&nbsp;".$options['question']."<i class='fa fa-plus'></i></div>
	<div id='collapseOne".$i."' class='collapse show' aria-labelledby='headingOne' data-parent='#accordion".$i."'>
      <div class='card-body'>
         ".$options['answer']."
      </div>
    </div>
  </div>";
return $output_data;
}
add_shortcode('EFAQ','EFAQ_section');
?>