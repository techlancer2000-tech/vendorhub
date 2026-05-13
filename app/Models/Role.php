<?php

namespace App\Models;

use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    /*
    |--------------------------------------------------------------------------
    | Static Roles
    |--------------------------------------------------------------------------
    */

    public const SUPER_ADMIN = 'super-admin';

    public const ADMIN = 'admin';

    public const VENDOR = 'vendor';

    public const CUSTOMER = 'customer';

    public static function allRoles(): array
    {
        return [
            self::SUPER_ADMIN,
            self::ADMIN,
            self::VENDOR,
            self::CUSTOMER,
        ];
    }
}
