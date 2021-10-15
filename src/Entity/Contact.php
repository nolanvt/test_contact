<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="contact")
 */
class Contact {

  /**
   * @ORM\Column(type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @return mixed
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @param mixed $id
   */
  public function setId($id): void
  {
    $this->id = $id;
  }

  /**
   * @return mixed
   */
  public function getNom()
  {
    return $this->nom;
  }

  /**
   * @param mixed $nom
   */
  public function setNom($nom): void
  {
    $this->nom = $nom;
  }

  /**
   * @return mixed
   */
  public function getPrenom()
  {
    return $this->prenom;
  }

  /**
   * @param mixed $prenom
   */
  public function setPrenom($prenom): void
  {
    $this->prenom = $prenom;
  }

  /**
   * @return mixed
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * @param mixed $email
   */
  public function setEmail($email): void
  {
    $this->email = $email;
  }

  /**
   * @return mixed
   */
  public function getTelephone()
  {
    return $this->telephone;
  }

  /**
   * @param mixed $telephone
   */
  public function setTelephone($telephone): void
  {
    $this->telephone = $telephone;
  }


  /**
   * @ORM\Column(type="string", length=100)
   */
  protected $nom;

  /**
   * @ORM\Column(type="string", length=50)
   */
  protected $prenom;

  /**
   * @ORM\Column(type="string", length=1000)
   */
  protected $email;

  /**
   * @ORM\Column(type="string", length=100)
   */

  protected $telephone;




}
