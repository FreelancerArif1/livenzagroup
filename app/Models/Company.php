<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'id',
        'name',
        'logo_url',
        'email',
        'phone',
        'address_id',
        'contract_name',
        'contract_email',
        'contract_phone',
        'ancestor_id',
        'created_by_id',
        'created_by_name',
        'created_date',
        'last_modified_by_id',
        'last_modified_by_name',
        'last_modified_date',
        'status',
        'approval_status',
    ];
}
