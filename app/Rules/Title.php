<?php

namespace App\Rules;

use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class Title implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($dob,$gender)
    {

        $date = Carbon::createFromFormat('d/m/Y', $dob)->format('Y-m-d');
        $this->age = Carbon::parse($date)->age;
        $this->gender = $gender;
        $this->isMale = false;
        $this->isFemal = false;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if( ($this->age >=2 && $this->age <12) && $value != 'Miss' && $this->gender == 'Female'){
            $this->isFemale = true;
            return false;
        } else if(($this->age >=2 && $this->age <12) && $value != 'Mstr' && ($this->gender == 'Male'|| $this->gender == 'Others' )){
            $this->isMale = true;
            return false;
        }

        else
            return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        if($this->isMale)
            return 'Title should be Mstr';
        else
             return 'Title should be Miss';

    }
}
