<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="text", length=100)
     */
    private $name;
    /**
     * @ORM\Column(type="text")
     */
    private $message;
    // Getters & Setters
    public function getId() {
        return $this->id;
    }
    public function getName() {
        return $this->name;
    }
    public function setname($name) {
        $this->name = $name;
    }
    public function getMessage() {
        return $this->message;
    }
    public function setMessage($message) {
        $this->message = $message;
    }


    public function getSlug() {
        return $this->slug;
    }
    public function setSlug($slug) {
        $this->slug = $slug;
    }

 
    public function getPath() {
        return $this->path;
    }
    public function setPath($path) {
        $this->path = $path;
    }




}

