<?php

namespace Hello\BlogPhp\Models;

class Comment
{
    protected int $_id;
    protected string $_email;
    protected string $_pseudo;
    protected string $_message;
    protected string $_commentDate;    


    public function __construct(string $email, string $pseudo = "", string $message,   string $commentDate, int $idArticle)
    {
        $this->_email = $email;
        $this->_pseudo = $pseudo;
        $this->_message = $message;
        $this->_commentDate = $commentDate;
        
    }



    public function __toString()
    {
        return "{
            Comment: {
                Email : $this->_email,
                Pseudo : $this->_pseudo,
                Message : $this->_message,
                Comment date : $this->_commentDate,
                Article : $this->_idArticle

            }
        }";
    }
}
