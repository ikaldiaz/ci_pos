
    <div class="wrapper vh-100">
      <div class="row align-items-center h-100">
        <?php $fattr = array('class' => 'col-lg-3 col-md-4 col-10 mx-auto text-center');
		    echo form_open(site_url().'main/reset_password/token/'.$token, $fattr); ?>

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
            <h2 class="my-3">Reset your password</h2>
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
          <p class="text-muted">Hello <span><?php echo $firstName; ?></span>, <br>Please enter your password 2x below to reset.</p>
          <div class="form-group">
            <label for="password" class="sr-only">Password</label>
		      <?php echo form_password(array('name'=>'password', 'id'=> 'password', 'placeholder'=>'Password', 'class'=>'form-control', 'value' => set_value('password'))); ?>
		      <?php echo form_error('password') ?>
          </div>
          <div class="form-group">
            <label for="passconf" class="sr-only">Confirm Password</label>
		      <?php echo form_password(array('name'=>'passconf', 'id'=> 'passconf', 'placeholder'=>'Confirm Password', 'class'=>'form-control', 'value'=> set_value('passconf'))); ?>
		      <?php echo form_error('passconf') ?>
          </div>
            <?php
            echo form_submit(array('value'=>'Reset Password', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
          <p class="mt-5 mb-3 text-muted">© 2020</p>
        <?php echo form_close(); ?>    
      </div>
    </div>
