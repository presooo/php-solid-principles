<?php

class LogService
{
    private GoogleCloudRepository $repository;


    // Dependency Injection - Nice!
    public function __construct(GoogleCloudRepository $repo)
    {
        $this->repository = $repo;
    }

    /**
     * The Issue: Our class is now tightly coupled with GoogleCloudRepository. In the future, if we need to start supporting 
     * CloudTrailRepository then we need to change Service class.
     */
    public function createLog()
    {
        $this->repository->log();
    }
}
