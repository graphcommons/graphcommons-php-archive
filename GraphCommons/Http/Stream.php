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
namespace GraphCommons\Http;

use GraphCommons\GraphCommonsApiException as Exception;
use GraphCommons\Util\Util;

/**
 * @package    GraphCommons
 * @subpackage GraphCommons\Http
 * @object     GraphCommons\Http\Stream
 * @uses       GraphCommons\GraphCommonsApiException, GraphCommons\Htt\Util
 * @author     Kerem Güneş <qeremy@gmail.com>
 */
abstract class Stream
{
    /**
     * HTTP version.
     * @const string
     */
    const HTTP_VERSION = '1.0';

    /**
     * Types.
     * @const int
     */
    const TYPE_REQUEST = 1,
          TYPE_RESPONSE = 2;

    /**
     * Client object.
     * @var GraphCommons\Http\Client
     */
    protected $client;

    /**
     * Type.
     * @var int
     */
    protected $type;

    /**
     * HTTP version.
     * @var string
     */
    protected $httpVersion;

    /**
     * Headers.
     * @var array
     */
    protected $headers = array();

    /**
     * Body.
     * @var string
     */
    protected $body = '';

    /**
     * Body length.
     * @var int
     */
    protected $bodyLength = 0;

    /**
     * Body data (parsed).
     * @var mixed
     */
    protected $bodyData;

    /**
     * Fail code.
     * @var int
     */
    protected $failCode = 0;

    /**
     * Fail text.
     * @var string
     */
    protected $failText = '';

    /**
     * String magic.
     *
     * @return string
     */
    final public function __toString()
    {
        return $this->toString();
    }

    /**
     * Set type.
     *
     * @param  int $type
     * @return self
     */
    final public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Set HTTP version.
     *
     * @param  string $httpVersion
     * @return self
     */
    final public function setHttpVersion($httpVersion)
    {
        $this->httpVersion = $httpVersion;
        return $this;
    }

    /**
     * Set header.
     *
     * @param  string $key
     * @param  mixed  $value
     * @return self
     */
    final public function setHeader($key, $value)
    {
        $this->headers[$key] = $value;
        return $this;
    }

    /**
     * Set headers.
     *
     * @param  array $headers
     * @return self
     */
    final public function setHeaders(array $headers)
    {
        $this->headers = $headers;
        return $this;
    }

    /**
     * Set body.
     *
     * @param  string $body
     * @return self
     */
    final public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Set body length.
     *
     * @param  int $bodyLength
     * @return self
     */
    final public function setBodyLength($bodyLength)
    {
        $this->bodyLength = $bodyLength;
        return $this;
    }

    /**
     * Set body data.
     *
     * @param  mixed $bodyData
     * @return self
     */
    final public function setBodyData($bodyData = null)
    {
        $this->bodyData = $bodyData;
        return $this;
    }

    /**
     * Set fail code.
     *
     * @param  int $failCode
     * @return self
     */
    final public function setFailCode($failCode)
    {
        $this->failCode = $failCode;
        return $this;
    }

    /**
     * Set fail text.
     *
     * @param  int $failText
     * @return self
     */
    final public function setFailText($failText)
    {
        $this->failText = $failText;
        return $this;
    }

    /**
     * Get type.
     *
     * @return int
     */
    final public function getType()
    {
        return $this->type;
    }

    /**
     * Get HTTP version.
     *
     * @return string
     */
    final public function getHttpVersion()
    {
        return $this->httpVersion;
    }

    /**
     * Get header.
     *
     * @return mixed
     */
    final public function getHeader($key)
    {
        return isset($this->headers[$key]) ? $this->headers[$key] : null;
    }

    /**
     * Get headers.
     *
     * @return array
     */
    final public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Get body.
     *
     * @return string
     */
    final public function getBody()
    {
        return $this->body;
    }

    /**
     * Get body length.
     *
     * @return int
     */
    final public function getBodyLength()
    {
        return $this->bodyLength;
    }

    /**
     * Get body data.
     *
     * @param  string|null $key
     * @param  mixed       $valueDefault
     * @return
     */
    final public function getBodyData($key = null, $valueDefault = null)
    {
        // get all body data
        if ($key === null) {
            return $this->bodyData;
        }

        return Util::arrayDig($this->bodyData, $key, $valueDefault);
    }

    /**
     * Get client object.
     *
     * @return GraphCommons\Http\Client
     */
    final public function getClient()
    {
        return $this->client;
    }

    /**
     * Check failure.
     *
     * @return bool
     */
    final public function isFail()
    {
        return !($this->failCode === 0 && $this->failText === '');
    }

    /**
     * Get failure.
     *
     * @return array
     */
    final public function getFail()
    {
        // set default
        $fail = array(
            'code' => Exception::UNKNOWN_ERROR_CODE,
            'message' => Exception::UNKNOWN_ERROR_MESSAGE,
        );

        if ($this->type == self::TYPE_REQUEST) {
            if ($this->isFail()) {
                $fail['code'] = $this->getFailCode();
                $fail['message'] = $this->getFailText();
            }
        } elseif ($this->type == self::TYPE_RESPONSE) {
            $bodyData = Util::toObject((array) $this->bodyData, false);
            // check first body for errors (differs by requests)
            if (isset($bodyData->msg)) {
                $fail['code'] = $this->getStatusCode();
                $fail['message'] = $bodyData->msg;
            } elseif (isset($bodyData->status, $bodyData->error)) {
                $fail['code'] = $bodyData->status;
                $fail['message'] = $bodyData->error;
            }
            // http error?
            elseif ($this->getStatusCode() >= 400) {
                $fail['code'] = $this->getStatusCode();
                $fail['message'] = $this->getStatusText();
            }
        }

        return $fail;
    }

    /**
     * Get fail code.
     *
     * @return int
     */
    final public function getFailCode()
    {
        return $this->failCode;
    }

    /**
     * Get fail text.
     *
     * @return string
     */
    final public function getFailText()
    {
        return $this->failText;
    }

    /**
     * Pattern.
     *
     * @return bool
     */
    abstract public function ok();

    /**
     * Pattern.
     *
     * @return string
     */
    abstract public function toString();
}
