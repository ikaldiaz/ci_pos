
          <div class="row justify-content-center">
            <div class="col-12"> 
              <div class="row items-align-baseline">
                <div class="col-12">
                  <h2 class="mb-2 page-title">Hi <?php echo $first_name; ?>,</h2>
                  <p>Please choose the level user.</p>
                  <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-12"> 
                      <div class="card shadow">
                        <div class="card-body">   
                         <?php $fattr = array('class' => 'form-signin');
                             echo form_open(site_url().'main/changelevel/', $fattr); ?>

                          <div class="row">
                            <div class="col-md-6 col-12">
                              <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <select class="form-control select2" name="email" id="email">
                                    <?php
                                      echo '<option value="">Choose email...</option>';
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
                                <label for="level">Level</label>
                                <?php
                                    $dd_list = array(
                                              // '1'   => 'Admin',
                                              '2'   => 'Author',
                                              '3'   => 'Editor',
                                              '4'   => 'Subscriber',
                                            );
                                    $dd_name = "level";
                                    echo form_dropdown($dd_name, $dd_list, set_value($dd_name),'class = "form-control" id="level"');
                                ?>
                              </div>
                            </div>
                          </div>

                          <?php echo form_submit(array('value'=>'Submit', 'name'=>'submit', 'class'=>'btn btn-lg btn-primary btn-block mt-3')); ?>
                            <a href="<?php echo site_url().'main/users/';?>"><button type="button" class="btn btn-default btn-lg btn-block">Cancel</button></a>
                          <?php echo form_close(); ?>

                        </div>
                      </div>
                    </div> <!-- simple table -->
                  </div> <!-- end section -->

              </div>
              </div> <!-- .row -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->




