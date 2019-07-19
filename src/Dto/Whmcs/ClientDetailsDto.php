<?php

namespace Indicio\Foundation\Dto\Whmcs;
/**
 * @property-read int $id
 * @property-read int $userId
 * @property-read string email
 * @property-read string $firstName
 * @property-read string $lastName
 * @property-read string $fullName
 * @property-read string $companyName
 * @property-read string $countryCode
 * @property-read string city
 * @property-read string state
 * @property-read string address1
 * @property-read string address2
 * @property-read string $postalCode
 */
class ClientDetailsDto extends AbstractDto
{
    public function fieldMap()
    {
        return [
            'userid' => 'userId',
            'firstname' => 'firstName',
            'lastname' => 'lastName',
            'fullname' => 'fullName',
            'companyname' => 'companyName',
            'countrycode' => 'countryCode',
            'postcode' => 'postalCode'
        ];
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
}
