<?php

namespace App\Models;

use CodeIgniter\Model;

class MascotasModelo extends Model {
    protected $table = 'animales';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'edad','foto','descripcion','tipo'];
}