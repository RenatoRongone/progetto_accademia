<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcement extends Model
{
    use HasFactory;
    use Searchable;

    // public $asYouType = true;
    protected $fillable = [
        'is_accepted',
        'title',
        'price',
        'description',
        'user_id',
        'category_id',
    ];

    
    public function toSearchableArray()
    {
        $category=$this->category;
        $array = [
            'title'=>$this->title,
            'price'=>$this->price,
            'description'=>$this->description,
            'category'=>$category->name,
            'id'=>$this->id,
        ];

        return $array;
    }




    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function setAccepted($value){
        $this->update([
            'is_accepted'=> $value,
        ]);
        return true;
    }

    public static function toBeRevisionedCount(){
        return Announcement::where('is_accepted', null)->count();
    }


    public function images(){
        return $this->hasMany(Image::class);
    }
}
