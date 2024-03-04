<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auctioneer extends Model
{
    use HasFactory;

    protected $fillable = ['fname', 'mname', 'lname', 'email', 'pnumber', 'gender'];

    public function auctions()
    {
        return $this->hasMany(Auction::class);
    }
}
