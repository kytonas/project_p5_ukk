<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Struktural extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'id_guru', 'id_jabatan', 'sampul'];
    public $timestamp = true;

    public function deleteImage(){
        if($this->cover && file_exists(public_path('images/struktural' . $this->sampul))){
            return unlink(public_path('images/struktural' . $this->sampul));
        }
    }

    public function guru()
    {
        return $this->BelongsTo(Guru::class, 'id_guru');
    }

    public function jabatan()
    {
        return $this->BelongsTo(Jabatan::class, 'id_jabatan');
    }
} 
