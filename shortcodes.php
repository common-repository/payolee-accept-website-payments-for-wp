<?php

$payolee_SU = 'http://payolee.me/';

function payolee_short($attr){

global $payolee_SU;

$attr = shortcode_atts(
		array(
			'id' => '',
			'type' => 'form',
			'tab' => 'true',
			'button_content' => '<img src="'.$payolee_SU.'checkout/images/pay_now.png" alt="Pay now" />',
		), $attr);

	if($attr['tab'] == "true"){
		$new_tab = "target = '_blank'";	
	}else{
		$new_tab = "";	
	}

	if($attr['type'] == "button"){
		if($attr['button_content'] == "pl_pay_now"){
			$button_content = '<img src="'.$payolee_SU.'checkout/images/pay_now.png" alt="Buy Now" />';
		}else if($attr['button_content'] == "pl_buy_now"){
			$button_content = '<img src="'.$payolee_SU.'checkout/images/buy_now.png" alt="Buy Now" />';
		}else if($attr['button_content'] == "pl_donate"){
			$button_content = '<img src="'.$payolee_SU.'checkout/images/donate.png" alt="Donate" />';
		}else if($attr['button_content'] == "pl_buy_now"){
			$button_content = '<img src="'.$payolee_SU.'checkout/images/subscribe.png" alt="Subscribe" />';
		}else if($attr['button_content'] == "pl_subscribe"){
			$button_content = '<img src="'.$payolee_SU.'checkout/images/subscribe.png" alt="Subscribe" />';
		}else{
			$button_content = $attr['button_content'];
		}
	
		$code = '<a '.$new_tab.' href="'.$payolee_SU.'checkout/'.$attr['id'].'">'.$button_content.'</a>';

	}else{
		$code = '<div id="'.$attr['id'].'"></div><script type="text/javascript" src="'.$payolee_SU.'checkout/payolee_embed_form.js#'.$attr['id'].'" ></script>';		
	}
  return $code;
}
add_shortcode('payolee','payolee_short');?>
