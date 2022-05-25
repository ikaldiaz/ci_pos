<?php $fattr = array('class' => 'form-signin');
         echo form_open(site_url().'main/forgot/', $fattr); ?>
         <?php
        //for warning -> flash_message
        //for info -> success_message 
        
        $arr = $this->session->flashdata();
        if(!empty($arr['flash_message'])){
            $html = '<div class="container" style="margin-top: 10px;">';
            $html .= '<div class="alert alert-warning alert-dismissible" role="alert">';
            $html .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            $html .= $arr['flash_message'];
            $html .= '</div>';
            $html .= '</div>';
            echo $html;
        }else if (!empty($arr['success_message'])){
            $html = '<div class="container" style="margin-top: 10px;">';
            $html .= '<div class="alert alert-info alert-dismissible" role="alert">';
            $html .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            $html .= $arr['success_message'];
            $html .= '</div>';
            $html .= '</div>';
            echo $html;
        }else if (!empty($arr['danger_message'])){
            $html = '<div class="container" style="margin-top: 10px;">';
            $html .= '<div class="alert alert-danger alert-dismissible" role="alert">';
            $html .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            $html .= $arr['danger_message'];
            $html .= '</div>';
            $html .= '</div>';
            echo $html;
        }
    ?>
  <!-- <img class="mb-4" src="<?php echo site_url();?>/public/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->

	<h2>Forgot Password</h2>
	<p>Please enter your email address and we'll send you instructions on how to reset your password</p>
	<br>
	<?php $fattr = array('class' => 'form-signin');
	     echo form_open(site_url().'main/forgot/', $fattr); ?>
	<div class="form-group">
	  <?php echo form_input(array(
	      'name'=>'email', 
	      'id'=> 'email', 
	      'placeholder'=>'Email', 
	      'class'=>'form-control', 
	      'value'=> set_value('email'))); ?>
	  <?php echo form_error('email') ?>
	</div>
	<?php if($recaptcha == 'yes'){ ?>
	<div style="text-align:center;" class="form-group">
	    <div style="display: inline-block;"><?php echo $this->recaptcha->render(); ?></div>
	</div>
	<?php
	}
	echo form_submit(array('value'=>'Submit', 'class'=>'btn btn-primary btn-block')); ?>
  <a class="btn btn-warning btn-block" href="<?php echo site_url();?>main/login" role="button">Login</a>
	<?php echo form_close(); ?>    
