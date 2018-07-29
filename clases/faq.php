<?php

class Faq{

private $id;
private $order;
private $question;
private $answer;

function __construct($id,$order,$question,$answer){

$this->id = $id;
$this->order = $order;
$this->question = $question;
$this->answer = $answer;

}


    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of Order
     *
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Get the value of Question
     *
     * @return mixed
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Get the value of Answer
     *
     * @return mixed
     */
    public function getAnswer()
    {
        return $this->answer;
    }

}





 ?>
