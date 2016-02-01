<?php

namespace second_iteration\map_solution;

class Play
{
    /** @var string */
    private $left;

    /** @var string */
    private $right;

    /**
     * Play constructor.
     * @param string $left
     * @param string $right
     */
    public function __construct($left, $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    public function __toString()
    {
        return $this->left . $this->right;
    }
}