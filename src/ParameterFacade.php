<?php
/**
 * This file is part of converter.
 *
 * Created by HyanCat.
 *
 * Copyright (C) HyanCat. All rights reserved.
 */
namespace Ruogoo\Converter;

use Illuminate\Support\Facades\Facade;

class ConverterFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ruogoo.converter';
    }
}
