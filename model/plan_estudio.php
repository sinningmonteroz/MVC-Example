<?php
class plan_estudio
{
	private $pdo;
    
    public $id;
    public $id_asignatura;
    public $id_docente;      
    public $jornada;
	public $programa1;
	public $programa2;
	public $hrs_semestral; 
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

			$stm = $this->pdo->prepare("SELECT plan_estudio.id, asignaturas.nombre, usuarios.nombres, usuarios.apellidos, jornada, programa1, programa2 FROM plan_estudio INNER JOIN asignaturas ON plan_estudio.id_asignatura = asignaturas.id INNER JOIN usuarios ON plan_estudio.id_docente = usuarios.id INNER JOIN programas ON plan_estudio.programa1 = programas.id WHERE plan_estudio.creador = 1");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ListarAsignaturas()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM asignaturas");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ListarDocentes()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM usuarios where id_cargo = 2 or id_cargo = 4");
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
			          ->prepare("SELECT * FROM plan_estudio WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function ObtenerDocente($id)
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

	public function ObtenerPrograma($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM programas WHERE id = ?");
			          

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
			            ->prepare("DELETE FROM programas WHERE id = ?");			          

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
			$sql = "UPDATE plan_estudio SET 
						id_asignatura          = ?, 
						id_docente        = ?,
                        jornada        = ?,
                        programa1        = ?,
						programa2		= ?,
						hrs_semestral		= ?,
						creador		= ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->id_asignatura,                        
                        $data->id_docente,
                        $data->jornada,
						$data->programa1, 
						$data->programa2, 
						$data->hrs_semestral, 
						$data->creador, 
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(plan_estudio $data)
	{
		try 
		{
		$sql = "INSERT INTO plan_estudio (id_asignatura,id_docente,jornada,programa1,programa2,hrs_semestral,creador) 
		        VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->id_asignatura,                        
                        $data->id_docente,
                        $data->jornada,
						$data->programa1, 
						$data->programa2, 
						$data->hrs_semestral, 
						$data->creador
                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}