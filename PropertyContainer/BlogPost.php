<?php

namespace PropertyContainer;

use PropertyContainer\PropertyContainer;

/**
 * Class BlogPost
 * @package PropertyContainer
 */
class BlogPost extends PropertyContainer
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var int
     */
    private $category_id;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return int
     */
    public function getCategory()
    {
        return $this->category_id;
    }

    /**
     * @param int $id
     */
    public function setCategory($id)
    {
        $this->category_id = $id;
    }

}