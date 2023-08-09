<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'father_name',
        'last_name',
        'title',
        'gender',
        'dob',
        'martial_status',
        'family_no',
        'family_males',
        'family_females',
        'phone_no',
        'email',
        'will_list',
        'password',
        'refreshToken',
        'memberTypeId',
        'memberEduId',
    ];
}
