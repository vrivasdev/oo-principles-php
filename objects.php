<?php

class Team 
{
    protected $name;
    protected $members = [];

    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }

    public static function start(...$params) 
    {
        return new static(...$params);
    }

    public function name()
    {
    }
    
    public function members()
    {
        return $this->members;
    }

    public function add($member)
    {
        $this->members[] = $member;
    }

    public function cancel()
    {

    }
}

class Member 
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function lastViewed()
    {

    }
}

$acme = Team::start('Acme', [
    new Member('Patricia Flores'),
    new Member('Toby One')
]);

$watson = new Team('Watson');

var_dump($acme->members());