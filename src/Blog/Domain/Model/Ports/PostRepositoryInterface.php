<?php
/**
 * Created by PhpStorm.
 * User: Farso
 * Date: 2/4/19
 * Time: 11:48 AM
 */

namespace Blog\Domain\Model\Ports;


interface PostRepositoryInterface
{
    public function ofIdOrFail($id);
}