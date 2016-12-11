<?php
/**
 * This file is part of converter.
 *
 * Created by HyanCat.
 *
 * Copyright (C) HyanCat. All rights reserved.
 */
namespace Ruogoo\Converter;

class Converter
{
    public function stringVal($value)
    {
        if (null === $value) {
            return '';
        }
        $newVal = (string)$value;
        if (empty($newVal)) {
            return '';
        }

        return $newVal;
    }

    public function intVal($value)
    {
        if (null === $value) {
            return 0;
        }

        return (int)$value;
    }

    public function boolVal($value)
    {
        if (null === $value) {
            return false;
        }

        return (bool)$value;
    }

    public function arrVal($value)
    {
        if (null === $value) {
            return [];
        }

        return (array)$value;
    }
}
