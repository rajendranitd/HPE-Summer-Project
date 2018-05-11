<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{

if(isset($_POST['submit']))
{
$hotelcode=$_POST['hotelcode'];
$hotelname=$_POST['hotelname'];
$hotellocation=$_POST['hotellocation'];

$i_name=$_FILES['i1']['name'];
$i_path="images/"."_".$i_name;
$up=move_uploaded_file($_FILES['i1']['tmp_name'], $i_path);
if($up==1)
{

$ret=mysql_query("insert into hotel_detail(hotelcode,hotelname,hotellocation,i_name,i_path) values('$hotelcode','$hotelname','$hotellocation','$i_name','$i_path')");
if($ret)
{
$_SESSION['msg']="Hotel Created Successfully !!";
}}
else
{
  $_SESSION['msg']="Error : Hotel not created";
}
}
if(isset($_GET['del']))
      {
              mysql_query("delete from hotel_detail where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Hotel deleted !!";
      }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin | Course</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
<?php include('includes/header.php');?>
    <!-- LOGO HEADER END-->
<?php if($_SESSION['alogin']!="")
{
 include('includes/menubar.php');
}
 ?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Hotel  </h1>
                    </div>
                </div>
                <div class="row" >
                  <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           Hotel 
                        </div>
<font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>


                        <div class="panel-body">
                       <form name="dept" method="post" enctype="multipart/form-data">
   <div class="form-group">
    <label for="coursecode">Hotel Code  </label>
    <input type="text" class="form-control" id="coursecode" name="hotelcode" placeholder="Hotel Code" required />
  </div>

 <div class="form-group">
    <label for="coursename">Hotel Name  </label>
    <input type="text" class="form-control" id="coursename" name="hotelname" placeholder="Hotel Name" required />
  </div>

<div class="form-group">
    <label for="courseunit">Hotel Location  </label>
    <input type="text" class="form-control" id="courseunit" name="hotellocation" placeholder="Hotel Location" required />
  </div> 

<div class="form-group">
    <label for="seatlimit">Image  </label>
    <input type="file" class="" id="image" name="i1" placeholder="Upload Image" required />
  </div>   

 <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>
                            </div>
                            </div>
                    </div>
                  
                </div>
                <font color="red" align="center"><?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?></font>
                <div class="col-md-12">
                    <!--    Bordered Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Hotels
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Hotel Code</th>
                                            <th>Hotel Name </th>
                                            <th>Hotel Location</th>
                                            <th>Image</th>
                                             <th>Creation Date</th>
                                             <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$sql=mysql_query("select * from hotel_detail");
$cnt=1;
while($row=mysql_fetch_array($sql))
{
?>


                                        <tr>
                                            <td><?php echo $cnt;?></td>
                                            <td><?php echo htmlentities($row['hotelcode']);?></td>
                                            <td><?php echo htmlentities($row['hotelname']);?></td>
                                            <td><?php echo htmlentities($row['hotellocation']);?></td>
                                             <td><img src="<?php echo $row['i_path'] ?>" width="25px" height="25px"></td>
                                            <td><?php echo htmlentities($row['creationDate']);?></td>
                                            <td>
                                                                                 
  <a href="insert_hotel.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')">
                                            <button class="btn btn-danger">Delete</button>
</a>
                                            </td>
                                        </tr>
<?php 
$cnt++;
} ?>

                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!--  End  Bordered Table  -->
                </div>
            </div>





        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
  <?php include('includes/footer.php');?>
   
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
<?php } ?>
