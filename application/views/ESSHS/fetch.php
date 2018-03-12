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
 					 // ABM SUGESSTED COURSE 
 					$BSBA 	 = array('SJPABM6','SJPABM8');
 					$ECO  	 = array('SJPABM7');
 					// STEM 
 					$Science = array('SJPSTEM6','SJPSTEM7','SJPSTEM8');
 					$Engr	 = array('SJPSTEM6');
 					$tech	 = array('SJPCS16','SJPAT7');
 					// gas
 					$gas 	 = array('SJPGAS4','SJPSTEM1','SJPABM7','SJPOJT');
 					// tecvoc
 					$techvocICT = array('SJPTV-ICT-1G','SJPTV-ICT-1H','SJPOJT');
 					$techvocHE	= array('SJPTV-HE-3B','SJPTV-HE-4B');
 					$count = 1;
                    	foreach ($STUgrades as $grade) {
                    	
                    	$marks = '<tr>
					                   <td>'.$grade['subj_code'].'</td>
									   <td>'.$grade['description'].'</td>
									   <td>'.$grade['grade'].'</td>
								   </tr>
				                      ';
				          if ($grade['grade'] >=80) {
				          		echo $marks;

				          		if (in_array($grade['subj_code'], $BSBA)) {
				          			if ($count==1) {
				          					$count++;
						        			echo "<h4 style='color:green;'><b>SUGGESTED COURSE: BS major in Accountancy, BS in Business Administration</h4>
	                    						  ";
	                    					echo "<h5><b>Field in study: BSBA, BS in Business Economics, BS Accountancy, BS Management</h5>";
				          				}
				          		}elseif (in_array($grade['subj_code'], $ECO)) {
				          			if ($count==1) {
				          					$count++;
						        			echo "<h4 style='color:green;'><b>SUGGESTED COURSE: BS in Business Economics</h4>
	                    						  ";
	                    					echo "<h5><b>Field in study: BSBA, BS in Business Economics, BS Accountancy, BS Management</h5>";
				          				}
				          		}elseif(in_array($grade['subj_code'], $Science)){
				          			if ($count==1) {
				          					$count++;
				          					echo "<h4 style='color:green;'><b>SUGGESTED COURSE: Medical Sciences (Nursing, Medical Allied Programs), Pure Sciences (Physics, Chemistry, Biology), Teacher Education Major in Sciences</b></h4>";
				          					echo "<h5><b>Field in study:Engineering, Information Technology, Computer Science, Pure Sciences (Physics, Chemistry, Biology), Medical Sciences (Nursing, Medical Allied Programs), Mathematics (BS-Mathematics)</b></h5>";
				          			}
				          		}elseif(in_array($grade['subj_code'],$Engr)){
				          			if ($count==1) {
				          					$count++;
				          					echo "<h4 style='color:green;'><b>SUGGESTED COURSE: Engineering, Mathematics (BS-Mathematics)</b></h4>";
				          					echo "<h5><b>Field in study:Engineering, Information Technology, Computer Science, Pure Sciences (Physics, Chemistry, Biology), Medical Sciences (Nursing, Medical Allied Programs), Mathematics (BS-Mathematics)</b></h5>";
				          			}
				          		}elseif (in_array($grade['subj_code'],$tech)) {
				          			if ($count==1) {
				          					$count++;
				          					echo "<h4 style='color:green;'><b>SUGGESTED COURSE:Information Technology, Computer Science</b></h4>";
				          					echo "<h5><b>Field in study:Engineering, Information Technology, Computer Science, Pure Sciences (Physics, Chemistry, Biology), Medical Sciences (Nursing, Medical Allied Programs), Mathematics (BS-Mathematics)</b></h5>";
				          			}
				          		}elseif (in_array($grade['subj_code'],$gas)) {
				          			if ($count==1) {
				          					$count++;
				          					echo "This strand is purposively designed for those students who are still indecisive of what course or degree they want to pursue in college. A student who finished on this strand can proceed to any college program. However he/she has to take some subjects not taken in Senior High but required by a particular college as a bridging program to assess his/her preparedness in the field of study chosen.";
				          			}
				          		}elseif (in_array($grade['subj_code'], $techvocICT)) {
				          			if ($count==1) {
				          					$count++;
				          					echo "<h4 style='color:green;'><b>SUGGESTED COURSE:Information and Communications Technology</b></h4>";
				          					echo "<h5><b>Field in study:Information and Communications Technology, Home Economics<b></h5";
				          			}
				          		}elseif (in_array($grade['subj_code'], $techvocHE)) {
				          			if ($count==1) {
				          					$count++;
				          					echo "<h4 style='color:green;'><b>SUGGESTED COURSE:Home Economics</b></h4>";
				          					echo "<h5><b>Field in study:Information and Communications Technology, Home Economics<b></h5";
				          			}
				          		}
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
