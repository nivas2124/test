<html>
<head>

<title>Stock Report</title>
<meta http-equiv="refresh" content="5"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

</head>

<body>

<style>
table, th, td {
  border: 1px solid;
}
</style>

<h1 style="text-align:center; color:#CC3300;" > Report </h1>
<br>
<div class="card-body">
              <div class="table-responsive-sm">
                <table class="table-hover table-dark" id="dataTable" width="100%" cellspacing="0" >
                  <thead>
                    <tr>
		    <th style="text-align:center">S No.</th>
            <th width=150px style="text-align:center">yyyy-mm-dd Time</th>
                    <th style="text-align:center">Code</th>
                    <th style="text-align:center">All Splitter</th>
                    <th style="text-align:center">6 Fiber</th>
                    <th style="text-align:center">12 Fiber</th>
                    <th style="text-align:center">Stay Drum</th>
                    <th style="text-align:center">Binding</th>
                    <th style="text-align:center">Bobbin</th>
                    <th style="text-align:center">95x05 Splitter</th>
                    <th style="text-align:center">90x10 Splitter</th>
                    <th style="text-align:center">85x15 Splitter</th>
                    <th style="text-align:center">80x20 Splitter</th>
                    <th style="text-align:center">75x25 Splitter</th>
                    <th style="text-align:center">70x30 Splitter</th>
                    <th style="text-align:center">65x35 Splitter</th>
                    <th style="text-align:center">60x40 Splitter</th>
                    <th style="text-align:center">55x45 Splitter</th>
                    <th style="text-align:center">50x50 Splitter</th>
                    
                    
                    </tr>
                  </thead>
                  
                  <tbody>
                  <?php
							require('var.php');
   							$sl=0;
							$query1=mysqli_query($con,"select * from `memo` ORDER BY `Date` ASC");
              $query2=mysqli_query($con,"SELECT MAX(sno) FROM `memo`");
							while($row=mysqli_fetch_array($query1))
								{ 
									$sl++;
								?>
					<tr>
						  <td style="text-align:center"><?php echo $sl; ?></td>
              <td style="text-align:center"><?php echo $row['Date']; ?></td>
              <td style="text-align:center"><?php echo $row['sno']; ?></td>
              <td style="text-align:center"><?php echo $row['All Splitter']; ?></td>
              <td style="text-align:center"><?php echo $row['6 Fiber']; ?></td>
              <td style="text-align:center"><?php echo $row['12 Fiber']; ?></td>
              <td style="text-align:center"><?php echo $row['Stay Drum']; ?></td>
              <td style="text-align:center"><?php echo $row['Binding']; ?></td>
              <td style="text-align:center"><?php echo $row['Bobbin']; ?></td>
              <td style="text-align:center"><?php echo $row['95x05 Splitter']; ?></td>
              <td style="text-align:center"><?php echo $row['90x10 Splitter']; ?></td>
              <td style="text-align:center"><?php echo $row['85x15 Splitter']; ?></td>
              <td style="text-align:center"><?php echo $row['80x20 Splitter']; ?></td>
              <td style="text-align:center"><?php echo $row['75x25 Splitter']; ?></td>
              <td style="text-align:center"><?php echo $row['70x30 Splitter']; ?></td>
              <td style="text-align:center"><?php echo $row['65x35 Splitter']; ?></td>
              <td style="text-align:center"><?php echo $row['60x40 Splitter']; ?></td>
              <td style="text-align:center"><?php echo $row['55x45 Splitter']; ?></td>
              <td style="text-align:center"><?php echo $row['50x50 Splitter']; ?></td>
                      

                      
			   </td>
											
										</tr>
										<?php } ?>     
                  </tbody>
                </table>
              </div>
            </div>

            
</body>
</html>

