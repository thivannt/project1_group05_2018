<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  new_controller extends CI_Controller {

	private $limit_news;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('New_model');
		$this->limit_news=5;

		
	}
	
	
	public function index()
	{

		$result=$this->New_model->showNews($this->limit_news);
		
		$page=$this->New_model->calPage($this->limit_news); // tính số trang
		$category=$this->New_model->GetDanhMuc();
		$tinmoi=$this->New_model->laytinmoi();
		
		
		
		$result=array('arr'=>$result,'page'=>$page,'category'=>$category,'tinmoi'=>$tinmoi);
		
		$this->load->view('frontend/index', $result, FALSE);
	}
	public function search()
	{
		$keyword=$this->input->get('keyword');
		$search=$this->New_model->Search($keyword);
		$tinmoi=$this->New_model->laytinmoi();
		$category=$this->New_model->GetDanhMuc();
		$search=array('result'=>$search,'category'=>$category,'tinmoi'=>$tinmoi);

		$this->load->view('frontend/search', $search, FALSE);
	}


	//pagination
	public function page($currentPage)
	{
			
			$offset=($currentPage-1)*$this->limit_news;	//trang hiển thị bắt đầu từ vị trí
			$result=$this->New_model->loadNewsOfPage($this->limit_news,$offset); // hiển thị
			$page=$this->New_model->calPage($this->limit_news); // tính số trang

			$result=array('arr'=>$result,'page'=>$page);
			echo json_encode($result);
			
			//$this->load->view('frontend/index', $result, FALSE);
	}

	//gửi dữ liệu tới model
	public function InsertData()
	{
		
		$ten=$this->input->post('ten');
		
		echo json_encode($this->New_model->Insert($ten));
		
	}
	//lấy dữ liệu từ model truyền xuống view
	public function GetData()
	{
		$result=$this->New_model->GetDanhMuc();

		$result=array('array_result'=>$result);
		
		$this->load->view('Category_view', $result, FALSE);
	}
	//lấy Id từ view truyền tới model
	public function GetId($id)
	{
		$data=$this->New_model->getDataById($id);
		$data=array('data_result'=>$data);

	}
	public function updateById()
	{
			$id=$this->input->post('id');
			$name=$this->input->post('ten');
		$this->New_model->Update($id,$name);
	}
	public function Delete($id)
	{
		if($this->New_model->DeleteById($id))
		{
			echo 'success';
		}
		else

		{
			echo 'lsoer';
		}

	}


//load danh mục vào tin
	public function newManagement()
	{		$result=$this->New_model->GetDanhMuc();
			$result2=$this->New_model->getNews();
				
		
			$arr=array('array_result'=>$result,'listNews'=>$result2);
			$this->load->view('new_view',$arr, FALSE);
	}
	//thêm tin
	public function addNews()
	{
		//xử lý upload file
	
					$target_dir = "uploads/";
					$target_file = $target_dir . basename($_FILES["image"]["name"]);
					$uploadOk = 1;
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					// Check if image file is a actual image or fake image
					if(isset($_POST["submit"])) {
					    $check = getimagesize($_FILES["image"]["tmp_name"]);
					    if($check !== false) {
					        echo "File is an image - " . $check["mime"] . ".";
					        $uploadOk = 1;
					    } else {
					        echo "File is not an image.";
					        $uploadOk = 0;
					    }
					}
					// Check if file already exists
					if (file_exists($target_file)) {
					   // echo "Sorry, file already exists.";
					    $uploadOk = 0;
					}
					// Check file size
					if ($_FILES["image"]["size"] > 500000) {
					    echo "Sorry, your file is too large.";
					    $uploadOk = 0;
					}
					// Allow certain file formats
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) {
					    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
					    $uploadOk = 0;
					}
					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk == 0) {
					   // echo "Sorry, your file was not uploaded.";
					// if everything is ok, try to upload file
					} else {
					    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
					        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
					    } else {
					        echo "Sorry, there was an error uploading your file.";
					    }
					}

//end upload file
		$img=base_url()."uploads/".basename( $_FILES["image"]["name"]);
		$title=$this->input->post('title');
		$id_category=$this->input->post('category');
		$content=$this->input->post('content');
		$desc=$this->input->post('desc');
		$tacgia=$this->input->post('tacgia');
		if($this->New_model->insertNews($title,$id_category,$content,$img,$desc,$tacgia))
		{
			$this->load->view('success');
		}
		else
		{
			$this->load->view('erorr');
		}


	}
	//update new
	public function deleteNews($id)
	{
		if($this->New_model->deleteNew($id))
		{
			$this->load->view('success');
		}
		else

		{
			$this->load->view('erorr');
		}
	}
	//get DatabyID
	public function editNews($id)
	{
		$result=$this->New_model->getElementById($id);
		$category=$this->New_model->GetDanhMuc();

		$arr=array('arrayEdit'=>$result,'arrayCategory'=>$category);
		$this->load->view('EditTinTuc', $arr, FALSE);
	}
	public function updateTintuc()
	{
		$old_image=$this->input->post('old-img');
		
		$img= $_FILES["image"]["name"];
	
		if(empty($img))
		{
			$img=$old_image;
			
		}
		else
		{
			//xử lý upload file
	
					$target_dir = "uploads/";
					$target_file = $target_dir . basename($_FILES["image"]["name"]);
					$uploadOk = 1;
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					// Check if image file is a actual image or fake image
					if(isset($_POST["submit"])) {
					    $check = getimagesize($_FILES["image"]["tmp_name"]);
					    if($check !== false) {
					        echo "File is an image - " . $check["mime"] . ".";
					        $uploadOk = 1;
					    } else {
					        echo "File is not an image.";
					        $uploadOk = 0;
					    }
					}
					// Check if file already exists
					if (file_exists($target_file)) {
					  //  echo "Sorry, file already exists.";
					    $uploadOk = 0;
					}
					// Check file size
					if ($_FILES["image"]["size"] > 500000) {
					    echo "Sorry, your file is too large.";
					    $uploadOk = 0;
					}
					// Allow certain file formats
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) {
					   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
					    $uploadOk = 0;
					}
					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk == 0) {
					   //echo "Sorry, your file was not uploaded.";
					// if everything is ok, try to upload file
					} else {
					    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
					        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
					    } else {
					        echo "Sorry, there was an error uploading your file.";
					    }
					}

//end upload file
		$img=base_url()."uploads/".basename( $_FILES["image"]["name"]);
			//
		}
		
		
		$id=$this->input->post('id');
		
		$title=$this->input->post('title');
		$id_category=$this->input->post('category');
		$content=$this->input->post('content');
		$desc=$this->input->post('desc');
		$tacgia=$this->input->post('tacgia');
		if($this->New_model->updateTin($id,$img,$title,$id_category,$content,$desc,$tacgia))
		{
			$this->load->view('success');
		}
		else
		{
			$this->load->view('erorr');
		}
	}
//lay noi dung chi tiet tin
	public function news_detail($id_new)

	{	
		$result=$this->New_model->getElementById($id_new);
		
		
		$tinlienquan=$this->New_model->laytinlienquan($result[0]['id_danhmuc'],$id_new);
		
		$tinmoi=$this->New_model->laytinmoi();

		$arr=$this->New_model->getDataFromTwoTableById($id_new);
		$category=$this->New_model->GetDanhMuc();
		$this->load->model('UserComment');
		$comment=$this->UserComment->getComment($id_new);
		$arr=array('result'=>$arr,'category'=>$category,'arr'=>$comment,'tinmoi'=>$tinmoi,'tinlienquan'=>$tinlienquan);
		$this->load->view('frontend/news_detail', $arr, FALSE);
	}
//lấy nội dung tin thuộc danh mục tương ứng
	public function tagdiv_category($id)
	{
		$tinmoi=$this->New_model->laytinmoi();
		$arr=$this->New_model->getNewsfromCategory($id);
		$category=$this->New_model->GetDanhMuc();
		$arr=array('result'=>$arr,'category'=>$category,'tinmoi'=>$tinmoi);
		$this->load->view('frontend/tagdiv_category', $arr, FALSE);

	}
	


	

}

/* End of file new_controller.php */
/* Location: ./application/controllers/new_controller.php */