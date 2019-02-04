<?php
/**
 * Created by PhpStorm.
 * User: uic
 * Date: 2/4/19
 * Time: 11:50 AM
 */

namespace Blog\Domain\Model;


use Blog\Domain\Model\Ports\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    /**
     * @param int $id
     */
    public function ofIdOrFail($id)
    {
        // TODO: Implement ofIdOrFail() method.
    }

}