<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_eskul', 'isi', 'sampul'];
    public $timestamp = true;

     //menghapus image
    public function deleteImage(){
        if($this->cover && file_exists(public_path('images/eskul' . $this->sampul))){
            return unlink(public_path('images/eskul' . $this->sampul));
        }
    }
}
