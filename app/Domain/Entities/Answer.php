<?php 

namespace App\Domain\Entities;

class Answer 
{
    public function __construct(private readonly string $answer, private readonly bool $isCorrect) {}

    /**
     * Get the answer.
     * 
     * @return string
     */
    public function answer(): string
    {
        return $this->answer;
    }

    /**
     * Get the isCorrect.
     *
     * @return bool
     */
    public function isCorrect()
    {
        return $this->isCorrect;
    }

}