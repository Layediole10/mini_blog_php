<?php

namespace Hello\BlogPhp\Models;

class Article
{
    protected int $_id;
    protected string $_title;
    protected string $_description;
    protected string $_pDate;
    protected string $_photo;    
    protected User $_author;

    public function __construct(string $title, string $description, string $pDate, User $author, string $photo = "")
    {
        $this->_title = $title;
        $this->_description = $description;
        $this->_pDate = $pDate;
        $this->_photo = $photo;
        $this->_author = $author;
        
    }



    public function __toString()
    {
        return "{
            Article: {
                Title : $this->_title,
                Description : $this->_description,
                Publication date : $this->_pDate,
                Photo : $this->_photo,
                Author : $this->_author

            }
        }";
    }
}
