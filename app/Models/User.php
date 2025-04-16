<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use OpenApi\Attributes\Property;
use OpenApi\Attributes\Schema;

#[Schema(properties: [
    new Property(property: 'id', description: 'ID пользователя', type: 'integer', example: 1),
    new Property(property: 'name', description: 'Имя пользователя', type: 'string', example: 'John Doe'),
    new Property(property: 'email', description: 'Email пользователя', type: 'string', example: 'john@example.com'),
    new Property(property: 'created_at', description: 'Дата создания пользователя', type: 'string', format: 'date-time', example: '2025-04-16T12:00:00Z'),
    new Property(property: 'updated_at', description: 'Дата последнего обновления пользователя', type: 'string', format: 'date-time', example: '2025-04-16T12:00:00Z')
])]
class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
