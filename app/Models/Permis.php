<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Permis extends Model
{
    protected $fillable = ['inscrit_id'];
    use HasFactory;
    public function inscrit(): BelongsTo
    {
        return $this->belongsTo(Inscrit::class);
    }
}
