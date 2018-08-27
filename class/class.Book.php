<?php
    class Book {
        private $title;
        private $author;
        private $publishingYear = 0;
        
         // constructor
        function __construct($title, $author, $publishingYear) {
             $this->setTitle($title);
             $this->setAuthor($author);
             $this->setPublishingYear($publishingYear);
        }

         // getters
        public function getTitle(){
            return $this->title;
        }
        public function getAuthor(){
            return $this->author;
        }
        public function getPublishingYear(){
            return $this->publishingYear;
        }

        // setters
        public function setTitle($title) {
            $this->title = $title;
          }
        public function setAuthor($author) {
            $this->author = $author;
          }
        public function setPublishingYear($publishingYear) {
            $this->publishingYear = $publishingYear;
          }

    }

?>