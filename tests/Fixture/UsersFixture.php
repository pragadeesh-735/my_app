<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'age' => 1,
                'mobileno' => 'Lorem ips',
                'createdAt' => '2024-07-25 06:33:39',
                'updatedAt' => '2024-07-25 06:33:39',
                'is_active' => 1,
            ],
        ];
        parent::init();
    }
}
