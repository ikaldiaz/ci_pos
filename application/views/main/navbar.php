        <?php
        //check user level
	    $dataLevel = $this->userlevel->checkLevel($role); 

        $result = $this->user_model->getAllSettings();
	    $site_title = $result->site_title;
	    //check user level
        ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-white flex-row border-bottom shadow">
        <div class="container-fluid">
          <a class="navbar-brand mx-lg-1 mr-0" href="<?php echo site_url();?>main/">
            <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
              <g>
                <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
              </g>
            </svg>
          </a>
          <button class="navbar-toggler mt-2 mr-auto toggle-sidebar text-muted">
            <i class="fe fe-menu navbar-toggler-icon"></i>
          </button>
          <div class="navbar-slide bg-white ml-lg-4" id="navbarSupportedContent">
            <a href="<?php echo site_url();?>main/" class="btn toggle-sidebar d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
              <i class="fe fe-x"><span class="sr-only"></span></i>
            </a>
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url();?>main/">
                  <span class="ml-lg-2">Dashboard</span><span class="sr-only">(current)</span>
                </a>
              </li>

            <?php
                if($dataLevel == 'is_admin'){ //Check user level if is Admin
                	?>
              <li class="nav-item dropdown">
                <a href="#" id="ui-elementsDropdown" class="dropdown-toggle nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="ml-lg-2">Users</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="ui-elementsDropdown">
                  <a class="nav-link pl-lg-2" href="<?php echo site_url();?>main/users"><span class="ml-1">User List</span></a>
                  <a class="nav-link pl-lg-2" href="<?php echo site_url();?>main/adduser"><span class="ml-1">Add User</span></a>
                  <a class="nav-link pl-lg-2" href="<?php echo site_url();?>main/banuser"><span class="ml-1">Ban User</span></a>
                  <a class="nav-link pl-lg-2" href="<?php echo site_url();?>main/changelevel"><span class="ml-1">Role</span></a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url();?>main/settings">
                  <span class="ml-lg-2">Settings</span>
                </a>
              </li>
              <?php
              }
            ?>

            </ul>
          </div>
          <div class="ml-md-auto d-none d-lg-flex text-muted mr-auto">
            <?php echo $site_title?>
            
          </div>
<!-- 
          <form class="form-inline ml-md-auto d-none d-lg-flex searchform text-muted">
            <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
          </form> -->

          <ul class="navbar-nav d-flex flex-row">
            <li class="nav-item dropdown ml-lg-0">
              <a class="nav-link dropdown-toggle text-muted" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="avatar avatar-sm mt-2">
                  <img src="<?php echo site_url();?>public/tinydash/assets/avatars/face-1.jpg" alt="<?php echo $first_name; ?>" class="avatar-img rounded-circle">
                </span>
              </a>
              <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <li class="nav-item">
                  <a class="nav-link pl-3" href="<?php echo base_url().'main/profile' ?>"><?php echo $email; ?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="<?php echo base_url().'main/changeuser' ?>">Edit Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="<?php echo base_url().'main/logout' ?>">Logout</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>