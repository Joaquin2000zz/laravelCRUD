<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $table = "employee";
    use HasFactory;
    
    public static function create(string $first_name, string $last_name, $birth) {
        $employee = new Employee;
        $employee->first_name = $first_name;
        $employee->last_name = $last_name;
        $employee->birth = $birth;
        $employee->save();
    }

    public static function edit_by_id($id, $first_name, $last_name, $birth) {
        $employee = Employee::find($id);
        if (!$employee) return false;
        if ($first_name) $employee->first_name = $first_name;
        if ($last_name) $employee->last_name = $last_name;
        if ($birth) $employee->birth = $birth;
        $employee->save();
        return true;
    }

    public static function delete_by_id($id) {
        $employee = Employee::find($id);
        if (!$employee) return false;
        $employee->delete();
        return true;
    }
}
