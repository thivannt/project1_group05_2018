<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="<?= base_url() ?>images/logo-title.ico" />
	<title>Project Đồ Án 1</title>

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
				  <a class="navbar-brand" href="#"><img src="images/logo.png" height="50" alt=""></a>
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
				    <div class="search">
				    	
				    </div>
				  
				  </div>
				
				 </div> <!-- end container -->
</nav> <!--end navbar-->
<!--section1-->
<section >
	<div class="container section1 d-flex">
		<div class="left col-sm-4">
			<div class="one-block">
				<a href=""><img src="images/img1.jpg" class="img1" alt="" ></a>
				<div class="content">
					<a href="" class="link-cate">Iphone</a>
					<h3 class="large">Canon XC10 4K Digital Camcorder Is Out: Versatile And For Only $2,500</h3>
				</div>
			</div> <!--end 1 block-->
			
			<div class="one-block">
				<img src="images/img2.jpg" class="img2" alt="" >
				<div class="content">
					<a href="" class="link-cate">Android</a>
					<h3 class="smal">Canon XC10 4K Digital Camcorder Is Out: Versatile And For Only $2,500</h3>
				</div>
			</div><!--end 1 block-->
				
		</div> <!--end left-->
		<div class="center col-sm-4">
			<div class="one-block">
				<img src="images/img3.jpg" class="img3" alt="" >
				<div class="content">
					<a href="" class="link-cate">Reviews</a>
					<h3 class="smal">Canon XC10 4K Digital Camcorder Is Out: Versatile And For Only $2,500</h3>
				</div>
			</div><!--end 1 block-->
			<div class="one-block">
				<img src="images/img4.jpg" class="img4" alt="" >
				<div class="content">
					<a href="" class="link-cate">Photography</a>
					<h3 class="smal">Canon XC10 4K Digital Camcorder Is Out: Versatile And For Only $2,500</h3>
				</div>
			</div><!--end 1 block-->
			<div class="one-block">
				<img src="images/img5.jpg" class="img5" alt="" >
				<div class="content">
					<a href="" class="link-cate">Apple</a>
					<h3 class="smal">Canon XC10 4K Digital Camcorder Is Out: Versatile And For Only $2,500</h3>
				</div>
			</div><!--end 1 block-->
		</div>
		<div class="right col-sm-4">
			<div class="one-block">
				<img src="images/img6.jpg" class="img6" alt="" >
				<div class="content">
					<a href="" class="link-cate">Iphone</a>
					<h3 class="smal">Canon XC10 4K Digital Camcorder Is Out: Versatile And For Only $2,500</h3>
				</div>
			</div><!--end 1 block-->
			<div class="one-block">
				<img src="images/img7.jpg" class="img7" alt="" >
				<div class="content">
					<a href="" class="link-cate">Android</a>
					<h3 class="large">Canon XC10 4K Digital Camcorder Is Out: Versatile And For Only $2,500</h3>
				</div>
			</div><!--end 1 block-->
		</div>
	</div>
</section> <!--end section1 -->
<section class="section2">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h5 class="title-sec2">Android</h5>
					<div class="content-sec2">
						<div class="card-body">
						<div class="sec2-top">
							<div class="row">
								<div class="col-lg-6">
										<div class="sec2-top-b1">
											<a href=""><img src="images/img2.jpg" alt=""></a>
											<a href=""class="sec2-title">Robots helped inspire deep learning might become</a>
											<p class="time">Armin Vans <span class="date">- May 4,2018</span></p>
											<p class="sec2-content">Happy Sunday from Software Expand! In this week's edition of Feedback Loop, we talk about the future of Windows Phone, whether it makes sense...</p>
										</div><!--end sec2-top-b1-->
								</div>
								<div class="col-lg-6">
									<div class="sec2-top-b1">
										<a href=""><img src="images/img8.jpg" alt=""></a>
										<a href=""class="sec2-title">Robots helped inspire deep learning might become</a>
										<p class="time">Armin Vans <span class="date">- May 4,2018</span></p>
										<p class="sec2-content">Happy Sunday from Software Expand! In this week's edition of Feedback Loop, we talk about the future of Windows Phone, whether it makes sense...</p>
									</div><!--end sec2-top-b1-->
								</div>
							</div>
							
							
						</div><!--end sec2-top-->
						<div class="sec2-bottom">
							<div class="row">
								
								<div class="col-lg-6 d-flex mt-3">
									
									<a href=""><img src="images/img9.jpg" alt=""></a>
									
									<div class="sec2-b-content">
										<a href="" class="title-sec2-bot">Audio Tour App Detour Steers You Away from the Typical Tourist...</a>
										<br>
										<span class="date">May 4, 2018</span>
									</div>
								</div> <!--end 1block-->
								<div class="col-lg-6 d-flex mt-3">
									
										<a href=""><img src="images/img10.jpg" alt=""></a>
									
									<div class="sec2-b-content">
										<a href="" class="title-sec2-bot">Audio Tour App Detour Steers You Away from the Typical Tourist...</a>
										<br>
										<span class="date">May 4, 2018</span>
									</div>
								</div> <!--end 1block-->
								<div class="col-lg-6 d-flex mt-3">
									
										<a href=""><img src="images/img11.jpg" alt=""></a>
									
									<div class="sec2-b-content">
										<a href="" class="title-sec2-bot">Audio Tour App Detour Steers You Away from the Typical Tourist...</a>
										<br>
										<span class="date">May 4, 2018</span>
									</div>
								</div> <!--end 1block-->
								<div class="col-lg-6 d-flex mt-3">
									
										<a href=""><img src="images/img12.jpg" alt=""></a>
									
									<div class="sec2-b-content">
										<a href="" class="title-sec2-bot">Audio Tour App Detour Steers You Away from the Typical Tourist...</a>
										<br>
										<span class="date">May 4, 2018</span>
									</div>
								</div> <!--end 1block-->

							</div>
							
						</div><!--end sec2-bottom-->
						</div>
					</div><!--end content-sec2-->
				</div>
				<div class="col-md-4 fol">
					
						<h5 class="title-sec2">follow us</h5>
						<div class="content-sec2">
							<div class="card-body">
							<div class="icon" style="margin-top:20px;">
								
								<div class="icon-follow">
									<a href="https://www.facebook.com/kevjl.kjss" class="fab fa-facebook-f brline a-one "></a>
									<span style="font-size:10px;">facebook</span>
									
									<a href="https://www.facebook.com/kevjl.kjss" class="a-two brline">Like</a>
								</div>
								<div class="icon-follow mt-2">
									<a href="https://www.facebook.com/kevjl.kjss" class="fab fa-twitter brline a-one"></a>
									<span style="font-size:10px;">twitter</span>
									
									<a href="https://www.facebook.com/kevjl.kjss" class="a-two brline">Like</a>
								</div>
								<div class="icon-follow mt-2">
									<a href="https://www.facebook.com/kevjl.kjss" class="fab fa-github brline a-one"></a>
									<span style="font-size:10px;">github</span>
									
									<a href="https://www.facebook.com/kevjl.kjss" class="a-two brline">Like</a>
								</div>
								<div class="icon-follow mt-2">
									<a href="https://www.facebook.com/kevjl.kjss" class="fab fa-google-plus-g brline a-one"></a>
									<span style="font-size:10px;">googe plus</span>
								
									<a href="https://www.facebook.com/kevjl.kjss" class="a-two brline">Like</a>
								</div>
								
								

								
								
							</div><!--end icon icon-follow-->
							</div><!--end card-body-->
						</div><!--end content-sec2-->
													<!--page facebook-->
							
							<h5 class="title-sec2 mt-3">page</h5>
									<div class="content-sec2">
										<div class="card-body">
								<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMark-Tuan-280829202535799%2F%3Fmodal%3Dadmin_todo_tour&tabs=timeline&width=340&height=200&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="200" style="border:none;overflow:hidden;margin-top:20px;width:100%" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
								</div>
							</div><!--end card-body-->
					</div>
				</div>

		</div>
	
</section> <!--end section2-->
<section class="section3 mt-4">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				
				<h5 class="title-sec2 sec3">photography
				</h5>
				<div class="content-sec2 sec3 ">
					<div class="card-body ajax-sec2">
					<?php foreach ($arr as $value): ?>
						
					
						<div class="d-flex mt-3">
										
										<a href="<?= base_url() ?>new_controller/news_detail/<?= $value['id_new'] ?>"><img src="<?= $value['image'] ?>" alt="" width='218' height='150'></a>
														
										<div class="sec2-b-content">
												<a href="<?= base_url() ?>new_controller/news_detail/<?= $value['id_new'] ?>" class="title-sec2-bot"><?= $value['title'] ?></a>
												<br>
												<p class="time"><span class="date">by -</span><span class="tacgia"><?= $value['tacgia'] ?></span> <span class="date"><?= date('d/m/Y - G:i -A',$value['date']) ?></span></p>
												
												<p class="content-s3">
												<?= $value['description'] ?>
												</p>
										</div><!--end sec2-b-content-->
										
			
								
										
									
						</div> <!--end 1block-->
						<hr>
					<?php endforeach ?>
				
					</div>
				</div><!--end content-sec2 sec3 ajax-->
				<div class="row">
					<div class="col-sm-6">
					<ul class="pagination">

							
							 	<?php 

								
								$currentPage=0;
													
								 ?>
								
							
														<li class="page-item prev">
							<a class="page-link" data-href="<?= $currentPage-1 ?>" > <i class="fas fa-angle-left"></i> PREV</a>
														</li>
													
														<!-- <nav aria-label="" class="mt-3">
														  <ul class="pagination pagination-lg">
														  <?php  for($i=0;$i<$page;$i++){ ?>
														  		<li class="page-item"><a class="page-link" href="<?= base_url() ?>new_controller/page/<?= $i+1 ?>"><?= $i+1 ?></a></li>
														  <?php } ?>
														   
														  </ul>
														</nav> -->
													
							
														<li class="page-item next">
							<a class="page-link" data-href="<?= $currentPage+1 ?>">NEXT <i class="fas fa-angle-right"></i></a>
														</li>	
												
							 
						
						<!---->

							
						
					</ul><!--end page-->
				</div>
				<div class="col-sm-6 text-right">
					<div  class="sum-page"><?= $currentPage+1 ?> of <?= $page ?></div>
				</div>
				</div><!--end row của 2 thang sm-6-->
				
			</div><!--col-lg-8-->
			<div class="col-lg-4">
				<div class="card mb-3" >
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

				
				<div class="card content-sec2 sec3" >
					 <div class="card-header bg-white">Tin mới nhất</div>
						  <div class="card-body">
						  	<?php foreach ($tinmoi as $value): ?>
						  		
						  	
						    	<div class="d-flex mt-3">
									
									<a href="<?= base_url() ?>new_controller/news_detail/<?= $value['id_new'] ?>"><img src="<?= $value['image'] ?>" width="130" height="100" alt=""></a>
									
									<div class="sec2-b-content">
										<a href="" class="title-sec2-bot s-14"><?= $value['title'] ?></a>
										<br>
										<span class="date"><?= date('d/m/Y - G:i -A',$value['date']) ?></span>
									</div>
								</div> <!--end 1block-->
							<?php endforeach ?>
						  </div>
					</div>
				</div>
			</div><!--end col-sm-4-->

		</div><!--row-->
		
	</div>

</section>
<footer>
	<div class="container">
		<div class="row">
				<div class="col-sm-4">
					<div class="f-left">
						 <a class="navbar-brand" href="#"><img src="images/logo-footer.png"  alt=""></a>
					</div><!--end f-left-->
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
					</div><!--end f-center-->
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
					</div> <!--end f-right-->
				</div>
	</div>
</div> <!-- end container -->
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
		//next
		
		$('body').on('click', '.next a', function(event) {
			event.preventDefault();
			var page=$(this).data('href')+1;
			$.ajax({
				url:'<?= base_url() ?>new_controller/page/'+page,
				type: 'post',
				dataType: 'json',
				success:function(data)
				{
					
					createContent(data.arr,data.page);
					
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

			

			function createContent(arr,sumpage)
			{
				
				$('.ajax-sec2').empty();
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
			
					
					title=arr[index].title;
					des=arr[index].description;
					img=arr[index].image;
					tacgia=arr[index].tacgia;
		

				content="<div class='d-flex mt-3'>";
										
				 content+="<a href='<?= base_url() ?>new_controller/news_detail/"+arr[index].id_new+" ?>'><img src='"+img+"' alt='' width='218' height='150'></a>";
													
				content+="	<div class='sec2-b-content'>";		
				content+="<a href='<?= base_url() ?>new_controller/news_detail/"+arr[index].id_new+"?>' class='title-sec2-bot'>" ;
				content+=title;
				content+="</a>";
				content+="<br>"	;
					
				content+="<p class='time'><span class='date'>by -</span><span class='tacgia'>";
				content+=tacgia;
				content+="</span> <span class='date'>";
				content+=time;
				content+="</span></p>";
				content+="<p class='content-s3'>";							
				content+=des;						
				content+="</p>"	;						
				content+="</div>";
				content+="</div>";

				content+="<hr>";


							
														
			
					$('.ajax-sec2').append(content);	
									
				}
				
				if(page==sumpage)
				{
					
					content2="<li class='page-item prev'>";
					content2+="<a class='page-link' data-href='"+(page-1)+"' > <i class='fas fa-angle-left'></i> PREV</a>";
					content2+="	</li>";
					content2+="<li class='page-item next disabled'>";
				content2+="<a class='page-link' data-href='"+page+"'> NEXT <i class='fas fa-angle-right'></i></a>"
				content2+="</li>";
				
					
				

				
				}
				else
				{
					content2="<li class='page-item prev'>";
					content2+="<a class='page-link' data-href='"+(page-1)+"' > <i class='fas fa-angle-left'></i> PREV</a>";
					content2+="	</li>";
					content2+="<li class='page-item next'>";
					content2+="<a class='page-link' data-href='"+page+"'> NEXT <i class='fas fa-angle-right'></i></a>"
					content2+="</li>";
					
						
							
													
				}
			
					dem="<div  class='sum-page'>";
					dem+=page +" of "+ sumpage;
					dem+="</div>";
					
				
				$('ul.pagination').html(content2);
				$('.sum-page').html(dem);


			}
			
			
			/* Act on the event */
		});
		//prev
		$('body').on('click', '.prev a', function(event) {
			event.preventDefault();
			var page=$(this).data('href');
			
		
			$.ajax({
				url:'<?= base_url() ?>new_controller/page/'+page,
				type: 'post',
				dataType: 'json',
				success:function(data)
				{
					
					createContent(data.arr,data.page);
					
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
	
			function createContent(arr,sumpage)
			{
				
				$('.ajax-sec2').empty();
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
			
					
					title=arr[index].title;
					des=arr[index].description;
					img=arr[index].image;
					tacgia=arr[index].tacgia;
					
		

				content="<div class='d-flex mt-3'>";
										
				 content+="<a href='<?= base_url() ?>new_controller/news_detail/"+arr[index].id_new+" ?>'><img src='"+img+"' alt='' width='218' height='150'></a>";
													
				content+="	<div class='sec2-b-content'>";		
				content+="<a href='<?= base_url() ?>new_controller/news_detail/"+arr[index].id_new+" ?>' class='title-sec2-bot'>" ;
				content+=title;
				content+="</a>";
				content+="<br>"	;
					
				content+="<p class='time'><span class='date'>by -</span><span class='tacgia'>";
				content+=tacgia;
				content+="</span> <span class='date'>";
				content+=time;
				content+="</span></p>";
				content+="<p class='content-s3'>";							
				content+=des;						
				content+="</p>"	;						
				content+="</div>";	
				content+="</div>";
				content+="<hr>";


							
														
			
					$('.ajax-sec2').append(content);	
									
				}
				
				if(page==1)
				{
					console.log('ok');
					content2="<li class='page-item prev disabled'>";
					content2+="<a class='page-link' data-href='"+(page-1)+"' > <i class='fas fa-angle-left'></i> PREV</a>";
					content2+="	</li>";
					content2+="<li class='page-item next'>";
				content2+="<a class='page-link' data-href='"+page+"'> NEXT <i class='fas fa-angle-right'></i></a>"
				content2+="</li>";
				
				}
				else
				{
					content2="<li class='page-item prev'>";
					content2+="<a class='page-link' data-href='"+(page-1)+"' > <i class='fas fa-angle-left'></i> PREV</a>";
					content2+="	</li>";
					content2+="<li class='page-item next'>";
					content2+="<a class='page-link' data-href='"+page+"'> NEXT <i class='fas fa-angle-right'></i></a>"
					content2+="</li>";
						
							
													
				}
				dem="<div  class='sum-page'>";
					dem+=page +" of "+ sumpage;
					dem+="</div>";
					
				
				$('ul.pagination').html(content2);
				$('.sum-page').html(dem);

			}
			
			
			/* Act on the event */
		});

	</script>

</body>
</html>