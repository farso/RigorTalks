<?php
/**
 * Created by PhpStorm.
 * User: uic
 * Date: 2/4/19
 * Time: 11:47 AM
 */

namespace Blog\Domain\Model\Ports;


interface UserRepositoryInterface
{
    public function ofIdOrFail($id);
}