<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.css">
	
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> 
	<!--font-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&amp;subset=vietnamese" rel="stylesheet">
	<script type="text/javascript" src="<?= base_url() ?>js/bootstrap.js"></script>
	<style>
	.left .card {
    width: 20%;
    height: 100%;
}
*{

}
.card .list-group-item:hover {
    background-color: #81ecec;
}
.card .list-group-item:hover a{
  text-decoration: none;
}
.card .list-group-item {
    transition: 0.4s;
    margin-bottom: 5px;
    border: initial;
    border-bottom: 1px solid #80808026;
    border-radius: 6px;
    transition:0.4s;
}
a{
	color:black !important;
}
body, html, .left {
    height: 100%;
}
	</style>
</head>
<body>
	<div class="left">
		<div class="card">
		  <div class="card-header text-center">
		   ADMIN
		  </div>
		  <div class="card-body">
			   <ul class="list-group list-group-flush">
			  
			    <li class="list-group-item"> <a href=""><i class="fas fa-user-tie"></i> Thông tin Admin </a></li>
			     <li class="list-group-item"><a href="<?= base_url() ?>new_controller/newManagement"><i class="fas fa-cog"></i> Quản lý tin</a></li>
			    <li class="list-group-item"><a href="<?= base_url() ?>new_controller/GetData""><i class="far fa-list-alt"></i> Quản lý danh mục</a></li>
			    <li class="list-group-item"><a href="<?= base_url() ?>comment/getAllComment""><i class="fas fa-comment"></i> Quản lý comment</a></li>
			      <li class="list-group-item"><a href="<?= base_url() ?>admin/Dashboard/logout"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a></li>
			  </ul>
		  </div>
		</div>	
	</div><!--end left-->
</body>
</html>