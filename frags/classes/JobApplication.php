<?php

class JobApplication
{
    //continue the code , constructor , getters and setters
    public string $id;
    public string $jobOfferID;
    public string $jobSeekerEmail;
    public string $companyEmail; // TODO :: This attribute should be deleted, to make it less coupled
    public string $status;

    public string $applicationdate;
   // make contructor but all attributes are optional with default values being empty strings
    public function __construct(
        string $jobOfferId = "",
        string $jobseekerEmail = "",
        string $companyEmail = "",
        string $status = "",
        string $applicationdate = ""
    ) {
        $this->id = UUID::gen_uuid();
        $this->jobOfferID = $jobOfferId;
        $this->jobSeekerEmail = $jobseekerEmail;
        $this->companyEmail = $companyEmail;
        $this->status = $status;
        $this->applicationdate = $applicationdate;
    }
    //TODO  :: These function are redondant and useless, everything is public, and we have our Repository
    /*public function getJobOffer()
    {
        return JobOfferRepository::getOneWhere("id",$this->jobOfferId);
    }
    public function getJobSeeker()
    {
        return JobSeekerRepository::getOneWhere("email",$this->jobSeekerEmail);
    }
    public function getCompany()
    {
        return CompanyRepository::getOneWhere("email",$this->companyEmail);
    }
    public function getApplicationDate()
    {
        return $this->applicationdate;
    }
    public function getApplicationStatus()
    {
        return $this->status;
    }
    public function setApplicationStatus($status)
    {
        $this->status=$status;
    }
    public function getApplicationId()
    {
        return $this->id;
    }
    public function getJobOfferId()
    {
        return $this->jobOfferId;
    }
    public function getJobSeekerEmail()
    {
        return $this->jobSeekerEmail;
    }
    public function getCompanyEmail()
    {
        return $this->companyEmail;
    }
    public function setJobOfferId($jobOfferId)
    {
        $this->jobOfferId=$jobOfferId;
    }
    public function setJobSeekerEmail($jobseekerEmail)
    {
        $this->jobSeekerEmail=$jobseekerEmail;
    }
    public function setCompanyEmail($companyEmail)
    {
        $this->companyEmail=$companyEmail;
    }
    public function setApplicationDate($applicationdate)
    {
        $this->applicationdate=$applicationdate;
    }
    public function setApplicationId($id)
    {
        $this->id=$id;
    }*/

}