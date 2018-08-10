<?php
/**
 *
 */
class Product
{
  private $id;
  private $title;
  private $type;
  private $numberOfRooms;
  private $numberOfBathrooms;
  private $numberOfparkingSpaces;
  private $totalSurface;
  private $coveredSurfaces;
  private $address;
  private $city;
  private $currency;
  private $value;
  private $description;
  private $category;
  private $images;

  function __construct($id,$title,$type,$numberOfRooms,$numberOfBathrooms,$numberOfparkingSpaces,$totalSurface,$coveredSurfaces,$address,$city,$currency,$value,$description,$category,$images)
  {
    $this->id=$id;
    $this->title=$title;
    $this->type=$type;
    $this->numberOfRooms=$numberOfRooms;
    $this->numberOfBathrooms=$numberOfBathrooms;
    $this->numberOfparkingSpaces=$numberOfparkingSpaces;
    $this->totalSurface=$totalSurface;
    $this->coveredSurfaces=$coveredSurfaces;
    $this->address=$address;
    $this->city=$city;
    $this->currency=$currency;
    $this->value=$value;
    $this->description=$description;
    $this->category=$category;
    $this->images=$images;
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
     * Get the value of Title
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get the value of Type
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get the value of Number Of Rooms
     *
     * @return mixed
     */
    public function getNumberOfRooms()
    {
        return $this->numberOfRooms;
    }

    /**
     * Get the value of Number Of Bathrooms
     *
     * @return mixed
     */
    public function getNumberOfBathrooms()
    {
        return $this->numberOfBathrooms;
    }

    /**
     * Get the value of Number Ofparking Spaces
     *
     * @return mixed
     */
    public function getNumberOfparkingSpaces()
    {
        return $this->numberOfparkingSpaces;
    }

    /**
     * Get the value of Total Surface
     *
     * @return mixed
     */
    public function getTotalSurface()
    {
        return $this->totalSurface;
    }

    /**
     * Get the value of Covered Surfaces
     *
     * @return mixed
     */
    public function getCoveredSurfaces()
    {
        return $this->coveredSurfaces;
    }

    /**
     * Get the value of Address
     *
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Get the value of City
     *
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Get the value of Currency
     *
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Get the value of Value
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Get the value of Description
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * Get the value of Category
     *
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * Get the value of Images
     *
     * @return mixed
     */
    public function getImages()
    {
        return $this->images;
    }

}


 ?>
