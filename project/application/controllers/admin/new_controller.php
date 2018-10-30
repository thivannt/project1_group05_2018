<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  new_controller extends CI_Controller {

	private $limit_news;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('New_model');
		$this->limit_news=20;

		
	}
	
	
	public function index()
	{

		
	}
	


	//gửi dữ liệu tới model
	public function InsertData()
	{
		
		$ten=$this->input->post('ten');
		$order=$this->input->post('order');
		echo json_encode($this->New_model->Insert($ten,$order));
		
	}
	//lấy dữ liệu từ model truyền xuống view
	public function GetData()
	{
		$result=$this->New_model->GetDanhMuc();

		$result=array('array_result'=>$result);
		
		$this->load->view('admin/Category_view', $result, FALSE);
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
			$this->load->view('admin/new_view',$arr, FALSE);
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
			$this->load->view('admin/success');
		}
		else
		{
			$this->load->view('admin/erorr');
		}


	}
	//update new
	public function deleteNews($id)
	{
		if($this->New_model->deleteNew($id))
		{
			$this->load->view('admin/success');
		}
		else

		{
			$this->load->view('admin/erorr');
		}
	}
	//get DatabyID
	public function editNews($id)
	{
		$result=$this->New_model->getElementById($id);
		$category=$this->New_model->GetDanhMuc();

		$arr=array('arrayEdit'=>$result,'arrayCategory'=>$category);
		$this->load->view('admin/EditTinTuc', $arr, FALSE);
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
			$this->load->view('admin/success');
		}
		else
		{
			$this->load->view('admin/erorr');
		}
	}

	


	

}

/* End of file new_controller.php */
/* Location: ./application/controllers/new_controller.php */