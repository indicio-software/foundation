<?php

namespace Indicio\Foundation\Dto\Whmcs;

abstract class AbstractDto extends \ArrayObject implements \Serializable
{
    public function __construct($input = [], $flags = \ArrayObject::ARRAY_AS_PROPS)
    {
        parent::__construct($input, $flags);
    }

    abstract public function fieldMap();

    /*public function mapInput($input) {
        $fieldMap = $this->fieldMap();

        foreach ($input as $field => $value) {
            if(isset($fieldMap[$field])) {
                if(is_array($fieldMap[$field])) {
                    yield $fieldMap[$field][0] => new $fieldMap[$field][1]($value);
                    continue;
                }
                yield $fieldMap[$field] => $value;
                continue;
            }

            yield $field => $value;
        }
    }*/

    public function offsetGet($index)
    {
        $fieldMap = $this->fieldMap();

        foreach($fieldMap as $key => $value) {
            if(is_array($value)) {
                if($index === $value[0]) {
                    $input = parent::offsetGet($key);

                    return new $value[1]($input);
                }
            }

            if($index === $value) {
                return parent::offsetGet($key);
            }
        }

        return parent::offsetGet($index);
    }

    public function offsetSet($index, $newValue)
    {
        $fieldMap = $this->fieldMap();

        foreach($fieldMap as $key => $value) {
            if($value === $index || (is_array($value) && $value[0] === $index)) {
                parent::offsetSet($key, $newValue);

                return;
            }
        }

        parent::offsetSet($index, $newValue);
    }
}
