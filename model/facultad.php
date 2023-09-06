<?php
class facultad
{
	private $pdo;
    
    public $id;
    public $facultad;
    public $etiqueta;  
    public $color;

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

			$stm = $this->pdo->prepare("SELECT facultades.id, facultad, facultades.etiqueta, colores.etiqueta_color FROM facultades INNER JOIN colores ON facultades.color = colores.id ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ListarColores()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM colores");
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
			          ->prepare("SELECT * FROM facultades WHERE id = ?");
			          

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
			            ->prepare("DELETE FROM facultades WHERE id = ?");			          

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
			$sql = "UPDATE facultades SET 
						facultad          = ?, 
						etiqueta        = ?,
                        color       = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(                        
                        $data->facultad,
                        $data->etiqueta,
						$data->color,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(facultad $data)
	{
		try 
		{
		$sql = "INSERT INTO facultades (id,facultad,etiqueta,color) 
		        VALUES (?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->id,
                    $data->facultad,                        
                    $data->etiqueta,
					$data->color
                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}