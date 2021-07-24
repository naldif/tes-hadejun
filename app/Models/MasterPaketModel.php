<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterPaketModel extends Model
{
    use HasFactory;

    protected $table = 'master_paket';
    protected $primaryKey = 'id_master_paket';
    protected $guarded = [];
}
