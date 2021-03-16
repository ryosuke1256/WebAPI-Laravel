<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $quarded = array('id');

    public static $rules = array(
        'username' => 'required',
        'email' => 'required'
    );

    public function getData() {
        return $this->id . ':' . $this->username . '(' . $this->email . ')';
    }
}