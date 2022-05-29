      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="row items-align-baseline">
              	<div class="col-12">
              	
			    <?php
			        //for warning -> flash_message
			        //for info -> success_message 
			        
			        $arr = $this->session->flashdata();
			        if(!empty($arr['flash_message'])){
			            $html = '<div class="alert alert-warning alert-dismissible" role="alert">';
			            $html .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
			            $html .= $arr['flash_message'];
			            $html .= '</div>';
			            echo $html;
			        }else if (!empty($arr['success_message'])){
			            $html = '<div class="alert alert-info alert-dismissible" role="alert">';
			            $html .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
			            $html .= $arr['success_message'];
			            $html .= '</div>';
			            echo $html;
			        }else if (!empty($arr['danger_message'])){
			            $html = '<div class="alert alert-danger alert-dismissible" role="alert">';
			            $html .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
			            $html .= $arr['danger_message'];
			            $html .= '</div>';
			            echo $html;
			        }
			    ?>
	            </div>

              </div> <!-- .row -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->