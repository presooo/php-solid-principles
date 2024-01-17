<?php

/**
 * The LogService class refers to Repository interface. In future, if we need to support any other logging service 
 * then simply need to pass its instance in constructor without changing this class.
 */
class LogService
{
    private LogRepositoryInterface $repository;

    public function __construct(LogRepositoryInterface $repo)
    {
        $this->repository = $repo;
    }

    public function createLog()
    {
        $this->repository->log();
    }
}
