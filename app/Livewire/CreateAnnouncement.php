<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CreateAnnouncement extends Component
{
    
    public $title;
    public $price;
    public $description;
    /* public $img; */
    public $category;
    
    protected $rules=[
        'title' => 'required|min:5',
        'price'=>'required',
        'description'=>'required|max:500',
        'category'=>'required'
    ];
    
    protected $messages=[
        'title.required'=>'Inserisci Titolo',
        'title.min'=>'Il Titolo deve essere di almeno 5 Caratteri',
        'description.requred'=>'Inserisci Descrizione',
        'description.max'=>'La Descrizione deve contenere un numero massimo di 500 Caratteri',
        'category.required'=>'Seleziona una Categoria'
    ];
    
    public function updated($property){
        $this->validateOnly($property);
    }
    
    public function store(){
        $category = Category::find($this->category);
        $announcement = $category->announcements()->create([
            'title'=>$this->title,
            'price'=>$this->price,
            'description'=>$this->description,
        ]);
        
        Auth::user()->announcements()->save($announcement);
        session()->flash('message', 'Annuncio pubblicato correttamente');
        $this->reset();
        
    }
    
    public function render()
    {
        return view('livewire.create-announcement');
    }
}
