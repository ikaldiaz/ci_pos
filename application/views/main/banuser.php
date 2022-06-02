
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="row items-align-baseline">
                <div class="col-12">
                  <h2 class="mb-2 page-title">Ban User</h2>
                  <p>Hi <span><?php echo $first_name; ?></span>, <br>Please choose the user.</p>
                  <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-12">
                      <div class="card shadow">
                        <div class="card-body">     
					    <?php $fattr = array('class' => 'form-signin');
					         echo form_open(site_url().'main/banuser/', $fattr); ?>

                          <div class="row">
                            <div class="col-md-6 col-12">
                              <div class="form-group mb-3">
                                <label for="email">Email</label>
						        <select class="form-control" name="email" id="email">
						            <?php
						            foreach($groups as $row)
						            { 
						              echo '<option value="'.$row->email.'">'.$row->email.'</option>';
						            }
						            ?>
						            </select>
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="form-group mb-3">
                                <label for="banuser">Choose to Ban</label>
							    <?php
							        $dd_list = array(
							                  'unban'   => 'Unban',
							                  'ban'   => 'Ban',
							                );
							        $dd_name = "banuser";
							        echo form_dropdown($dd_name, $dd_list, set_value($dd_name),'class = "form-control" id="banuser"');
							    ?>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-12">
                              <div class="form-group mb-3">
                          <?php echo form_submit(array('value'=>'Submit', 'name'=>'submit', 'class'=>'btn btn-lg btn-primary btn-block')); ?>

                              </div>
                            </div>
                            <div class="col-12">
                              <div class="form-group mb-3">
    						<a href="<?php echo site_url().'main/users/';?>" class="btn btn-lg btn-default btn-block">Cancel</a>

                              </div>
                            </div>
                          </div>

                          <?php echo form_close(); ?>

                        </div>
                      </div>
                    </div> <!-- simple table -->
                  </div> <!-- end section -->

              </div>
              </div> <!-- .row -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->




