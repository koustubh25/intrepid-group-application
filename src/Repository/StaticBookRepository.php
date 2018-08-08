<?php

namespace IntrepidGroup\SampleApplication\Repository;

use IntrepidGroup\SampleApplication\Entity\Book;

/**
 * Class StaticBookRepository.
 *
 * This class returns acts as a Book Repository for a statically defined list of books
 */
class StaticBookRepository implements BookRepositoryInterface
{
    private $books = [];

    public function __construct()
    {
        $this->preloadStaticBooks();
    }

    /**
     * Retrieve and return a collection of all books with no filtering.
     *
     * @return Book[]
     */
    public function fetchAll()
    {
        return $this->books;
    }

    /**
     * Preload the static list of books.
     */
    private function preloadStaticBooks()
    {
        $this->books[] = (new Book('Finnegans Wake', 'Janes Joyce', 'English', 1941))->getAll();
        $this->books[] = (new Book('Don Quixote', 'Miguel De Cervantes', 'Spanish', 1615))->getAll();
        $this->books[] = (new Book('The Making of Americans', 'Gertrude Stein', 'English', 1925))->getAll();
        $this->books[] = (new Book('The Stranger', 'Albert Camus', 'French', 1942))->getAll();
        $this->books[] = (new Book('Pilgrims Progress', 'John Bunyan', 'English', 1684))->getAll();
        $this->books[] = (new Book('In Search of Lost Time', 'Marcel Proust', 'French', 1913))->getAll();
        $this->books[] = (new Book('Pale Fire', 'Valdimir Nabokov', 'English', 1962))->getAll();
        $this->books[] = (new Book('The Trial', 'Franz Kafka', 'German', 1925))->getAll();
        $this->books[] = (new Book('Ulysses', 'James Joyce', 'English', 1922))->getAll();
        $this->books[] = (new Book('The Name of the Rose', 'Umberto Eco', 'Italian', 1980))->getAll();
        $this->books[] = (new Book('The Gulag Archipelago', 'Aleksandr Solzhenitsyn', 'Russian', 1973))->getAll();
        $this->books[] = (new Book('The Diary of a Young Girl', 'Anne Frank', 'Dutch', 1947))->getAll();
        $this->books[] = (new Book('Gravity\'s Rainbow', 'Thomas Pynchon', 'English', 1973))->getAll();
        $this->books[] = (new Book('One Hundred Years of Solitude', 'Gabriel García Márquez', 'Spanish', 1967))->getAll();
        $this->books[] = (new Book('The Sound and the Fury', 'William Faulkner', 'English', 1929))->getAll();
        $this->books[] = (new Book('Confusion of Feelings', 'Stefan Zweig', 'German', 1927))->getAll();
        $this->books[] = (new Book('The Public Burning', 'Robert Coover', 'English', 1977))->getAll();
        $this->books[] = (new Book('The Joke', 'Milan Kundera', 'Czech', 1967))->getAll();
    }

    public function getBooks(){
        return $this->books;
    }
}
