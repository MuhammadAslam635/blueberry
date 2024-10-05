<?php

namespace App\Enums;

enum UserType :string
{
    case Customer = 'usr';
    case SuperAdmin = 'sup';
    case Admin = 'adm';
    case Vendor = 'ven';
    case BlogWriter = 'blo';

}
