<?php

namespace App\Models;

use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    protected $fillable=[
        'path',
    ];

    public function announcement(){
        return $this->belongsTo(Announcement::class);
    }

    //getUrlByFilePath è una funzione statica richiamabile nelle viste, la funzione dovrà accettare come parametri REALI un filepath, un'altezza e una larghezza in quanto loro di default avranno null.
    public static function getUrlByFilePath($filePath , $w = null , $h = null){
        //Se la larghezza e l'altezza sono diverse da Null allora storage::url il filePath (percorso)
        if (!$w && !$h ){
            return Storage::Url($filePath);
        }
        //Path è il nome della percorso (directory) del FILE;
        $path = dirname($filePath);
        //filename è il nome della cartella del file;
        $fileName = basename($filePath);
        //il File è il suo percorso croppato "http://picsum.photo/crop{300}x{200}_{01_mercedesBenz}
        $file = "{$path}/crop_{$w}x{$h}_{$fileName}";
        //Il return renderà disponibile "http://picsum.photo/crop{300}x{200}_{01_mercedesBenz}
        return Storage::url($file);
    }

    //La funzione pubblica getUrl return il Metodo GetUrlByFilePath in questa funzione stessa.
    public function getUrl($w = null , $h = null){
        return Image::getUrlByFilePath($this->path , $w , $h);
    }
}
