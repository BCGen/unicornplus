<?php

namespace App;

use Bcgen\LaravelHelper\Models\Traits\AutoAble;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use AutoAble;

    public function getDateAttribute()
    {
        return str_before($this->getTimeAttribute(), ' ');
    }

    public function getTimeAttribute()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at, 'UTC')->setTimezone('Asia/Tokyo')->toDateTimeString();
    }
}
