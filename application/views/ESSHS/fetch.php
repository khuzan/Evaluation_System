<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Evaluated <small>Based on performance</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Student ID</th>
                          <th>Name</th>
                          <th>Strand</th>
                          <th>Year Level</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row"><?php echo $value->student_id; ?></th>
                          <td><?php echo $value->firstname.' '.$value->lastname; ?></td>
                          <td><?php echo $value->strand; ?></td>
                          <td><?php echo $value->yr_lvl; ?></td>
                        </tr>
                      </tbody>
                    </table>

                    <h3>Subjects Where students are good</h3>
                    <table class="table table-bordered">
				           <thead>
				            <tr>
				            <th>Subject Code</th>
				            <th>Description</th>
				            <th>Grade</th>
				           </tr>
				           </thead>
				            <tbody>
 					<?php 
 					$code = array('SJPCS18','SJPABM6');
 					$count = 1;
                    	foreach ($STUgrades as $grade) {
                    	
                    	$Sgrade = '<tr>
					                   <td>'.$grade['subj_code'].'</td>
									   <td>'.$grade['description'].'</td>
									   <td>'.$grade['grade'].'</td>
								   </tr>
				                      ';
				        if ($grade['grade'] >=80) {
				        	echo $Sgrade;
				        	if (in_array($grade['subj_code'], $code)) {
					        		if ($count==1) {
					        			$count++;
					        			echo "WE RECOMMEND YOU TO TAKE COURSE BSBA";
					        		}
				        			
				        	}
				        	
				        }else{
				        	echo "UWAG PA MORE!";
				        }
				    }
				    
                    ?>
                    	</tbody>
				    </table>
                  </div>
                </div>
              </div>
</body>
</html>