<?php

class Book {
    // Private properties for the Book class
    private $title;
    private $availableCopies;

    // Constructor to initialize the properties
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Method to get the title of the book
    public function getTitle() {
        return $this->title;
    }

    // Method to get the available copies of the book
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Method to borrow a book
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            return false;
        }
    }

    // Method to return a book
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    // Private property for the Member class
    private $name;

    // Constructor to initialize the property
    public function __construct($name) {
        $this->name = $name;
    }

    // Method to get the name of the member
    public function getName() {
        return $this->name;
    }

    // Method for the member to borrow a book
    public function borrowBook(Book $book) {
         $book->borrowBook() ;
    }

    // Method for the member to return a book
    public function returnBook(Book $book) {
        $book->returnBook();
       
    }
}


// Creating 2 books with the specified properties
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Creating 2 members with the specified properties
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Member 1 borrows book 1
$member1->borrowBook($book1);

// Member 2 borrows book 2
$member2->borrowBook($book2);

// Printing available copies of each book
echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . "\n";
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . "\n";


