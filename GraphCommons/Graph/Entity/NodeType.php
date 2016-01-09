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
 * @object     GraphCommons\Graph\Entity\NodeType
 * @extends    GraphCommons\Graph\GraphEntity
 * @author     Kerem Güneş <qeremy@gmail.com>
 */
final class NodeType extends GraphEntity
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
     * Image.
     * @var string
     */
    protected $image;

    /**
     * Image as icon.
     * @var bool
     */
    protected $imageAsIcon;

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
     * Hide name.
     * @var bool
     */
    protected $hideName;

    /**
     * Size.
     * @var string
     */
    protected $size;

    /**
     * Size limit.
     * @var int
     */
    protected $sizeLimit;

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
     * Set image as icon.
     *
     * @param  bool $imageAsIcon
     * @return self
     */
    final public function setImageAsIcon($imageAsIcon)
    {
        $this->imageAsIcon = (bool) $imageAsIcon;
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
     * Set hide name.
     *
     * @param  bool $hideName
     * @return self
     */
    final public function setHideName($hideName)
    {
        $this->hideName = (bool) $hideName;
        return $this;
    }

    /**
     * Set size.
     *
     * @param  string $size
     * @return self
     */
    final public function setSize($size)
    {
        $this->size = (string) $size;
        return $this;
    }

    /**
     * Set size limit.
     *
     * @param  string $sizeLimit
     * @return self
     */
    final public function setSizeLimit($sizeLimit)
    {
        $this->sizeLimit = (int) $sizeLimit;
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
     * Get image.
     *
     * @return string
     */
    final public function getImage()
    {
        return $this->image;
    }

    /**
     * Get image as icon.
     *
     * @return bool
     */
    final public function getImageAsIcon()
    {
        return $this->imageAsIcon;
    }

    /**
     * Get color.
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

    /**
     * Get hide name.
     *
     * @return bool
     */
    final public function getHideName()
    {
        return $this->hideName;
    }

    /**
     * Get size.
     *
     * @return string
     */
    final public function getSize()
    {
        return $this->size;
    }

    /**
     * Get size limit.
     *
     * @return int
     */
    final public function getSizeLimit()
    {
        return $this->sizeLimit;
    }
}
