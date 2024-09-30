<?php

namespace App\Modules\Guest\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Modules\Guest\Model\Guest
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $phone
 * @property string|null $email
 * @property string|null $country
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
class Guest extends Model
{
    use HasFactory;
}
