<?php

/**
 * The class is tightly coupled, hard to maintain, multiple reasons to modify it...
 */
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


    public function exportToPdf()
    {
        //TBC
    }

    public function exportToCsv()
    {
        //TBC
    }

    public function save(ReportDto $dto): self
    {
        //TBC
        return $this;
    }
}
