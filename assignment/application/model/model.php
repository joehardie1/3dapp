<?php
class Model {
	public $dbhandle;
	
	public function __construct()
	{
		$dsn = 'sqlite:./db/drinks.db';
		
		try {	
			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    													PDO::ATTR_EMULATE_PREPARES => false,
														));
		}
		catch (PDOEXception $e) {
			echo "Can't connect to the database!";
        	print new Exception($e->getMessage());
    	}
	}
	
	public function dbGetBrand()
	{
		return array("-", "Coke", "Oasis", "Fanta");
	}

	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, brand TEXT, x3dModelTitle TEXT, x3dCreationMethod TEXT, modelDescription TEXT, modelLocation TEXT)");
			return "Model_3D table is successfully created inside drinks.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	
	public function dbInsertData()
	{
		try{
			$this->dbhandle->exec(
			"INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelDescription, modelLocation) 
				VALUES (1, 'Coke', 'X3D Coke Model', 
				'The Coca Cola glass bottle model was created in 3ds max and converted to X3D to display in the web app. The label graphics are from https://www.deviantart.com/summergal7/art/A-Coca-Cola-Label-182693571', 
				'Coca Cola Original Taste is the worlds favourite soft drink and has been enjoyed since 1886. You can find Coca Cola Original Taste in a variety of sizes to suit every lifestyle and occasion.',
				'../assets/x3d/coke.x3d'); " .
			"INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelDescription, modelLocation) 
				VALUES (2, 'Oasis', 'X3D Oasis Model', 
				'The Oasis bottle model was created in 3ds max and converted to X3D to display in the web app. The bottle graphics were created myself.', 
				'Oasis is a great tasting refreshing still drink made across seven delicious flavours.',
				'../assets/x3d/oasis.x3d'); " .
			"INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelDescription, modelLocation) 
				VALUES (3, 'Fanta', 'X3D Fanta Model', 
				'The Fanta can model was created in 3ds max and converted to X3D to display in the web app. The can label graphic was from: https://www.artstation.com/artwork/VdlZ64', 
				'Bright, bubbly, instantly refreshing and great tasting. Fanta Orange is made with 100% natural flavours, fruit juice and is caffeine free.',
				'../assets/x3d/fanta.x3d'); ");
			return "X3D model data inserted successfully inside drinks.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbGetData(){
		try{
			$sql = 'SELECT * FROM Model_3D';
			$stmt = $this->dbhandle->query($sql);
			$result = null;
			$i=-0;
			while ($data = $stmt->fetch()) {
				$result[$i]['brand'] = $data['brand'];
				$result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
				$result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
				$result[$i]['modelDescription'] = $data['modelDescription'];
				$result[$i]['modelLocation'] = $data['modelLocation'];
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
		return $result;
	}
	
	public function model3D_info()
	{
		return array(
			'model_1' => 'Coke Can 3D Image 1',
			'image3D_1' => 'coke_1',

			'model_2' => 'Coke Can 3D Image 2',
			'image3D_2' => 'coke_2',
		);
	}
}
?>