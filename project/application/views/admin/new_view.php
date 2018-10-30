<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>News</title>
	<style>
		.main{
			display:flex;
			height:100%;
		}
		.left .card-header{
			 background-color: #81ecec;
			 color:white;
		}
			.left .card {
		 
		    height: 100%;
		   
			}
			.right{
				width:80%;

				
			}
			.card .list-group-item:hover,.active1 {
			    background-color: #81ecec !important;
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
	<script type="text/javascript" src="<?= base_url() ?>js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.css">
	<!--link-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> 
	<script src="<?= base_url('public') ?>/ckeditor/ckeditor.js"></script>
	<script src="<?= base_url('public') ?>/ckfinder/ckfinder.js"></script>

</head>
<body>
<div class="main">
	<div class="left">
		<div class="card">
		  <div class="card-header text-center">
		   ADMIN
		  </div>
		  <div class="card-body">
			   <ul class="list-group list-group-flush">
			   <li class="list-group-item"> <a href="<?= base_url() ?>admin/Dashboard/user"><i class="fas fa-user-tie"></i> Thông tin Admin </a></li>
			     <li class="list-group-item"><a href="<?= base_url() ?>admin/new_controller/newManagement"><i class="fas fa-cog"></i> Quản lý tin</a></li>
			    <li class="list-group-item"><a href="<?= base_url() ?>admin/new_controller/GetData""><i class="far fa-list-alt"></i> Quản lý danh mục</a></li>
			    <li class="list-group-item"><a href="<?= base_url() ?>admin/comment/getAllComment""><i class="fas fa-comment"></i> Quản lý comment</a></li>
			       <li class="list-group-item"><a href="<?= base_url() ?>admin/Dashboard/logout"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a></li>
			  </ul>
		  </div>
		</div>	
	</div><!--end left-->
<div class="right">
	<nav class="navbar navbar-light bg-light mb-4">
	  <form  action="<?= base_url() ?>admin/new_controller/newManagement" method="post" class="form-inline ml-auto">
	    <input class="form-control mr-sm-2" type="search" placeholder="Search"  name="keyword">
	    <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="search">
	  </form>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
						<h5 class="card-header bg-primary text-light mb-4">Thêm Tin</h5>
						<form action="<?= base_url() ?>admin/new_controller/addNews" method="post" enctype="multipart/form-data">
							<fieldset class="form-group">
								<label for="formGroupExampleInput">Tiêu đề tin</label>
								<input type="text" class="form-control" id="title" placeholder="Tiêu đề" name="title" >
							</fieldset>
							<fieldset class="form-group">
								<label for="formGroupExampleInput">Ảnh Tin</label>
								<input type="file" class="form-control" id="img" name="image" >
							</fieldset>
							<fieldset class="form-group">
								<label for="formGroupExampleInput">Trích dẫn</label>
								<textarea name="desc" id="" cols="30" rows="10"></textarea>
							</fieldset>
							<fieldset class="form-group">
								<select name="category" id="">
								<?php foreach ($array_result as $value): ?>
									<option value="<?= $value['id_danhmuc'] ?>"><?= $value['category_name'] ?></option>
											  
								<?php endforeach ?>
											    
											 
								</select>
								
							</fieldset>
							<fieldset class="form-group">
								<label for="formGroupExampleInput"> Người đăng</label>
								<input type="text" class="form-control" id="tacgia" placeholder="Tên Người đăng" name="tacgia" >
							</fieldset>
							<fieldset class="form-group">
								<label for="formGroupExampleInput">Nội dung tin</label>
								<textarea name="content" id="content"  cols="30" rows="10"></textarea>
							</fieldset>

							<fieldset class="form-group">
								
								<input type="submit" class="form-control btn btn-outline-danger" id="submit" value="Thêm tin">
							</fieldset>
						</form>
			</div><!--end cot trai-->
			<div class="col-sm-6">
					
						
						<h5 class="card-header bg-primary text-light mb-4">Danh sách tin</h5>
						
						<div class="row">
								<div class="card-group">
									<?php foreach ($listNews as $value): ?>
										<div class="col-sm-12">
										<div class="card">
											
												<img class="card-img-top img-fluid" src="<?= $value['image'] ?>" alt="Card image cap">
												<div class="card-block">
													<h4 class="card-title"><?= $value['title'] ?></h4>
													<p class="card-text"><?= $value['description'] ?></p>
													<p class="card-text"><small class="text-muted"><?= date('d/m/Y - G:i -A',$value['date']) ?></small></p>
													<p class="card-text"> <?= $value['tacgia'] ?></p>
												</div>
												<div class="icon">
													<a href="<?= base_url() ?>admin/new_controller/deleteNews/<?= $value['id_new'] ?>">
													<button type="button" class="btn btn-outline-danger fas fa-trash-alt"></button>
												</a>
												<a href="<?= base_url() ?>admin/new_controller/editNews/<?= $value['id_new'] ?>">
													<button type="button" class="btn btn-outline-danger fas fa-pen"></button>
												</a>
												</div>
										</div>
									</div>
									<?php endforeach ?>
							
								</div>
						</div><!--end row-->
						
			</div>
		</div>
	</div>
</div>
</div>
 <script>
                // Replace the <textarea id="content"> with a CKEditor
                // instance, using default configuration.
             CKEDITOR.replace( 'content',
					 {
					     filebrowserBrowseUrl: '<?= base_url('public') ?>/ckfinder/ckfinder.html',
					     filebrowserImageBrowseUrl: '<?= base_url('public') ?>/ckfinder/ckfinder.html?type=Images',
					     filebrowserUploadUrl: '<?= base_url('public') ?>/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
					     filebrowserImageUploadUrl: '<?= base_url('public') ?>/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
					 });
             var pathname = window.location.pathname;
	var hostname=window.location.hostname;
	var link="http://"+hostname+":81"+pathname;
console.log(link);

		$('ul > li > a[href="'+link+'"]').parent().addClass('active1');
      
            </script>
	 <script type="text/javascript" src="<?= base_url() ?>js/bootstrap.js"></script>
	 
</body>
</html>