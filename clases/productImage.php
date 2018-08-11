<?php
/**
 *
 */
class ProductImage
{
  private $idProduct;
  private $idImage;
  private $name;
  private $description;
  private $dateCreated;
  private $title;
  function __construct($idProduct,$idImage,$name,$description,$dateCreated,$title)
  {
    $this->idProduct=$idProduct;
    $this->idImage=$idImage;
    $this->name=$name;
    $this->title=$title;
    $this->description=$description;
    $this->dateCreated=$dateCreated;
  }

    /**
     * Get the value of Id Product
     *
     * @return mixed
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * Get the value of Id Image
     *
     * @return mixed
     */
    public function getIdImage()
    {
        return $this->idImage;
    }

    /**
     * Get the value of Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
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
     * Get the value of Date Created
     *
     * @return mixed
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
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

}

 ?>
