<?php

class Renderer
{
    /**
     * @var IFormater
     */
    protected $formatter;
    /**
     * @param IFormater $formatter
     */
    public function __construct(IFormater $formatter)
    {
        $this->formatter = $formatter;
    }

    public function display($name)
    {
        $data = $this->formatter->render($name);

        return $data;
    }
}



