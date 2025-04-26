<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Konwledge extends Model
{
    public $table = 'konwledge_infos';

    public $fillable = [
        'title',
        'content',
        'image',
        'classification_id'
    ];

    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'image' => 'json',
        'classification_id' => 'string'
    ];

    public static array $rules = [
        'title' => 'nullable',
        'content' => 'nullable',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        'classification_id' => 'nullable'
    ];

    public function classification()
    {
        return $this->belongsTo(Classification::class);
    }


}
