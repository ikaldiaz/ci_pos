    <div class="wrapper vh-100">
      <div class="row align-items-center h-100">
        <?php $fattr = array('class' => 'col-lg-6 col-md-8 col-10 mx-auto'); 
         echo form_open(site_url().'main/register/', $fattr); ?>
          <div class="mx-auto text-center my-4">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
              <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                  <polygon class="st0" points="78,105 15,105 24,87 87,87    " />
                  <polygon class="st0" points="96,69 33,69 42,51 105,51     " />
                  <polygon class="st0" points="78,33 15,33 24,15 87,15  " />
                </g>
              </svg>
            </a>
            <h2 class="my-3">Register</h2>
          </div>
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
            <label for="email">Email</label>
            <?php echo form_error('lastname');?>
            <?php echo form_input(array('name'=>'email', 'id'=> 'email', 'type'=>'email', 'placeholder'=>'example@mail.com', 'class'=>'form-control', 'value'=> set_value('email'))); ?>
            <?php echo form_error('email');?>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="firstname">Firstname</label>
              <?php echo form_input(array('name'=>'firstname', 'id'=> 'firstname', 'placeholder'=>'John', 'class'=>'form-control', 'value' => set_value('firstname'))); ?>
              <?php echo form_error('firstname');?>
            </div>
            <div class="form-group col-md-6">
              <label for="lastname">Lastname</label>
              <?php echo form_input(array('name'=>'lastname', 'id'=> 'lastname', 'placeholder'=>'Doe', 'class'=>'form-control', 'value'=> set_value('lastname'))); ?>
              <?php echo form_error('lastname');?>
            </div>
          </div>
          <hr class="my-4">
          <div class="row mb-4">
            <div class="col-md-6">

<?php if($recaptcha == 'yes'){ ?>
<div style="text-align:center;" class="form-group">
    <div style="display: inline-block;"><?php echo $this->recaptcha->render(); ?></div>
</div>
<?php
}
?>
              <!-- <div class="form-group">
                <label for="inputPassword5">New Password</label>
                <input type="password" class="form-control" id="inputPassword5">
              </div>
              <div class="form-group">
                <label for="inputPassword6">Confirm Password</label>
                <input type="password" class="form-control" id="inputPassword6">
              </div> -->
            </div>
            <div class="col-md-6">
              <p class="mb-2">Password requirements</p>
              <p class="small text-muted mb-2"> To create a new password, you have to meet all of the following requirements: </p>
              <ul class="small text-muted pl-4 mb-0">
                <li>Minimum 8 character </li>
                <li>At least one special character</li>
                <li>At least one number</li>
                <li>Can’t be the same as a previous password </li>
              </ul>
            </div>
          </div>
            <?php
            echo form_submit(array('value'=>'Sign up', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
            <a class="btn btn-info btn-block" href="<?php echo site_url();?>main/login" role="button">Login</a>
          <p class="mt-5 mb-3 text-muted text-center">© 2020</p>
        <?php echo form_close(); ?>
      </div>
    </div>

