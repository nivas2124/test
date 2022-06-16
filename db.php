


<?php
if(isset($_POST['va0']))
{

        require('var.php');
        // $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
       // $con = mysqli_connect('localhost','pi','123','test');
        // get the post records
        $code = $_POST['code'];
        $material0 = $_POST['material0'];
        $material1 = $_POST['material1'];
	$material2 = $_POST['material2'];
	$material3 = $_POST['material3'];
	$material4 = $_POST['material4'];
	$material5 = $_POST['material5'];
	$material6 = $_POST['material6'];
	$material7 = $_POST['material7'];
	$material8 = $_POST['material8'];
	$material9 = $_POST['material9'];


        $va0 = $_POST['va0'];
        $va1 = $_POST['va1'];
	$va2 = $_POST['va2'];
	$va3 = $_POST['va3'];
        $va4 = $_POST['va4'];
        $va5 = $_POST['va5'];
	$va6 = $_POST['va6'];
        $va7 = $_POST['va7'];
        $va8 = $_POST['va8'];
	$va9 = $_POST['va9'];



        if($va1=='')
        {
                $sql="INSERT INTO `memo`(`sno`,`$material0`) VALUES ($code,$va0)";
                echo "va1=='' </br>";
                echo $code;
        }
        if($va1!='')
        {
                $sql="INSERT INTO `memo`(`sno`,`$material0`,`$material1`) VALUES ($code,$va0,$va1)";
                echo "va1!='' </br> ";
	        if($va2=='')
        	{
        		$sql="INSERT INTO `memo`(`sno`,`$material0`,`$material1`) VALUES ($code,$va0,$va1)";
                     echo " va2=='' </br>";
        	}
        	if($va2!='')
	        {
		        $sql = "INSERT INTO `memo`(`sno`,`$material0`,`$material1`,`$material2`) VALUES ($code,$va0,$va1,$va2)";
                        echo "va2!=''</br>";

                        if($va3=='')
                        {
                                $sql = "INSERT INTO `memo`(`sno`,`$material0`,`$material1`,`$material2`) VALUES ($code,$va0,$va1,$va2)";
                                echo "va3=='' </br>";
           
                        }
                        if($va3!='')
                        {
                                $sql = "INSERT INTO `memo`(`sno`,`$material0`,`$material1`,`$material2`,`$material3`) VALUES ($code,$va0,$va1,$va2,$va3)";
                                echo "va3!='' </br>";
      
                                if($va4=='')
                                {
                                        $sql = "INSERT INTO `memo`(`sno`,`$material0`,`$material1`,`$material2`,`$material3`) VALUES ($code,$va0,$va1,$va2,$va3)";
                                        echo " va4=='' </br>";
                                }
                                if($va4!='')
                                {
                                        $sql = "INSERT INTO `memo`(`sno`,`$material0`,`$material1`,`$material2`,`$material3`,`$material4`) VALUES ($code,$va0,$va1,$va2,$va3,$va4)";
                                        echo "va4!=''</br>";
                                        if($va5=='')
                                        {
                                               $sql = "INSERT INTO `memo`(`sno`,`$material0`,`$material1`,`$material2`,`$material3`,`$material4`) VALUES ($code,$va0,$va1,$va2,$va3,$va4)";
                                               echo "va5==''</br>"; echo $sql;
                                        }
                                        if($va5!='')
                                        {
                                                $sql = "INSERT INTO `memo`(`sno`,`$material0`,`$material1`,`$material2`,`$material3`,`$material4`,`$material5`) VALUES ($code,$va0,$va1,$va2,$va3,$va4,$va5)";
                                                echo "va5!=''</br>"; echo $sql;

                                                if($va6=='')
                                                {
                                                        $sql = "INSERT INTO `memo`(`sno`,`$material0`,`$material1`,`$material2`,`$material3`,`$material4`,`$material5`) VALUES ($code,$va0,$va1,$va2,$va3,$va4,$va5)";
                                                        echo "va6==''</br>"; echo $sql;
                                                }
                                                if($va6!='')
                                                {
                                                        $sql = "INSERT INTO `memo`(`sno`,`$material0`,`$material1`,`$material2`,`$material3`,`$material4`,`$material5`,`$material6`) VALUES ($code,$va0,$va1,$va2,$va3,$va4,$va5,$va6)";
                                                        echo "va6!=''";                                                      
                                                        echo $sql;
                                                        if($va7=='')
                                                        {
                                                                $sql = "INSERT INTO `memo`(`sno`,`$material0`,`$material1`,`$material2`,`$material3`,`$material4`,`$material5`,`$material6`) VALUES ($code,$va0,$va1,$va2,$va3,$va4,$va5,$va6)";
                                                                echo "va7==''</br>"; echo $sql;
                                                        }
                                                        if($va7!='')
                                                        {
                                                                $sql = "INSERT INTO `memo`(`sno`,`$material0`,`$material1`,`$material2`,`$material3`,`$material4`,`$material5`,`$material6`,`$material7`) VALUES ($code,$va0,$va1,$va2,$va3,$va4,$va5,$va6,$va7)";
                                                                echo "va7!=''"; echo $sql;
                                                                if($va8=='')
                                                                {
                                                                        $sql = "INSERT INTO `memo`(`sno`,`$material0`,`$material1`,`$material2`,`$material3`,`$material4`,`$material5`,`$material6`,`$material7`) VALUES ($code,$va0,$va1,$va2,$va3,$va4,$va5,$va6,$va7)";
                                                                        echo "va8==''</br>"; echo $sql;
                                                                }
                                                               if($va8!='')
                                                                {
                                                                        $sql = "INSERT INTO `memo`(`sno`,`$material0`,`$material1`,`$material2`,`$material3`,`$material4`,`$material5`,`$material6`,`$material7`,`$material8`) VALUES ($code,$va0,$va1,$va2,$va3,$va4,$va5,$va6,$va7,$va8)";
                                                                        echo "va8!=''</br>";
                                                                }
                                                        }        
                                                }
                                        }
                                }
                        }
                }
        }
        
        


        


   
        $rs = mysqli_query($con, $sql);
       if($rs)
       {
             
             header("Location:index.php");

       }
}
        else
       {
             echo "Are you a genuine visitor?";
       }


?>
