<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $result[0]['title'] ; ?></title>
	<link rel="shortcut icon" href="<?= base_url() ?>images/logo-title.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- link css -->
	<link rel="stylesheet" href="<?= base_url() ?>css/styles.css">
	<!-- <link rel="stylesheet" href="css/fontawesome.css"> -->
	<link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.css">
	
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> 
	<!--font-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&amp;subset=vietnamese" rel="stylesheet">
	
</head>
<body>
	
	
	
	
	<!--lấy id từ uri-->
	<?php
				$uri=$_SERVER['REQUEST_URI'];
				$uri=explode('/',$uri);
				$id=end($uri);


	?>
			
				
	<div class="menu-top">
		<div class="container">
			<div class="icon">
				<a href="https://www.facebook.com/kevjl.kjss" class="fab fa-facebook-f"></a>
				<a class="fab fa-twitter" href="https://www.facebook.com/kevjl.kjss"></a>
				<a href="https://github.com/tuandn6597" class="fab fa-github"></a>
				<a class="fab fa-google-plus-g" href="https://www.facebook.com/kevjl.kjss"></a>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-white rounded menu-center">
		<div class="container">
				 <a class="navbar-brand" href="<?= base_url() ?>new_controller"><img src="<?= base_url() ?>images/logo.png" height="50" alt=""></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav ml-auto">
				      <li class="nav-item active">
				        <a class="nav-link" href="#">tin <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">mobile</a>
				      </li>
				        <li class="nav-item">
				        <a class="nav-link" href="#">internet</a>
				      </li>
				        <li class="nav-item">
				        <a class="nav-link" href="#">khám phá</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link search" href="#"><i class="fas fa-search"></i></a>

							<div class="card form-search">
								
									 	 <div class="card-body">
										   	<form action="<?= base_url() ?>new_controller/search" method="get">
												  <div class="form-group input-group">
												  
												    <input type="text" class="form-control" id="formGroupExampleInput" name="keyword">
												    	 <div class="input-group-append">
													    <button class="btn btn-outline-danger" type="submit">search</button>
													  </div>
												  </div>
												 
											</form>
										</div>
							 </div>
						
				      </li>
				     
				    </ul>
				  
				  </div>
				 </div> <!-- end container -->
</nav> <!--end navbar-->
<!--section1-->

<div class="container">
	<div class="row">

			
		<div class="col-md-8 scroll">
			<div class="card mt-4" >
				<div class="card-body">
					<?php foreach ($result as $value): ?>
						
				
						<h5 class=""><?= $value['title'] ?></h5>
						<p class="time"><span class="date">by -</span><span class="tacgia"><?= $value['tacgia'] ?></span> <span class="date"><?= date('d/m/Y - G:i -A',$value['date']) ?></span>
							<a href="" class="link-cate ins"><?= $value['category_name'] ?></a>
						</p>
						<div class="img-title">
						<a href="" class="rem" ><img src="<?= $value['image'] ?>" alt="" height="465" width="696"></a>
						</div>
						<div class="fol-content">
						<?= $value['content'] ?>
						</div>
					<?php endforeach ?>	
				</div> <!--end card body-->
			</div> <!--end card-->
						
		</div>
		
		<div class="col-md-4 mt-4">
				<div class="card mb-4" >
						<h5 class="title-sec2 sec3 removesec">Category
						</h5>
						  <div class="card-body">
						  	<?php foreach ($category as $value): ?>
						  		<a href="<?= base_url() ?>new_controller/tagdiv_category/<?= $value['id_danhmuc'] ?>" class="category">
						  			<?= $value['category_name'] ?>
						  		</a>
						  	<?php endforeach ?>
						  		
						  		
						  </div>
				</div>
				<div class="card content-sec2 sec3 mb-4" >

					 <div class="card-header bg-white">Tin mới nhất</div>
						<div class="card-body">
							  	<?php foreach ($tinmoi as $value): ?>
							  		
							  	
							    	<div class="d-flex mt-3 remove-flex">
										
										<a class="news-detail-img" href="<?= base_url() ?>new_controller/news_detail/<?= $value['id_new'] ?>"><img src="<?= $value['image'] ?>" width="130" height="100" alt=""></a>
										
										<div class="sec2-b-content remove-ml">
											<a href="" class="title-sec2-bot s-14"><?= $value['title'] ?></a>
											<br>
											<span class="date"><?= date('d/m/Y - G:i -A',$value['date']) ?></span>
										</div>
									</div> <!--end 1block-->
									<hr>
								<?php endforeach ?>
						 </div>
					</div>
					
				</div>
				


			
				
					
					
				


		</div><!--end col-md-4-->
	</div>
</div>	
		<div class="container">
		<div class="row">
			<div class="col-md-8" class="fol">
				<hr>
				<div class="fol-icon" style="margin-top:20px;">
					<div class="row">
						<div class="col-lg-3 col-xs-6" ">
								
								
									<a href="https://www.facebook.com/kevjl.kjss" id="i1" class="fab fa-facebook-f brline a-one">	<span style="font-size:12px;margin-left: 20px;">facebook</span>	</a>
								
								
						</div> <!--end col-sm-3-->
						<div class="col-lg-3 col-xs-6"">
								
									<a href="https://www.facebook.com/kevjl.kjss" id="i2"  class="fab fa-twitter brline a-one"><span style="font-size:12px;margin-left: 18px;">twitter</span></a>
									
								
								
						</div> <!--end col-sm-3-->
						<div class="col-lg-3 col-xs-6" ">
								
									<a href="https://www.facebook.com/kevjl.kjss" id="i3"  class="fab fa-github brline a-one"><span style="font-size:12px;margin-left: 18px;">github</span></a>

									
								
							
						</div> <!--end col-sm-3-->
						<div class="col-lg-3 col-xs-6">
								
									<a href="https://www.facebook.com/kevjl.kjss" id="i4"  class="fab fa-google-plus-g brline a-one">
										<span style="font-size:12px;margin-left: 10px;">gmail</span>
									</a>
									
									
								
						</div> <!--end col-sm-3-->
					</div>
								

								
								
				</div><!--end icon icon-follow-->
				<hr>
			</div>

		</div>	
</div>
<div class="container">
		<div class="row ajax-comment">
			
			<?php if($arr){?>
			<div class="col-md-8">
				<h5 class="title-sec2 sec3">Comment</h5>
				<div class="content-sec2">
					<div class="card-body ajax">
						<?php foreach ($arr as $value): ?>
							<div class='d-flex mb-3'>
								<img src='<?= base_url() ?>images/user.png' alt='' height='50'>
														
								<div class='sec2-b-content'>
									<a href=''  class='title-sec2-bot'>
										<?= $value['name'] ?>
									</a>
									<br>
							
									<p class='time mb-0'>
							
										 <span class='date'>
											<?= date('d/m/Y - G:i -A',$value['date']) ?>
										</span>
									</p>
									<p class='content-s3 mt-0'>					
									<?= $value['content'] ?>						
									</p>					
								</div>	
							</div>
							<?php if($value['reply']){ ?>
							<div class='d-flex mb-3 admin'>
								<img src='<?= base_url() ?>images/user.png' alt='' height='50'>
														
								<div class='sec2-b-content'>
									<a href=''  class='title-sec2-bot'>
										ADMIN
									</a>
									<br>
									<p class='content-s3 mt-0'>					
									<?= $value['reply'] ?>			
									</p>
										
													
								</div>	
							</div>
							<?php } ?>
						<hr>
						<?php endforeach ?>
					</div>
				</div>
			</div>
			<?php }else{?>

		<?php }?>
			<div class="col-md-8">
				<h5 style="font-size:15px;    margin-bottom: 0;
    margin-top: 10px;">LEAVE A REPLY</h5>

				
					<fieldset class="form-group">
						<input type="hidden" class="form-control" id="id" name="id" value="<?= $id ?>">
					</fieldset>
					<fieldset class="form-group">
						 <textarea class="form-control" name="comment" id="comment" rows="5" placeholder="Comment:*"></textarea>
					</fieldset>
					<fieldset class="form-group">
						
						<input type="text" class="form-control" id="name" placeholder="Name:*" name="name">
					</fieldset>
					<fieldset class="form-group">
					
						<input type="email" class="form-control" id="email" placeholder="Email:*" name="email">
					</fieldset>
					<fieldset class="form-group">
						<div class="btn btn-outline-info send_comment">Gửi bình luận</div>
					</fieldset>
				
			</div>
		</div>
	</div>
	</div>	
		
	


 <footer>
	<div class="container">
		<div class="row">
				<div class="col-sm-4">
					<div class="f-left">
						 <a class="navbar-brand" href="<?= base_url() ?>new_controller"><img src="<?= base_url() ?>images/logo-footer.png"  alt=""></a>
					</div><!-- end f-left -->
				</div>
				<div class="col-sm-4">
					<div class="f-center">
						<h5 class="f-title title-sec2 mb-2">
							About us
						</h5>
						<p class="f-center-content">
							Web này là blog về công nghệ,chúng tôi sẽ luôn chia sẽ về nhưng công nghệ mới nhất.

						</p>
						<p class="f-contact">
							<a href="https://www.facebook.com/kevjl.kjss" style="text-decoration: none;"><span style="color:white;">contact us:</span> <span style="color:#00cff3;">tuandn6597@gmail.com</span></a>
						</p>
					</div><!-- end f-center -->
				</div>
				<div class="col-sm-4">
					<div class="f-right">
						<h5 class="f-title title-sec2 mb-2">
							FOLLOW US
						</h5>
						<div class="f-icon">
							<a href="https://www.facebook.com/kevjl.kjss" class="fab fa-facebook-f mb-3"></a>
							<a class="fab fa-twitter mb-3"  href="https://www.facebook.com/kevjl.kjss"></a>
							<a href="https://github.com/tuandn6597" class="fab fa-github mb-3"></a>
							<a class="fab fa-google-plus-g mb-3" href="https://www.facebook.com/kevjl.kjss"></a>
						</div>
					</div> <!-- end f-right -->
				</div>
	</div>
</div><!--  end container -->
</footer>
<div class="footer-producer">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<a href="" class="title-sec2-bot">© Producer by Nhóm</a>
			</div>
		</div>
	</div>
</div>

<!--scrollTop-->
<div class="container">
	<div class="scroll-top">
	<i class="fas fa-chevron-up"></i>
	</div>
</div>

	<!--link js-->
	<script type="text/javascript" src="<?= base_url() ?>js/jquery-3.3.1.min.js"></script>
	<!--<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>-->
	<script type="text/javascript" src="<?= base_url() ?>js/main.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>js/bootstrap.js"></script>
	<script type="text/javascript">
			

		$(".send_comment").click(function(event) {
			/* Act on the event */
			id_new=$("#id").val();
			name=$("#name").val();
			email=$("#email").val();
			comment=$("#comment").val();
			$.ajax({
				url: '<?= base_url() ?>comment',
				type: 'post',
				dataType: 'json',
				data: {id: id_new,name:name,email:email,comment:comment},
				success:function(data)
				{
						console.log(data.arr);
						createComment(data.arr);
				}
			})
			.done(function() {
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			function createComment(arr)
			{
				
					for(index in arr)
					{
						var a = new Date(arr[index].date * 1000);
						  var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
						  var year = a.getFullYear();
						  var month = months[a.getMonth()];
						  var date = a.getDate();
						  var hour = a.getHours();
						  var min = a.getMinutes();
						  var sec = a.getSeconds();
						  var time = date + ' ' + month + ' ' + year + ' ' + hour + ':' + min + ':' + sec ;
						if($("div").hasClass('ajax'))
						{
							console.log("co roi");
						
							content="<div class='d-flex mb-3'>";
										
						 content+="<img src='<?= base_url() ?>images/user.png' alt='' height='50'>";
														
						content+="	<div class='sec2-b-content'>";		
						content+="<a href=''  class='title-sec2-bot'>" ;
						content+=arr[index].name;
						content+="</a>";
						content+="<br>"	;
						
						content+="<p class='time mb-0'>";
					
						content+=" <span class='date'>";
						content+=time;
						content+="</span></p>";
						content+="<p class='content-s3 mt-0'>";							
						content+=arr[index].content;						
						content+="</p>"	;						
						content+="</div>";	
						content+="</div>";	
						content+="<hr>";
						$('.ajax').append(content);	
						}
						else{
							console.log("chua co");
							content="<div class='row'>"
							content+="<div class='col-md-8'>";
								content+="<h5 class='title-sec2 sec3'>Comment</h5>";
								content+="<div class='content-sec2'>";
									content+="<div class='card-body ajax'>";
										content+="<div class='d-flex mb-3'>";
												
								 		content+="<img src='<?= base_url() ?>images/user.png' alt='' height='50'>";
																
										content+="	<div class='sec2-b-content'>";		
										content+="<a href=''  class='title-sec2-bot'>" ;
										content+=arr[index].name;
										content+="</a>";
										content+="<br>"	;
										
										content+="<p class='time mb-0'>";
									
										content+=" <span class='date'>";
										content+=time;
										content+="</span></p>";
										content+="<p class='content-s3 mt-0'>";							
										content+=arr[index].content;						
										content+="</p>"	;						
										content+="</div>";	
										content+="</div>";	
										content+="<hr>";
									content+="</div>";
								content+="</div>";	
							content+="</div>";	
						content+="</div>";
						$(content).insertBefore('.ajax-comment');	

						}


							
														
			
					
					}
					
			}

		});
		
	</script>	

</body>
</html>