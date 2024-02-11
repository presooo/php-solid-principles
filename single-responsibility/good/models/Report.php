<?php

class Report
{
    private string $title;
    private string $content;
    private DateTime $date;

    public function title(): string
    {
        return $this->title;
    }

    public function content(): string
    {
        return $this->content;
    }

    public function date(): DateTime
    {
        return $this->date;
    }
}
