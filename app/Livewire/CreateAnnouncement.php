<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateAnnouncement extends Component
{
    
    //Tratto che ci permette di caricare dei file, ricordarsi di importarlo.
    use WithFileUploads;
    
    //Inizializzazione di attributi pubblici.
    public $title;
    public $price;
    public $description;
    public $user_id;
    public $temporary_images;
    public $images=[];
    public $category;
    public $announcement;
    public $image;
    
    //Regole dei nostri attributi pubblici.
    protected $rules=[
        'title' => 'required|min:5|max:15',
        'price'=>'required',
        'description'=>'required|max:500',
        'category'=>'required',
        'temporary_images.*'=>'image|required|max:5000|dimensions:min_width=800,min_height=800',
        'images.*'=>'image|required|max:5000|dimensions:min_width=800,min_height=800',
    ];
    
    //Messaggi degli errori per le validazioni.
    protected $messages=[
        'title.required'=>'Inserisci Titolo',
        'title.min'=>'Il Titolo deve contenere un minimo di 5 Caratteri',
        'title.max'=>'Il Titolo può contenere un massimo di 15 caratteri',
        'price.required'=>'Inserisci il Prezzo',
        'description.required'=>'Inserisci Descrizione',
        'description.max'=>'La Descrizione deve contenere un numero massimo di 500 Caratteri',
        'category.required'=>'Seleziona una Categoria',
        'temporary_images.*.request'=>"Inserisci un'immagine",
        'temporary_images.*.images*'=>'I file da inserire devono essere immagini',
        'temporary_images.*.max'=>'I file immagine non devono essere superare i 5MB',
        'temporary_images.*.dimensions'=>'Le immagini devono avere una risoluzione minima di: 800x800',
        'images.request'=>"Inserisci un' Immagine",
        'images.images*'=>'I file da inserire devono essere immagini',
        'images.max'=>'I file immagine non devono essere superare i 5MB',
        'images.dimensions'=>'Le immagini devono avere una risoluzione minima di: 800x800'
    ];
    
    //Funzione delle validazioni Live.
    public function updated($property){
        $this->validateOnly($property);
    }
    
    //Funzione che ci inserisce un immagine nell'array image se $this->validate della temporary images è true.
    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*'=>'image|required|max:5000|dimensions:min_width=800,min_height=800',
            ])){
                foreach($this->temporary_images as $image){
                    $this->images[]= $image;
                }
            }
        }
        
        //Funzione per rimuovere l'immagine da richiamare nel bottone "Elimina"
        public function removeImage($key){
            
            if(in_array($key, array_keys($this->images))){
                unset($this->images[$key]);
            }
        }
        
        
        //Funzione delle store dell'annuncio
        public function store(){
            //Dopo aver superato le validazioni:
            $this->validate();
            
            //Entriamo nella categoria dell'annuncia che stiamo creando, entriamo nel suo annuncio e creiamo:
            $announcement = Category::find($this->category)->announcements()->create([
                'title'=>$this->title,
                'price'=>$this->price,
                'description'=>$this->description,
                'user_id'=> Auth::user()->id,
            ]);
            //Se sono presenti immagini nel form:
                if(count($this->images)){
                    //Per ogni immagine dell'array images:
                    foreach($this->images as $image){
                        //Storiamo all'interno di Storage, Public una nuova cartella che è la varibaile $newFileName che corrisponde ad una cartella announcements che contiene una cartella nominata "id_titolo articolo";
                        $newFileName = "announcements/{$announcement->id}_{$announcement->title}";
                        $newImage = $announcement->images()->create(['path'=>$image->store($newFileName , 'public')]);
                        
                        dispatch(new ResizeImage($newImage->path , 327 , 327));
                    }
                    File::deleteDirectory(storage_path('/app/livewire-tmp'));
                }
                //Associamo User a Auth::user e salviamo:
                $announcement->user()->associate(Auth::user());
                $announcement->save();
                $this->reset();
                return redirect(route('welcome'))
                ->with('message' , __('ui.message-success'));
            }
            
            public function render()
            {
                return view('livewire.create-announcement');
            }
        }
        