<?php

namespace App\Library;

class Book {

    private string $title;
    private int $pages;
    private int $actualPage = 1;
    public function __construct($title,$pages) {
        $this->title = $title;
        $this->pages = $pages;
    }

    public function page()
    {
        return $this->actualPage;
    }

    public function nextPage(): self
    {
        $this->actualPage += 1;
        return $this;
    }

    public function close(): self
    {
        $this->actualPage = 1;
        return $this;
    }

    public function getName()
    {
        return $this->title;
    }

    public function countPages()
    {
        return $this->pages;
    }
}
