<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * Mass assignable attributes
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'dob',
        'avatar',
    ];

    /**
     * Hidden attributes
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Cast attributes
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    /**
     * Blog posts created by user
     */
    public function posts()
    {
        return $this->hasMany(Post::class, 'author_id');
    }

    /**
     * Inventory transactions created by user
     */
    public function inventoryTransactions()
    {
        return $this->hasMany(
            InventoryTransaction::class,
            'created_by'
        );
    }

    /**
     * Order status updates made by user
     */
    public function orderStatusHistories()
    {
        return $this->hasMany(
            OrderStatusHistory::class,
            'updated_by'
        );
    }
}