<?php $fattr = array('class' => 'form-signin');
         echo form_open(site_url().'main/register/', $fattr); ?>
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
	<h2>Hello There</h2>
    <h5>Please enter the required information below.</h5>     
  <?php echo form_input(array('name'=>'firstname', 'id'=> 'firstname', 'placeholder'=>'First Name', 'class'=>'form-control', 'value' => set_value('firstname'))); ?>
  <?php echo form_error('firstname');?>
  <?php echo form_input(array('name'=>'lastname', 'id'=> 'lastname', 'placeholder'=>'Last Name', 'class'=>'form-control', 'value'=> set_value('lastname'))); ?>
  <?php echo form_error('lastname');?>
  <?php echo form_input(array('name'=>'email', 'id'=> 'email', 'placeholder'=>'Email', 'class'=>'form-control', 'value'=> set_value('email'))); ?>
  <?php echo form_error('email');?>
<?php if($recaptcha == 'yes'){ ?>
<div style="text-align:center;" class="form-group">
    <div style="display: inline-block;"><?php echo $this->recaptcha->render(); ?></div>
</div>
<?php
}
echo form_submit(array('value'=>'Sign up', 'class'=>'btn btn-primary btn-block')); ?>
  <a class="btn btn-info btn-block" href="<?php echo site_url();?>main/login" role="button">Login</a>
  <?php echo form_close(); ?>