<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MoonShine\ChangeLog\Traits\HasChangeLog;
use OpenApi\Attributes\{Property, Schema};
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * This is the model class for table "{{%texts}}".
 *
 * @package models
 * @author  b.kataev <buvaysar2032@gmail.com>
 *
 * @property int    $id    [int] ID
 * @property string $key   [varchar(255)] Ключ текстового поля
 * @property string $value Значение текстового поля
 */
#[Schema(properties: [
    new Property(property: 'key', type: 'string'),
    new Property(property: 'value', type: 'string')
])]
class Text extends Model implements HasMedia
{
    use HasFactory;
    use HasChangeLog;
    use InteractsWithMedia;

    protected $fillable = [
        'key',
        'value',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('cover')->singleFile();
    }
}
