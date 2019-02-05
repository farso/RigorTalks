<?php
/**
 * Created by PhpStorm.
 * User: Farso
 * Date: 2/4/19
 * Time: 12:53 PM
 */

namespace Blog\Domain\Model\Entities;


class Author
{
    private $id;
    private $name;

    /**
     * Author constructor.
     * @param $id
     * @param $name
     */
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }



}