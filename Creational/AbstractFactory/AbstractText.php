<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class Text
 */
abstract class AbstractText implements MediaInterface
{
    /**
     * @var string
     */
    protected $text;

    /**
     * @param string $text
     */
    public function __construct($text)
    {
        $this->text = (string) $text;
    }
}
