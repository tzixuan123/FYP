<?php
session_start();
Class Action {
	private $db;

	public function __construct() {
   	include '../db_connect.php';
    
    $this->db = $conn;
	}
	function __destruct() {
	    $this->db->close();
	}

	
	
	function save_category(){
		extract($_POST);
		if(empty($id)){
			$chk = $this->db->query("SELECT * from category where name ='".$name."' ")->num_rows;
			if($chk > 0){
				return json_encode(array('status'=>2,'msg'=>'Category already exist'));
			}else{
				$save = $this->db->query("INSERT INTO category set name='".$name."' , description ='".$description."' ");
				if($save)
					return json_encode(array('status'=>1));
			}
		}else{
			$chk = $this->db->query("SELECT * from category where name ='".$name."' and id !='".$id."' ")->num_rows;
			if($chk > 0){
				return json_encode(array('status'=>2,'msg'=>'Category already exist'));
			}else{
				$save = $this->db->query("UPDATE category set name='".$name."' , description ='".$description."' where id=".$id);
				if($save)
					return json_encode(array('status'=>1));
			}
		}
	}

	function load_category(){
		$qry = $this->db->query("SELECT * from category where status = 1");
		$data = array();
		while($row=$qry->fetch_assoc()){
			$data[] = $row;
		}
		echo json_encode($data);
	}
	function load_post(){
			$qry = $this->db->query("SELECT p.*,c.name as category from posts p inner join category c on c.id = p.category_id ");
			$data = array();
			while($row=$qry->fetch_assoc()){
				$data[] = $row;
			}
			echo json_encode($data);
		}
	function remove_category(){
		extract($_POST);
		$remove = $this->db->query("UPDATE category set status = 0 where id =".$id);
		if($remove)
			return 1;
	}
	function publish_post(){
		extract($_POST);
		$publish = $this->db->query("UPDATE posts set status = 1 where id =".$id);
		if($publish)
			return 1;
	}

	
	function remove_post(){
		extract($_POST);
		$remove = $this->db->query("DELETE FROM post where id =".$id);
		if($remove)
			return 1;
	}
	
	
	

	
	function save_post(){
		extract($_POST);
		$data = " title = '".$name."' ";
		$data .= ", post = '".htmlentities(str_replace("'","&#x2019;",$post))."' ";
		$data .= ", category_id = '".$category_id."' ";
		if($_FILES['img']['tmp_name'] != ''){
			$fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['img']['name'];
			$move = move_uploaded_file($_FILES['img']['tmp_name'],'../assets/img/'. $fname);
			$data .= ", img_path = '".$fname."' ";

		}
		if(empty($id)){
			$insert  = $this->db->query("INSERT INTO posts set".$data);
			if($insert){
				return json_encode(array('status'=>1,'id'=>$this->db->insert_id));
			}
		}else{
			$update  = $this->db->query("UPDATE posts set".$data." , date_published='".date('Y-m-d H:i')."' where id=".$id);
			if($update){
				return json_encode(array('status'=>1,'id'=>$id));
			}
		}
		
	}
}