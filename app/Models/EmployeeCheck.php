<?php

namespace App\Models;

use Dcat\Admin\Admin;
use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class EmployeeCheck extends Model
{
    use HasDateTimeFormatter;
    protected $table = 'employee_checks';
    public function admin_user()
    {
        return $this->belongsTo(AdminUser::class,  'admin_user_id');
    }
}
