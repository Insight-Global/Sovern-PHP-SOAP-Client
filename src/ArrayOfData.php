<?php

namespace Sovern;

class ArrayOfData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Data[] $Data
     */
    protected $Data = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Data[]
     */
    public function getData()
    {
      return $this->Data;
    }

    /**
     * @param Data[] $Data
     * @return \Sovern\ArrayOfData
     */
    public function setData(array $Data = null)
    {
      $this->Data = $Data;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->Data[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Data
     */
    public function offsetGet($offset)
    {
      return $this->Data[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Data $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Data[] = $value;
      } else {
        $this->Data[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Data[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Data Return the current element
     */
    public function current()
    {
      return current($this->Data);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Data);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Data);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->Data);
    }

    /**
     * Countable implementation
     *
     * @return Data Return count of elements
     */
    public function count()
    {
      return count($this->Data);
    }

}
