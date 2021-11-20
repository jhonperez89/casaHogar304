<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductoModelo extends Model {
    protected $table = 'productos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'foto','precio','descripcion','seleccion'];
}