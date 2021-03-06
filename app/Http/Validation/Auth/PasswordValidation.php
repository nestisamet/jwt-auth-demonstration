<?php

namespace App\Http\Validation\Auth;

use Illuminate\Support\Facades\Hash;

trait PasswordValidation
{
    /**
     * @param $val
     */
    public function currentPassword($val)
    {
        if (!Hash::check($val, auth()->user()->password)) {
            $this->errors['current_password'][] = trans('passwords.currentPass');
        }
    }
}
