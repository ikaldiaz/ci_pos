<div class="container">
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <h2>Settings</h2>
        <h5>Hello <span><?php echo $first_name; ?></span>.</h5>
        <hr>
        <?php
        $fattr = array('class' => 'form-signin');
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
        <div class="form-group">
        <span>Site Title</span>
          <?php echo form_input(array('name'=>'site_title', 'id'=> 'site_title', 'placeholder'=>'Site Title', 'class'=>'form-control', 'value' => set_value('site_title', $site_title))); ?>
          <?php echo form_error('site_title');?>
        </div>
        
        <div class="form-group">
        <span>Timezone</span>
        <select name="timezone" id="timezone" class="form-control">
            <option value="<?php echo $timezonevalue; ?>"><?php echo $timezone; ?></option>
          <?php foreach(tz_list() as $t) { ?>
            <option value="<?php echo $t['zone']; ?>"> <?php echo $t['zone']; ?></option>
          <?php } ?>
        </select>
        </div>
        
        <div class="form-group">
        <span>Recaptcha</span>
        <select name="recaptcha" id="recaptcha" class="form-control">
            <option value="no">No</option>
            <option value="yes">Yes</option>
        </select>
        </div>
        
        <div class="form-group"> 
        <span>Theme</span>
        <select name="theme" id="theme" class="form-control">
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
        <?php echo form_submit(array('value'=>'Save', 'name'=>'submit', 'class'=>'btn btn-primary btn-block')); ?>
        <?php echo form_close(); ?>
    </div>
</div>
</div>