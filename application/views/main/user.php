
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="row items-align-baseline">
              	<div class="col-12">
              	  <h2 class="mb-2 page-title">Users</h2>
									<div class="row my-4">
										<!-- Small table -->
										<div class="col-12">
										  <div class="card shadow">
										    <div class="card-body">
										      <!-- table -->
										      <table class="table datatables" id="dataTable-user">
										        <thead>
										          <tr>
										            <th>Name</th>
										            <th>Username</th>
										            <th>Last Login</th>
										            <th>Level Name</th>
										            <th>Status</th>
										            <th>Action</th>
										          </tr>
										        </thead>
										        <tbody>

								                <?php
								                    foreach($groups as $row)
								                    { 

								                    if($row->role == 1){
								                        $rolename = "Admin";
								                    }elseif($row->role == 2){
								                        $rolename = "Author";
								                    }elseif($row->role == 3){
								                        $rolename = "Editor";
								                    }elseif($row->role == 4){
								                        $rolename = "Subscriber"; 
								                    }

								                    if($row->banned_users == 'ban'){
								                        $isbanned = '<span class="badge badge-pill badge-danger">banned</span>';
								                        $actionban = "Unban";
								                    }elseif($row->banned_users == 'unban'){
								                        $isbanned = "";
								                        $actionban = "Ban";
								                    }
								                    ?>
							                <tr>
								                <td><?php echo $row->first_name; ?></td>
										            <td><?php echo $row->email; ?> </td>
										            <td><?php echo $row->last_login; ?> </td>
										            <td><?php echo $rolename; ?> </td>
                              
										            <td><?php echo $row->status; ?> <?php echo $isbanned; ?></td>
										            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										                <span class="text-muted sr-only">Action</span>
										              </button>
										              <div class="dropdown-menu dropdown-menu-right">
										                <a class="dropdown-item" href="<?php echo site_url().'main/changelevel' ?>">Role</a>
										                <a class="dropdown-item" href="<?php echo site_url().'main/banuser' ?>"><?php echo $actionban; ?></a>
										                <a class="dropdown-item" href="<?php echo site_url().'main/deleteuser/'.$row->id ?>">Remove</a>
										              </div>
										            </td>
									            </tr>
								                    <?php
								                    }
								                ?>
										        </tbody>
										      </table>
										    </div>
										  </div>
										</div> <!-- simple table -->
									</div> <!-- end section -->

	            </div>
              </div> <!-- .row -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->