<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Page extends Model implements TranslatableContract
{
    use Translatable; // 2. To add translation methods

    // 3. To define which attributes needs to be translated
    public $translatedAttributes = ['page_title', 'page_intro', 'section_title', 'content', 'button_text', 'button_link'];
}
