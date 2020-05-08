<?php

namespace App;

use http\Exception\UnexpectedValueException;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Exception;
use http\Exception\RuntimeException;
class RealEstate extends Model
{
    //
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function getMainPicture()
    {
        if(!file_exists(public_path().'/storage'.$this->main_photo))
        {
            return asset('storage/'.$this->main_photo);
        }
        else return asset('images/unknown.png');
    }
    public function getLocation()
    {
        $full_location = $this->location;
        $new_location = explode(',', $full_location);

        if (isset($new_location[1])) return $new_location[0].','.$new_location[1];
        else return $new_location[0];
    }

}
