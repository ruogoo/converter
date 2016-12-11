<?php
/**
 * This file is part of converter.
 *
 * Created by HyanCat.
 *
 * Copyright (C) HyanCat. All rights reserved.
 */
namespace Ruogoo\Converter;

use Illuminate\Support\ServiceProvider;

class ConverterServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton('ruogoo.converter', function () {
            return new Converter();
        });
    }

    public function provides()
    {
        return ['ruogoo.converter'];
    }
}
