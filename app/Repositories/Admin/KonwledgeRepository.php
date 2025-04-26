<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Konwledge;
use App\Repositories\BaseRepository;

class KonwledgeRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'title',
        'content',
        'image',
        'classification_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Konwledge::class;
    }
}
