<?php

namespace App\Jobs;

use Spatie\Image\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    //Abbiamo creato 4 attributi privati:
    private $w;
    private $h;
    private $fileName;
    private $path;


    //Creiamo una nuova istanza del Job ResizeImage:
    public function __construct($filepath , $w , $h)
    {
        $this->path = dirname($filepath);
        $this->fileName = basename($filepath);
        $this->w = $w;
        $this->h = $h;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $w = $this->w;
        $h = $this->h;
        //Nella variabile srcPath applichiamo la funzione storage_path che ci permette di storare un percorso specifico. In questo andiamo a storare /app/public + directory + nomefile;
        $srcPath = storage_path() . '/app/public/' . $this->path . '/' . $this->fileName;
        //Nella seconda Directory $destPath andiamo a salvare l'immagine cropatta su determinate dimensioni con il suo nome;
        $destPath = storage_path() . '/app/public/' . $this->path . "/crop_{$w}x{$h}_" . $this->fileName;
        //Nella croppedImage andiamo salvare la manipolazione dell'immagine che vogliamo richiamare;
        $croppedImage = Image::load($srcPath)
                        ->crop(Manipulations::CROP_CENTER , $w , $h)
                        ->watermark(base_path('resources/img/watermark.png'))->watermarkOpacity(50)->watermarkHeight(50, Manipulations::UNIT_PIXELS)
                        ->watermarkWidth(50, Manipulations::UNIT_PIXELS)
                        ->save($destPath);
    }
}
