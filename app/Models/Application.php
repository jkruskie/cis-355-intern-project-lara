<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Auth;

class Application extends Model
{
    use HasFactory;

    protected $fillable = ['internship_id', 'user_id', 'created_at', 'updated_at'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function internship()
    {
        return $this->belongsTo(Internship::class, 'internship_id','id');
    }

    public static function retrieveMine()
    {
        return self::where('user_id', Auth::user()->id);
    }

    // Use Accessors to reformat created_at
    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d', $date)->format('Y-m-d');
    }

    // Use Accessors to reformat Updated_At
    public function getUpdatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d', $date)->format('Y-m-d');
    }
}
