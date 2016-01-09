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
 * @object     GraphCommons\Graph\Entity\EdgeType
 * @extends    GraphCommons\Graph\GraphEntity
 * @author     Kerem Güneş <qeremy@gmail.com>
 */
final class EdgeType extends GraphEntity
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
     * Name alias.
     * @var string
     */
    protected $nameAlias;

    /**
     * Description.
     * @var string
     */
    protected $description;

    /**
     * Weighted.
     * @var int
     */
    protected $weighted;

    /**
     * Directed.
     * @var int
     */
    protected $directed;

    /**
     * Durational.
     * @var bool
     */
    protected $durational;

    /**
     * Color.
     * @var string
     */
    protected $color;

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
     * Set name alias.
     *
     * @param  string $nameAlias
     * @return self
     */
    final public function setNameAlias($nameAlias)
    {
        $this->nameAlias = (string) $nameAlias;
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
     * Set weighted.
     *
     * @param  int $weighted
     * @return self
     */
    final public function setWeighted($weighted)
    {
        $this->weighted = (int) $weighted;
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
     * Set durational.
     *
     * @param  bool $durational
     * @return self
     */
    final public function setDurational($durational)
    {
        $this->durational = (bool) $durational;
        return $this;
    }

    /**
     * Set color.
     *
     * @param  string $color
     * @return self
     */
    final public function setColor($color)
    {
        $this->color = (string) $color;
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
     * Get name alias.
     *
     * @return string
     */
    final public function getNameAlias()
    {
        return $this->nameAlias;
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
     * Get weighted.
     *
     * @return int
     */
    final public function getWeighted()
    {
        return $this->weighted;
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
     * Get durational.
     *
     * @return bool
     */
    final public function getDurational()
    {
        return $this->durational;
    }

    /**
     * Get weighted.
     *
     * @return string
     */
    final public function getColor()
    {
        return $this->color;
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
