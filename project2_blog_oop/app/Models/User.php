<?php

namespace App\Models;

use Core\Model;
use Core\App;
class User extends Model
{
    protected static string  $table = 'users';

    public $id;
    public $name;
    public $email;
    public $password;
    public $role;
    public $created_at;

    public static function findByEmail(string $email): ?User
    {
        $db = App::get('database');
        $result = $db->fetch(
            'SELECT * FROM users WHERE email = ?',
            [$email],
            static::class
        );
        return $result ? $result : null;
    }
}
