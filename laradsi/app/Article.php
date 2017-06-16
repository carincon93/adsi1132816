<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    protected $fillable = [
        'name', 'image', 'content', 'catergory_id',
    ];

    public function category() {
    	return $this->belongsTo('App\Category');
    }
    public function getCreatedAtAttribute($date)
    {
    	Carbon::setLocale('es');
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->diffForHumans();
    }

    public function scopeName($query, $name)
    {
        if (trim($name) != '') {
            $query->where('name', 'LIKE', "%$name%"); 
        }
    }

}
