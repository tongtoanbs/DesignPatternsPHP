<?php

namespace DesignPatterns\Creational\AbstractFactory\Html;

use DesignPatterns\Creational\AbstractFactory\AbstractText;

/**
 * Class Text
 *
 * Text is a concrete text for HTML rendering
 */
class Text extends AbstractText
{
    /**
     * some crude rendering from HTML output
     *
     * @return string
     */
    public function render()
    {
        return '<div>' . htmlspecialchars($this->text) . '</div>';
    }
}
