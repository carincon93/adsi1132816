<?php  

	class Controller {
		public $load;
		public $model;

		public function __construct(){
			$this->load  = new Load();
			$this->model = new Model();
			
			if ($_GET) {
				if($_GET['q'] == 'select'){
					$this->showUsers();
				}
				if($_GET['q'] == 'list'){
					$id = $_GET['id'];
					$this->showUser($id);
				}

				if($_GET['q'] == 'edit'){
					$id = $_GET['id'];
					$this->edit($id);
				}

				if($_GET['q'] == 'add'){
					$this->add();
				}
				
				if($_GET['q'] == 'delete' ){
					$id = $_GET['id'];
					$this->deleteUser($id);
				}
			} else {
				$this->welcome();
			}
		}

	
		public function welcome(){
			$dataUsers = $this->model->getUsers();
			$this->load->view('welcome.php', $dataUsers);
		}
		public function showUser($id){
			$dataUsers = $this->model->getUser($id);
			$this->load->view('list.php', $dataUsers);
		}
		public function showUsers(){
			$dataUsers = $this->model->getUsers();
			$this->load->view('list.php', $dataUsers);
		}

		public function edit($id){
			$dataUsers = $this->model->getUser($id);
			$this->load->view('edit.php', $dataUsers);
			if ($_POST) {
				$id 		= $_POST['id'];
				$documento 	= $_POST['documento'];
				$nombres 	= $_POST['nombres'];
				$telefono 	= $_POST['telefono'];
				$direccion 	= $_POST['direccion'];
				$ciudad 	= $_POST['ciudad'];
				$correo 	= $_POST['correo'];
				$contrasena = $_POST['contrasena'];
				$this->model->editUser($documento, $nombres, $telefono, $direccion, $ciudad, $correo, $contrasena, $id);
			}
		}

		public function add(){
			$this->load->view('add.php');
			if($_POST) {
				$documento 	= $_POST['documento'];
				$nombres 	= $_POST['nombres'];
				$telefono 	= $_POST['telefono'];
				$direccion 	= $_POST['direccion'];
				$ciudad 	= $_POST['ciudad'];
				$correo 	= $_POST['correo'];
				$contrasena = $_POST['contrasena'];
				$this->model->addUser($documento, $nombres, $telefono, $direccion, $ciudad, $correo, $contrasena);
			}
		}
		
		public function deleteUser($id){
			$dataUser = $this->model->deleUser($id);
			$dataUsers = $this->model->getUsers();
			$this->load->view('welcome.php', $dataUsers);
		}
	}