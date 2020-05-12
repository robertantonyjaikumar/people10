<?php

namespace People10\Models;

class EmployeeWebHistory extends \Illuminate\Database\Eloquent\Model
{
    protected $table = "employee_web_history";

    public $timestamps = false;

    protected $fillable = [
        'ip_address',
        'url',
        'date'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->date = date("Y-m-d");
        });
    }

    public function getUrlAttribute($value)
    {
        return explode(",", $value);
    }

    public function getDateAttribute($value)
    {
        return implode(".", array_reverse(explode("-", $value)));
    }

    public function setUrlAttribute($value)
    {
        $this->attributes["url"] = implode(",", $value);
    }

    public function pushUrl($value) {
        $url = $this->url;
        array_push($url, $value);
        $this->url = $url;
        $this->update();

        return $this;
    }
}
