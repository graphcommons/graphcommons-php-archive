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
 * @object     GraphCommons\Graph\Entity\Edge
 * @extends    GraphCommons\Graph\GraphEntity
 * @author     Kerem Güneş <qeremy@gmail.com>
 */
final class Edge extends GraphEntity
{
    /**
     * ID.
     * @var string
     */
    protected $id;

    /**
     * Name.
     * @var string
     */
    protected $name;

    /**
     * Type.
     * @var GraphCommons\Graph\Entity\EdgeType
     */
    protected $type;

    /**
     * Type ID.
     * @var string
     */
    protected $typeId;

    /**
     * User.
     * @var GraphCommons\Graph\Entity\User
     */
    protected $user;

    /**
     * User ID.
     * @var string
     */
    protected $userId;

    /**
     * From ID.
     * @var string
     */
    protected $from;

    /**
     * From node.
     * @var GraphCommons\Graph\Entity\Node
     */
    protected $fromNode;

    /**
     * To ID.
     * @var string
     */
    protected $to;

    /**
     * To node.
     * @var GraphCommons\Graph\Entity\Node
     */
    protected $toNode;

    /**
     * Weight.
     * @var int
     */
    protected $weight;

    /**
     * Directed.
     * @var int
     */
    protected $directed;

    /**
     * Properties.
     * @var \stdClass
     */
    protected $properties;

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
     * Set type.
     *
     * @param  GraphCommons\Graph\Entity\EdgeType $type
     * @return self
     */
    final public function setType(EdgeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Set type ID.
     *
     * @param  string $type
     * @return self
     */
    final public function setTypeId($typeId)
    {
        $this->typeId = (string) $typeId;
        return $this;
    }

    /**
     * Set user.
     *
     * @param  GraphCommons\Graph\Entity\User $user
     * @return self
     */
    final public function setUser(User $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Set user ID.
     *
     * @param  string $userId
     * @return self
     */
    final public function setUserId($userId)
    {
        $this->userId = (string) $userId;
        return $this;
    }

    /**
     * Set from ID.
     *
     * @param  string $from
     * @return self
     */
    final public function setFrom($from)
    {
        $this->from = (string) $from;
        return $this;
    }

    /**
     * Set from node.
     * @param  GraphCommons\Graph\Entity\Node $fromNode
     * @return self
     */
    final public function setFromNode(Node $fromNode)
    {
        $this->fromNode = $fromNode;
        return $this;
    }

    /**
     * Set to ID.
     *
     * @param  string $to
     * @return self
     */
    final public function setTo($to)
    {
        $this->to = (string) $to;
        return $this;
    }

    /**
     * Set to node.
     * @param  GraphCommons\Graph\Entity\Node $toNode
     * @return self
     */
    final public function setToNode(Node $toNode)
    {
        $this->toNode = $toNode;
        return $this;
    }

    /**
     * Set weight.
     *
     * @param  int $weight
     * @return self
     */
    final public function setWeight($weight)
    {
        $this->weight = (int) $weight;
        return $this;
    }

    /**
     * Set directed.
     *
     * @param  int $directed
     * @return self
     */
    final public function setDirected($directed)
    {
        $this->directed = (int) $directed;
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
     * Get ID.
     *
     * @return string
     */
    final public function getId()
    {
        return $this->id;
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
     * Get type.
     *
     * @return GraphCommons\Graph\Entity\EdgeType
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
     * Get user.
     *
     * @return GraphCommons\Graph\Entity\User
     */
    final public function getUser()
    {
        return $this->user;
    }

    /**
     * Get user ID.
     *
     * @return string
     */
    final public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Get from ID.
     *
     * @return string
     */
    final public function getFrom()
    {
        return $this->from;
    }

    /**
     * Get from node.
     *
     * @return GraphCommons\Graph\Entity\Node
     */
    final public function getFromNode()
    {
        return $this->fromNode;
    }

    /**
     * Get to ID.
     *
     * @return string
     */
    final public function getTo()
    {
        return $this->to;
    }

    /**
     * Get to node.
     *
     * @return GraphCommons\Graph\Entity\Node
     */
    final public function getToNode()
    {
        return $this->toNode;
    }

    /**
     * Get weight.
     *
     * @return int
     */
    final public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Get directed.
     *
     * @return int
     */
    final public function getDirected()
    {
        return $this->directed;
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
}
