<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    //
    protected $fillable = [
      'title',
      'contents',
      'published_at'
    ];
    //將published_at轉成Carbon Object
    protected $dates = ['published_at'];
    //簡化ArticlesController
    public function scopePublished($query)
    {
        $query->where('published_at','<=',Carbon::now());
    }
    public function scopeUnPublished($query)
    {
        $query->where('published_at','>',Carbon::now());
    }
    //命名規則set欄位Attribute
    public function setPublishedAtAttribute($date)
    {
        //datetime
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
        //date
        //$this->attributes['published_at'] = Carbon::parse($date);
    }
}
