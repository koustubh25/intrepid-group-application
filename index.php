<?php
use IntrepidGroup\SampleApplication\Repository\StaticBookRepository;

require_once __DIR__.'/vendor/autoload.php';

// Fetch the collection of books
$bookRepository = new StaticBookRepository();
$books = $bookRepository->fetchAll();

// Render the homepage
$twig = new Twig_Environment(new Twig_Loader_Filesystem(__DIR__.'/src/templates'));
$twig->display('homepage.twig', array('books' => $books));