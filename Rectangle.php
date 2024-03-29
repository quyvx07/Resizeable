<?php


class Rectangle implements Resizeable
{
    private $with;
    private $height;

    public function __construct($with, $height)
    {
        $this->with = $with;
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return mixed
     */
    public function getWith()
    {
        return $this->with;
    }

    /**
     * @param mixed $with
     */
    public function setWith($with)
    {
        $this->with = $with;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    function resize()
    {
        $this->setWith($this->getWith() * rand(1, 100));
        $this->setHeight($this->getHeight() * rand(1, 100));
    }

    function acreage()
    {
        $s = $this->getWith() * $this->getHeight();
        return $s;
    }
}