<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class investigarions extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'investigarions'; // make sure this matches your DB table
    public function investigation_contents()
    {
        return $this->hasMany(investigarion_content::class, 'title_id');
    }

}
