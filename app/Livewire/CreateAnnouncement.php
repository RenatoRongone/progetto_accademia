<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class CreateAnnouncement extends Component
{
    use WithFileUploads;

    public $title;
    public $price;
    public $description;
    public $user_id;
    public $temporary_images;
    public $images=[];
    public $category;
    public $announcement;
    public $image;

    protected $rules=[
        'title' => 'required|min:5|max:15',
        'price'=>'required',
        'description'=>'required|max:500',
        'category'=>'required',
        'temporary_images.*'=>'image|required|max:5000|dimensions:min_width=1024,min_height=800',
        'images.*'=>'image|required|max:5000|dimensions:min_width=1024,min_height=800',

    ];

    protected $messages=[
        'title.required'=>'Inserisci Titolo',
        'title.min'=>'Il Titolo deve contenere un minimo di 5 Caratteri',
        'title.max'=>'Il Titolo può contenere un massimo di 15 caratteri',
        'price.required'=>'Inserisci il Prezzo',
        'description.required'=>'Inserisci Descrizione',
        'description.max'=>'La Descrizione deve contenere un numero massimo di 500 Caratteri',
        'category.required'=>'Seleziona una Categoria',
        'temporary_images.*.request'=>'Inserisci una Immagine',
        'temporary_images.*.images*'=>'I file da inserire devono essere immagini',
        'temporary_images.*.max'=>'I file immagine non devono essere superare i 5MB',
        'temporary_images.*.dimensions'=>'Le immagini devono avere una risoluzione minima di: 1024x800',
        'images.request'=>'Inserisci una Immagine',
        'images.images*'=>'I file da inserire devono essere immagini',
        'images.max'=>'I file immagine non devono essere superare i 5MB',
        'images.dimensions'=>'Le immagini devono avere una risoluzione minima di: 1024x800' 
    ];

    public function updated($property){
        $this->validateOnly($property);
    }

    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*'=>'image|required|max:5000|dimensions:min_width=1024,min_height=800',
        ])){
            foreach($this->temporary_images as $image){
                $this->images[]= $image;
            }
        }
    }

    public function removeImage($key){

        if(in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }


    public function store(){
        $this->validate();
        //->announcements()->create($this->validate());

        $announcement = Category::find($this->category)->announcements()->create([
            'title'=>$this->title,
            'price'=>$this->price,
            'description'=>$this->description,
            'user_id'=> Auth::user()->id,
        ]);
        if(count($this->images)){
            foreach($this->images as $image){
                $this->announcement->images()->create(['path'=>$image->store('public/photo/img')]);
            }
        }
        $announcement->user()->associate(Auth::user());
        $announcement->save();
        $this->reset();
        return redirect(route('welcome'))->with('message' ,'Annuncio pubblicato correttamente' );
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
