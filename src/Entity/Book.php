<?php

namespace IntrepidGroup\SampleApplication\Entity;

/**
 * Class Book.
 *
 * This entity represents a single book and it's properties
 */
class Book
{
    private $title = '';
    private $author = '';
    private $language = '';
    private $year = 1970;

    public function __construct($title, $author, $language, $year)
    {
        $this->title = $title;
        $this->author = $author;
        $this->language = $language;
        $this->year = $year;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @return array
     */
    public function getAll(){
        return (array(
            'title' => $this->title,
            'author' => $this->author,
            'language' => $this->language,
            'year'=> $this->year
            ));
    }
}
