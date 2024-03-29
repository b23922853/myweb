<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $title
 * @property string $content
 * @property string $img_path
 * @property string $link
 */
class Merch extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'products';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'title', 'content', 'img_path', 'link'];
}
