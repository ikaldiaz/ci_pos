
    <div class="wrapper vh-100">
      <div class="row align-items-center h-100">

        <?php $fattr = array('class' => 'col-lg-3 col-md-4 col-10 mx-auto text-center');
         echo form_open(site_url().'main/login/', $fattr); ?>
          <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
            <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
              <g>
                <polygon class="st0" points="78,105 15,105 24,87 87,87  " />
                <polygon class="st0" points="96,69 33,69 42,51 105,51   " />
                <polygon class="st0" points="78,33 15,33 24,15 87,15    " />
              </g>
            </svg>
          </a> 

          <h2 class="my-3">Sign In</h2>
          <!-- <h1 class="h6 mb-3">Sign in</h1> -->
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
          <div class="form-group">
            <label for="email" class="sr-only">Email address</label>
            <?php echo form_input(array(
            'name'=>'email', 
            'id'=> 'email', 
            'placeholder'=>'Email Address', 
            'class'=>'form-control form-control-lg', 
            'autofocus'=>'',
            'value'=> set_value('email'))); ?>
            <?php echo form_error('email') ?>
          </div>


          <div class="form-group">
            <label for="password" class="sr-only">Password</label>
            <?php echo form_password(array(
                'name'=>'password', 
                'id'=> 'password', 
                'placeholder'=>'Password', 
                'class'=>'form-control form-control-lg', 
                'value'=> set_value('password'))); ?>
            <?php echo form_error('password') ?>
          </div>
          <!-- <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Stay logged in </label>
          </div> -->
          <?php if($recaptcha == 'yes'){ ?>
          <div style="text-align:center;" class="form-group">
              <div style="display: inline-block;"><?php echo $this->recaptcha->render(); ?></div>
          </div>
          <?php
          }
          ?>
          <?php echo form_submit(array('value'=>'Let me in!', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
          <p class="mt-2">OR</p>

          <a class="btn btn-info btn-block" href="<?php echo site_url();?>main/register" role="button">Register</a>
          <a class="btn btn-warning btn-block" href="<?php echo site_url();?>main/forgot" role="button">Forgot Password</a>
          <p class="mt-5 mb-3 text-muted">© 2020</p>
        <?php echo form_close(); ?>

      </div>
    </div>