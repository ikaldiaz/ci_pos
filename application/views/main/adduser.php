
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="row items-align-baseline">
                <div class="col-12">
                  <h2 class="mb-2 page-title">Hello <?php echo $first_name; ?>,</h2>
                  <p>Please enter the required information below.</p>
                  <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-12">
                      <div class="card shadow">
                        <div class="card-body"> 
                          <?php 
                              $fattr = array('class' => 'form-adduser');
                              echo form_open('/main/adduser', $fattr);
                          ?>

                          <div class="row">
                            <div class="col-md-6 col-12">
                              <div class="form-group mb-3">
                                <label for="firstname">First Name</label>
                                <?php echo form_input(array('name'=>'firstname', 'id'=> 'firstname', 'placeholder'=>'John', 'class'=>'form-control', 'value' => set_value('firstname'))); ?>
                                <?php echo form_error('firstname');?>
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="form-group mb-3">
                                <label for="lastname">Last Name</label>
                                <?php echo form_input(array('name'=>'lastname', 'id'=> 'lastname', 'placeholder'=>'Doe', 'class'=>'form-control', 'value'=> set_value('lastname'))); ?>
                                <?php echo form_error('lastname');?>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 col-12">
                              <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <?php echo form_input(array('name'=>'email', 'id'=> 'email', 'placeholder'=>'example@gmail.com', 'class'=>'form-control', 'value'=> set_value('email'))); ?>
                                <?php echo form_error('email');?>
                              </div>
                            </div>

                            <div class="col-md-6 col-12">
                              <div class="form-group mb-3">
                                <label for="role">Role</label>
                                <?php
                                    $dd_list = array(
                                              '1'   => 'Admin',
                                              '2'   => 'Author',
                                              '3'   => 'Editor',
                                              '4'   => 'Subscriber',
                                            );
                                    $dd_name = "role";
                                    echo form_dropdown($dd_name, $dd_list, set_value($dd_name),'class = "form-control" id="role"');
                                ?>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-12">
                              <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <?php echo form_password(array('name'=>'password', 'id'=> 'password', 'placeholder'=>'Password', 'class'=>'form-control', 'value' => set_value('password'))); ?>
                                <?php echo form_error('password') ?>
                              </div>
                            </div>

                            <div class="col-md-6 col-12">
                              <div class="form-group mb-3">
                                <label for="passconf">Confirm Password</label>
                                <?php echo form_password(array('name'=>'passconf', 'id'=> 'passconf', 'placeholder'=>'Confirm Password', 'class'=>'form-control', 'value'=> set_value('passconf'))); ?>
                                <?php echo form_error('passconf') ?>
                              </div>
                            </div>
                          </div>

                          <?php echo form_submit(array('value'=>'Add', 'name'=>'submit', 'class'=>'btn btn-lg btn-primary btn-block mt-3')); ?>
                          <?php echo form_close(); ?>

                        </div>
                      </div>
                    </div> <!-- simple table -->
                  </div> <!-- end section -->

              </div>
              </div> <!-- .row -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->




