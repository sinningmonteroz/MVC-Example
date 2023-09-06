<?php
class asignaturas
{
	private $pdo;
    
    public $id;
    public $nombre;
    public $creditos;  
    public $creador;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT asignaturas.id, asignaturas.nombre, horas_semestre.creditos FROM asignaturas INNER JOIN horas_semestre ON asignaturas.creditos = horas_semestre.id ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ListarCreditos()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM horas_semestre");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM asignaturas WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM asignaturas WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE asignaturas SET 
						nombre          = ?, 
						creditos       = ?,
                        creador        = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre,                        
                        $data->creditos,
                        $data->creador,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(asignaturas $data)
	{
		try 
		{
		$sql = "INSERT INTO asignaturas (nombre,creditos,creador) 
		        VALUES (?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                        $data->nombre,                        
                        $data->creditos,
                        $data->creador
                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}