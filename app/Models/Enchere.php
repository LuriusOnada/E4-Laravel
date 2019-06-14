<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enchere extends Model
{
    protected $fillable = [
        "image_id",
        "date_dernier_enchere",
        "montant",
        "email"
    ];



    /**
     * Get the images.
     */
    public function images()
    {
        return $this->belongsTo(Image::class);
    }
}
