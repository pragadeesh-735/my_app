<?php

declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;


use Authentication\PasswordHasher\DefaultPasswordHasher; // Add this line

/**
 * User Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $password
 * @property int|null $age
 * @property string|null $mobileno
 * @property \Cake\I18n\FrozenTime|null $createdAt
 * @property \Cake\I18n\FrozenTime|null $updatedAt
 * @property bool|null $is_active
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'name' => true,
        'email' => true,
        'password' => true,
        'age' => true,
        'mobileno' => true,
        'createdAt' => true,
        'updatedAt' => true,
        'is_active' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];
    protected function _setPassword(string $password): ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }
}
