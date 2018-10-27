<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa tin</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!--link-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> 
	<script src="<?= base_url('public') ?>/ckeditor/ckeditor.js"></script>
	<script src="<?= base_url('public') ?>/ckfinder/ckfinder.js"></script>
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-10">
						<div class="jumbotron">
							<h1 class="display-3">Sửa tin</h1>
						
						</div>
				<form action="<?= base_url() ?>new_controller/updateTintuc" method="post" enctype="multipart/form-data">
					<?php foreach ($arrayEdit as $value): ?>
						
							<fieldset class="form-group">
								
								<input type="hidden" class="form-control" id="id"  name="id" value="<?= $value['id_new'] ?>" >
							</fieldset>
							<fieldset class="form-group">
								<label for="formGroupExampleInput">Tiêu đề tin</label>
								<input type="text" class="form-control" id="title" placeholder="Tiêu đề" name="title" value="<?= $value['title'] ?>" >
							</fieldset>
							<fieldset class="form-group">
								<label for="formGroupExampleInput">Ảnh Tin</label>
								<img src="<?= $value['image'] ?>" alt="" class="img-fluid">
								<input type="hidden" value="<?= $value['image'] ?>" name="old-img">
								<input type="file" class="form-control" id="img" name="image" >
							</fieldset>
							<fieldset class="form-group">
								<label for="formGroupExampleInput">Trích dẫn</label>
								<textarea name="desc" id="" cols="30" rows="10">
									<?= $value['description'] ?>
								</textarea>
							</fieldset>
							<fieldset class="form-group">
								<select name="category" id="">
									<?php foreach ($arrayCategory as $cate): ?>
										<?php if( $value['id_danhmuc'] == $cate['id_danhmuc'] ) { ?>
										 <option value="<?= $cate['id_danhmuc'] ?>" selected class="text-danger">
												<?= $cate['category_name']  ?>
										</option>

										<?php }else { ?>
										
											<option value="<?= $cate['id_danhmuc'] ?>">
												<?= $cate['category_name']  ?>
											</option>
										<?php  } ?>
										
									<?php endforeach ?>
								
											    
											 
								</select>
								
							</fieldset>
							<fieldset class="form-group">
								<label for="formGroupExampleInput">Người Đăng</label>
								<input type="text" class="form-control" id="tacgia"  name="tacgia" value="<?= $value['tacgia'] ?>" >
							</fieldset>
							<fieldset class="form-group">
								<label for="formGroupExampleInput">Nội dung tin</label>
								<textarea name="content" id="content"  cols="30" rows="10">
									
									<?= $value['content'] ?>

								</textarea>
							</fieldset>

							<fieldset class="form-group">
								
								<input type="submit" class="form-control btn btn-success" id="submit" value="Sửa tin">
							</fieldset>
					<?php endforeach ?>
						</form>
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

      
            </script>
</body>
</html>