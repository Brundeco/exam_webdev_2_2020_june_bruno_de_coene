<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class PageTranslation extends Model
{
   protected $fillable = ['title', 'full_text'];
   public $timestamps = false;
}