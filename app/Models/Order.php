<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    // Nom de la table (facultatif si le nom est bien 'orders')
    protected $table = 'orders';

    // Champs autorisés à être remplis automatiquement
    protected $fillable = [
        'user_id',
        'total_amount',
        'status',
        'payment_status'
    ];

    // Laravel gère automatiquement created_at et updated_at (par défaut)
    public $timestamps = true;

    // Relation avec l'utilisateur
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec le panier
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}
