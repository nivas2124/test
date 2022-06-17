<html>
<head>

<title>Last Report</title>

<script src="phpscript.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<style>
table, th, td {
  border: 2px solid;
}
</style>


            <h1 style="text-align:center; color:#CC3300;" > Last Report </h1>
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
						//	$query1=mysqli_query($con,"select * from `memo` ORDER BY `Date` ASC");
              $query2=mysqli_query($con,"select * from `memo` WHERE sno = (select MAX(sno) FROM `memo`)");
							while($row=mysqli_fetch_array($query2))
								{ 
									$sl++;
								?>
					<tr>
						  <td style="text-align:center"><?php echo $sl; ?></td>

              <td style="text-align:center"><?php echo $row['Date']; ?></td>
              <?php $date[] = $row['Date']; ?>

              <td style="text-align:center"><?php echo $row['sno']; ?></td>
              <?php $code[] = $row['sno']; ?>
              <td style="text-align:center"><?php echo $row['All Splitter']; ?></td>
              <?php $all[] = $row['All Splitter']; ?>
              <td style="text-align:center"><?php echo $row['6 Fiber']; ?></td>
              <?php $f6[] = $row['6 Fiber']; ?>
              <td style="text-align:center"><?php echo $row['12 Fiber']; ?></td><?php $f12[] = $row['12 Fiber']; ?>
              <td style="text-align:center"><?php echo $row['Stay Drum']; ?></td><?php $stay[] = $row['Stay Drum']; ?>
              <td style="text-align:center"><?php echo $row['Binding']; ?></td><?php $binding[] = $row['Binding']; ?>
              <td style="text-align:center"><?php echo $row['Bobbin']; ?></td><?php $bobbin[] = $row['Bobbin']; ?>
              <td style="text-align:center"><?php echo $row['95x05 Splitter']; ?></td><?php $s95x05[] = $row['95x05 Splitter']; ?>
              <td style="text-align:center"><?php echo $row['90x10 Splitter']; ?></td><?php $s90x10[] = $row['90x10 Splitter']; ?>
              <td style="text-align:center"><?php echo $row['85x15 Splitter']; ?></td><?php $s85x15[] = $row['85x15 Splitter']; ?>
              <td style="text-align:center"><?php echo $row['80x20 Splitter']; ?></td><?php $s80x20[] = $row['80x20 Splitter']; ?>
              <td style="text-align:center"><?php echo $row['75x25 Splitter']; ?></td><?php $s75x25[] = $row['75x25 Splitter']; ?>
              <td style="text-align:center"><?php echo $row['70x30 Splitter']; ?></td><?php $s70x30[] = $row['70x30 Splitter']; ?>
              <td style="text-align:center"><?php echo $row['65x35 Splitter']; ?></td><?php $s65x35[] = $row['65x35 Splitter']; ?>
              <td style="text-align:center"><?php echo $row['60x40 Splitter']; ?></td><?php $s60x40[] = $row['60x40 Splitter']; ?>
              <td style="text-align:center"><?php echo $row['55x45 Splitter']; ?></td><?php $s55x45[] = $row['55x45 Splitter']; ?>
              <td style="text-align:center"><?php echo $row['50x50 Splitter']; ?></td><?php $s50x50[] = $row['50x50 Splitter']; ?>
                      
                  
                      
			   </td>
											
										</tr>

                    


										<?php } ?>     
                  </tbody>
                </table>

<input type="button" name="Print" value="Print" onclick = "print_memo()">

                <script>
var date = <?php echo '"'.implode('","', $date).'"' ?>;
// var date = date1.filter(element => {
// return element !== '';});

var code = <?php echo '"'.implode('","', $code).'"' ?>;
// var code = code1.filter(element => {
// return element !== '';});

var all = <?php echo '"'.implode('","', $all).'"' ?>;
// var all = all1.filter(element => {
// return element !== '';});

var f6 = <?php echo '"'.implode('","', $f6).'"' ?>;
// var f6 = f61.filter(element => {
// return element !== '';});

var f12 = <?php echo '"'.implode('","', $f12).'"' ?>;
// var f12 = f121.filter(element => {
// return element !== '';});

var stay = <?php echo '"'.implode('","', $stay).'"' ?>;
// var stay = stay1.filter(element => {
// return element !== '';});

var binding = <?php echo '"'.implode('","', $binding).'"' ?>;
// var binding = binding1.filter(element => {
// return element !== '';});

var bobbin = <?php echo '"'.implode('","', $bobbin).'"' ?>;
// var bobbin = bobbin1.filter(element => {
// return element !== '';});

var s95x05 = <?php echo '"'.implode('","', $s95x05).'"' ?>;
// var s95x05 = s95x051.filter(element => {
// return element !== '';});

var s90x10 = <?php echo '"'.implode('","', $s90x10).'"' ?>;
// var s90x10 = s90x101.filter(element => {
// return element !== '';});

var s85x15 = <?php echo '"'.implode('","', $s85x15).'"' ?>;
// var s85x15 = s85x151.filter(element => {
// return element !== '';});

var s80x20 = <?php echo '"'.implode('","', $s80x20).'"' ?>;
// var s80x20 = s80x201.filter(element => {
// return element !== '';});

var s75x25 = <?php echo '"'.implode('","', $s75x25).'"' ?>;
// var s75x25 = s75x251.filter(element => {
// return element !== '';});

var s70x30 = <?php echo '"'.implode('","', $s70x30).'"' ?>;
// var s70x30 = s70x301.filter(element => {
// return element !== '';});

var s65x35 = <?php echo '"'.implode('","', $s65x35).'"' ?>;
// var s65x35 = s65x351.filter(element => {
// return element !== '';});

var s60x40 = <?php echo '"'.implode('","', $s60x40).'"' ?>;
// var s60x40 = s60x401.filter(element => {
// return element !== '';});

var s55x45 = <?php echo '"'.implode('","', $s55x45).'"' ?>;
// var s55x45 = s55x451.filter(element => {
// return element !== '';});

var s50x50 = <?php echo '"'.implode('","', $s50x50).'"' ?>;
// var s50x50 = s50x501.filter(element => {
// return element !== '';});



                        
                </script>

              </div>
            </div>
            </body>
</html>
