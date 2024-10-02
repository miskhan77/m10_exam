<?php

class Book {
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Get the title of the book
    public function getTitle() {
        return $this->title;
    }

    // Get the available copies of the book
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Borrow the book (decrease available copies)
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
        } else {
            echo "No copies available for '{$this->title}'.\n";
        }
    }

    // Return the book (increase available copies)
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Get the member's name
    public function getName() {
        return $this->name;
    }

    // Member borrows a book
    public function borrowBook($book) {
        echo "{$this->name} is borrowing '{$book->getTitle()}'.\n";
        $book->borrowBook();
    }

    // Member returns a book
    public function returnBook($book) {
        echo "{$this->name} is returning '{$book->getTitle()}'.\n";
        $book->returnBook();
    }
}

// Create 2 books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Members borrow books
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Print available copies of each book
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}\n";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}\n";

?>
