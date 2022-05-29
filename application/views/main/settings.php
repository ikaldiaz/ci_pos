
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="row items-align-baseline">
              	<div class="col-12">
              	  <h2 class="mb-2 page-title">Settings</h2>
					<div class="row my-4">
						<!-- Small table -->
						<div class="col-12">
						  <div class="card shadow">
						    <div class="card-body">
					        <?php
					        $fattr = array('class' => 'form-settings');
					        echo form_open(site_url().'main/settings/', $fattr); 
					        
					        function tz_list() {
					            $zones_array = array();
					            $timestamp = time();
					            foreach(timezone_identifiers_list() as $key => $zone) {
					              date_default_timezone_set($zone);
					              $zones_array[$key]['zone'] = $zone;
					            }
					            return $zones_array;
					        }
					        ?>

        					<?php echo '<input type="hidden" name="id" value="'.$id.'">'; ?>


        					<div class="row">
        						<div class="col-md-6 col-12">
        							<div class="form-group mb-3">
        								<label for="site_title">Site Title</label>
        								<?php echo form_input(array('name'=>'site_title', 'id'=> 'site_title', 'placeholder'=>'Site Title', 'class'=>'form-control', 'value' => set_value('site_title', $site_title))); ?>
        								<?php echo form_error('site_title');?>
        							</div>
        						</div>
        						<div class="col-md-6 col-12">
        							<div class="form-group mb-3">
        								<label for="timezone">Timezone</label>
        								<select name="timezone" id="timezone" class="form-control select2">
        									<option value="<?php echo $timezonevalue; ?>"><?php echo $timezone; ?></option>
        									<?php foreach(tz_list() as $t) { ?>
        										<option value="<?php echo $t['zone']; ?>"> <?php echo $t['zone']; ?></option>
        									<?php } ?>
        								</select>
        							</div>
        						</div>
        					</div>
        					<div class="row">
        						<div class="col-md-6 col-12">
        							<div class="form-group mb-3">
        								<label for="recaptcha">Recaptcha</label>
        								<select name="recaptcha" id="recaptcha" class="form-control">
        									<option value="no" <?php if ($recaptcha=='no') echo "selected='true'" ?>>No</option>
        									<option value="yes" <?php if ($recaptcha=='yes') echo "selected='true'" ?>>Yes</option>
        								</select>
        							</div>
        						</div>
        						<div class="col-md-6 col-12">
        							<div class="form-group"> 
        								<label for="theme">Theme</label>
        								<select name="theme" id="theme" class="form-control select2">
        									<!-- https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/cerulean/bootstrap.min.css -->
        									<!-- https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cerulean/bootstrap.min.css -->
        									<option value="<?php echo $theme; ?>">Unchanged</option>
        									<option value="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/cosmo/bootstrap.min.css">Cosmo</option>
        									<option value="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/cerulean/bootstrap.min.css">Cerulean</option>
        									<option value="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/cyborg/bootstrap.min.css">Cyborg</option>
        									<option value="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/darkly/bootstrap.min.css">Darkly</option>
        									<option value="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/flatly/bootstrap.min.css">Flatly</option>
        									<option value="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/journal/bootstrap.min.css">Journal</option>
        									<option value="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/litera/bootstrap.min.css">Litera</option>
        									<option value="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/lumen/bootstrap.min.css">Lumen</option>
        									<option value="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/lux/bootstrap.min.css">Lux</option>
        									<option value="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/materia/bootstrap.min.css">Materia</option>
        									<option value="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/minty/bootstrap.min.css">Minty</option>
        									<option value="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/pulse/bootstrap.min.css">Pulse</option>
        									<option value="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/sandstone/bootstrap.min.css">Sandstone</option>
        									<option value="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/simplex/bootstrap.min.css">Simplex</option>
        									<option value="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/sketchy/bootstrap.min.css">Sketchy</option>
        									<option value="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/slate/bootstrap.min.css">Slate</option>
        									<option value="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/solar/bootstrap.min.css">Solar</option>
        									<option value="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/spacelab/bootstrap.min.css">Spacelab</option>
        									<option value="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/superhero/bootstrap.min.css">Superhero</option>
        									<option value="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/united/bootstrap.min.css">United</option>
        									<option value="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/yeti/bootstrap.min.css">Yeti</option>
        								</select>
        							</div>
        						</div>

        					</div>








		                      <?php echo form_submit(array('value'=>'Save', 'name'=>'submit', 'class'=>'btn btn-lg btn-primary btn-block mt-3')); ?>
		                      <?php echo form_close(); ?>

						    </div>
						  </div>
						</div> <!-- simple table -->
					</div> <!-- end section -->

	            </div>
              </div> <!-- .row -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->