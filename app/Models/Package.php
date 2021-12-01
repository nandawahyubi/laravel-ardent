<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use App\Models\Checkout;

class Package extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
    ];

    public function getIsOrderAttribute(){
        if(!Auth::check()){
            return false;
        }

        return Checkout::whereUserId(Auth::id())->where('is_paid', '<', 2)->orderBy('id', 'desc')->exists();
    }
}
