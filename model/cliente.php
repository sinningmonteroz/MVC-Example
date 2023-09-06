<?php
class cliente
{
	private $pdo;
    
    public $id;
    public $nombres;
    public $apellidos;  
    public $facultad;
	public $perfil_docente;
	public $tipo_contrato;
	public $id_cargo; 
	public $identidad;

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

			$stm = $this->pdo->prepare("SELECT usuarios.id, nombres, apellidos, facultades.facultad, perfil_docente, contrato, cargo, identidad FROM usuarios INNER JOIN facultades ON usuarios.facultad = facultades.id INNER JOIN tipo_contrato ON usuarios.tipo_contrato = tipo_contrato.id INNER JOIN cargos ON usuarios.id_cargo = cargos.id  ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ListarFacultad()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM facultades");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ListarContrato()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tipo_contrato");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ListarCargo()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM cargos");
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
			          ->prepare("SELECT * FROM usuarios WHERE id = ?");
			          

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
			            ->prepare("DELETE FROM usuarios WHERE id = ?");			          

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
			$sql = "UPDATE usuarios SET 
						nombres          = ?, 
						apellidos        = ?,
                        facultad        = ?,
                        perfil_docente        = ?,
						tipo_contrato		= ?,
						id_cargo		= ?,
						identidad		= ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombres,                        
                        $data->apellidos,
                        $data->facultad,
						$data->perfil_docente, 
						$data->tipo_contrato, 
						$data->id_cargo, 
						$data->identidad, 
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(cliente $data)
	{
		try 
		{
		$sql = "INSERT INTO usuarios (nombres,apellidos,facultad,perfil_docente,tipo_contrato,id_cargo,identidad) 
		        VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombres,                        
                        $data->apellidos,
                        $data->facultad,
						$data->perfil_docente, 
						$data->tipo_contrato, 
						$data->id_cargo, 
						$data->identidad
                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}