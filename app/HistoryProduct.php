<?php
//© 2022 Copyright: RizkiLutfiandi
namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoryProduct extends Model
{
        
        protected $guarded = [];

        public function user(){
                return $this->belongsTo(User::class);
        }
}
