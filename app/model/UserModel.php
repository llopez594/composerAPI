<?php
namespace App\Model;

use App\lib\Database;

class UserModel
{
    private $db = null;
    private $table = 'alumno';

    public function __CONSTRUCT()
    {
        $this->db = DataBase::StartUp();
    }

    public function obtener($id)
    {
        return $this->db
                    ->from($this->table, $id)
                    ->select('alumno.*, carrera.Nombre as Carrera')
                    ->fetch();
    }

    public function listar()
    {
        return $this->db
                    ->from($this->table)
                    ->fetchAll();
    }

    public function actualizar($data)
    {
        $id = $data['id'];
        unset($data['id']);

        $this->db
            ->update($this->table, $data, $id)
            ->execute();
    }

    public function registrar($data)
    {
        $data['FechaRegistro'] = date('y-m-d');

        $this->db
             ->insertInto($this->table, $data)
             ->execute();
    }

    public function eliminar($id)
    {
        $this->db
            ->deleteFrom($this->table, $id)
            ->execute();
    }
}