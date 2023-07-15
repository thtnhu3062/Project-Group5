<?php

class UserValidate {

    private $data;
    private $errors = [];
    private static $fields = ['email_account', 'password_account'];

    public function __construct($post_data){
        $this->data = $post_data;
    }

    public function validateForm(){
        foreach(self::$fields as $field){
            if(array_key_exists($field, $this->data)){
                trigger_error("$field is not present in the data.");
                return;
            }
        }

        $this->validateEmail();
        $this->validatePassword();
        return $this->errors;
    }

    private function validateEmail(){

        $val = trim($this->data['email_account']);

        if(empty($val)){
            $this->addError('email_account', 'Email cannot be empty');
        } else {
            if(!filter_var($val, FILTER_VALIDATE_EMAIL)){
                $this->addError('email_account', 'Invalid Email');
            }
        }
    }

    private function validatePassword(){

        $val = trim($this->data['password_account']);

        if(empty($val)){
            $this->addError('password_account', 'Password cannot be empty');
        } else {
            if(!preg_match('/^[a-zA-Z0-9]{6,18}$/', $val)){
                $this->addError('password_account', 'Password must be between 6-18 characters and alphanumeric');
            }
        }
    }

    private function addError($key, $val){
        $this->errors[$key] = $val;
    }
}

?>