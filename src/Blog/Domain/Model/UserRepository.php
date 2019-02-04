<?php
/**
 * Created by PhpStorm.
 * User: uic
 * Date: 2/4/19
 * Time: 11:49 AM
 */

namespace Blog\Domain\Model;


use Blog\Domain\Model\Ports\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function ofIdOrFail($id)
    {
        // TODO: Implement ofIdOrFail() method.
    }

}