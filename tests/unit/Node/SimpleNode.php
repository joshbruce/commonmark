<?php

/*
 * This file is part of the league/commonmark package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * Original code based on the CommonMark JS reference parser (https://bitly.com/commonmark-js)
 *  - (c) John MacFarlane
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark\Tests\Unit\Node;

use League\CommonMark\Node\Node;

/**
 * A simple node used for testing purposes.
 */
final class SimpleNode extends Node
{
    /**
     * @var bool
     */
    private $container;

    /** @var mixed */
    public $value;

    /**
     * @param bool $isContainer
     */
    public function __construct(bool $isContainer = true)
    {
        $this->container = $isContainer;
    }

    /**
     * @return bool
     */
    public function isContainer(): bool
    {
        return $this->container;
    }
}
