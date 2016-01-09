<?php
/**
 * The MIT License (MIT)
 *
 * Copyright (c) 2015 Graph Commons & contributors.
 *     <http://graphcommons.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */
namespace GraphCommons\Graph\Entity;

use GraphCommons\Graph\GraphEntity;

/**
 * @package    GraphCommons
 * @subpackage GraphCommons\Graph\Entity
 * @object     GraphCommons\Graph\Entity\Node
 * @extends    GraphCommons\Graph\GraphEntity
 * @author     Kerem Güneş <qeremy@gmail.com>
 */
final class Node extends GraphEntity
{
    /**
     * ID.
     * @var string
     */
    protected $id;

    /**
     * Type.
     * @var GraphCommons\Graph\Entity\NodeType
     */
    protected $type;

    /**
     * Type ID.
     * @var string
     */
    protected $typeId;

    /**
     * Name.
     * @var string
     */
    protected $name;

    /**
     * Description.
     * @var string
     */
    protected $description;

    /**
     * Image.
     * @var string
     */
    protected $image;

    /**
     * Reference.
     * @var string
     */
    protected $reference;

    /**
     * Properties.
     * @var \stdClass
     */
    protected $properties;

    /**
     * PosX, PosY.
     * @var float, float
     */
    protected $posX, $posY;

    /**
     * Create, update dates.
     * @var string, string
     */
    protected $createdAt, $updatedAt;

    /**
     * Hubs.
     * @var array
     */
    protected $hubs = array();

    /**
     * Users.
     * @var array
     */
    protected $users = array();

    /**
     * Graphs.
     * @var array
     */
    protected $graphs = array();

    /**
     * Graphs count.
     * @var int
     */
    protected $graphsCount = 0;

    /**
     * Status.
     * @var int
     */
    protected $status;

    /**
     * Set ID.
     *
     * @param  string $id
     * @return self
     */
    final public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Set type.
     *
     * @param  GraphCommons\Graph\Entity\NodeType $type
     * @return self
     */
    final public function setType(NodeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Set type ID.
     *
     * @param  string $typeId
     * @return self
     */
    final public function setTypeId($typeId)
    {
        $this->typeId = (string) $typeId;
        return $this;
    }

    /**
     * Set name.
     *
     * @param  string $name
     * @return self
     */
    final public function setName($name)
    {
        $this->name = (string) $name;
        return $this;
    }

    /**
     * Set description.
     *
     * @param  string $description
     * @return self
     */
    final public function setDescription($description)
    {
        $this->description = (string) $description;
        return $this;
    }

    /**
     * Set image.
     *
     * @param  string $image
     * @return self
     */
    final public function setImage($image)
    {
        $this->image = (string) $image;
        return $this;
    }

    /**
     * Set reference.
     *
     * @param  string $reference
     * @return self
     */
    final public function setReference($reference)
    {
        $this->reference = (string) $reference;
        return $this;
    }

    /**
     * Set properties.
     *
     * @param  \stdClass $properties
     * @return self
     */
    final public function setProperties($properties)
    {
        $this->properties = (object) $properties;
        return $this;
    }

    /**
     * Set posX.
     *
     * @param  float $posX
     * @return self
     */
    final public function setPosX($posX)
    {
        $this->posX = (float) $posX;
        return $this;
    }

    /**
     * Set posY.
     *
     * @param  float $posY
     * @return self
     */
    final public function setPosY($posY)
    {
        $this->posY = (float) $posY;
        return $this;
    }

    /**
     * Set posX, posY.
     *
     * @param  float $posX
     * @param  float $posY
     * @return self
     */
    final public function setPosXY($posX, $posY)
    {
        $this->posX = (float) $posX;
        $this->posY = (float) $posY;
        return $this;
    }

    /**
     * Set create date.
     *
     * @param  string $createdAt
     * @return self
     */
    final public function setCreatedAt($createdAt)
    {
        $this->createdAt = (string) $createdAt;
        return $this;
    }

    /**
     * Set update date.
     *
     * @param  string $updatedAt
     * @return self
     */
    final public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = (string) $updatedAt;
        return $this;
    }

    /**
     * Set hubs.
     *
     * @param  array $hubs
     * @return self
     */
    final public function setHubs($hubs)
    {
        $this->hubs = (array) $hubs;
        return $this;
    }

    /**
     * Set users.
     *
     * @param  array $users
     * @return self
     */
    final public function setUsers($users)
    {
        $this->users = (array) $users;
        return $this;
    }

    /**
     * Set graphs.
     *
     * @param  array $graphs
     * @return self
     */
    final public function setGraphs($graphs)
    {
        $this->graphs = (array) $graphs;
        return $this;
    }

    /**
     * Set graphs count.
     *
     * @param  int $graphsCount
     * @return self
     */
    final public function setGraphsCount($graphsCount)
    {
        $this->graphsCount = (int) $graphsCount;
        return $this;
    }

    /**
     * Set status.
     *
     * @param  int $status
     * @return self
     */
    final public function setStatus($status)
    {
        $this->status = (int) $status;
        return $this;
    }

    /**
     * Get ID.
     *
     * @return string
     */
    final public function getId()
    {
        return $this->id;
    }

    /**
     * Get type.
     *
     * @return GraphCommons\Graph\Entity\NodeType
     */
    final public function getType()
    {
        return $this->type;
    }

    /**
     * Get type ID.
     *
     * @return string
     */
    final public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * Get name.
     *
     * @return string
     */
    final public function getName()
    {
        return $this->name;
    }

    /**
     * Get description.
     *
     * @return string
     */
    final public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get image.
     *
     * @return string
     */
    final public function getImage()
    {
        return $this->image;
    }

    /**
     * Get reference.
     *
     * @return string
     */
    final public function getReference()
    {
        return $this->reference;
    }

    /**
     * Get properties.
     *
     * @return \stdClass
     */
    final public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Get posX.
     *
     * @return float
     */
    final public function getPosX()
    {
        return $this->posX;
    }

    /**
     * Get posY.
     *
     * @return float
     */
    final public function getPosY()
    {
        return $this->posY;
    }

    /**
     * Get posX, posY.
     *
     * @return array
     */
    final public function getPosXY()
    {
        return array($this->posX, $this->posY);
    }

    /**
     * Get create date.
     *
     * @return string
     */
    final public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Get update date.
     *
     * @return string
     */
    final public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Get hubs.
     *
     * @return array
     */
    final public function getHubs()
    {
        return $this->hubs;
    }

    /**
     * Get users.
     *
     * @return array
     */
    final public function getUsers()
    {
        return $this->users;
    }

    /**
     * Get graphs.
     *
     * @return array
     */
    final public function getGraphs()
    {
        return $this->graphs;
    }

    /**
     * Get graphs count.
     *
     * @return int
     */
    final public function getGraphsCount()
    {
        return $this->graphsCount;
    }

    /**
     * Get status.
     *
     * @return int
     */
    final public function getStatus()
    {
        return $this->status;
    }
}
