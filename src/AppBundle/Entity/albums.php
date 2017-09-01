<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * albums
 *
 * @ORM\Table(name="albums")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\albumsRepository")
 */
class albums
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="release_date", type="datetime")
     */
    private $releaseDate;

    /**
     * @var string
     *
     * @ORM\Column(name="album_art", type="string", length=128)
     */
    private $albumArt;
    
    /**
     * @var categories
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\categories", inversedBy="albums")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;
    
    /**
     * @var ArrayCollection
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\artists", mappedBy="albums")
     *
     *
     */
    private $artists;
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return albums
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set releaseDate
     *
     * @param \DateTime $releaseDate
     *
     * @return albums
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * Get releaseDate
     *
     * @return \DateTime
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Set albumArt
     *
     * @param string $albumArt
     *
     * @return albums
     */
    public function setAlbumArt($albumArt)
    {
        $this->albumArt = $albumArt;

        return $this;
    }

    /**
     * Get albumArt
     *
     * @return string
     */
    public function getAlbumArt()
    {
        return $this->albumArt;
    }
    
    /**
     * @return \AppBundle\Entity\categories
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
    
    /**
     * @param \AppBundle\Entity\categories $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }
    
    /**
     * @return \AppBundle\Entity\ArrayCollection
     */
    public function getArtists()
    {
        return $this->artists;
    }
    
    /**
     * @param \AppBundle\Entity\ArrayCollection $artists
     */
    public function setArtists($artists)
    {
        $this->artists = $artists;
    }
    
}

