<?php
/**
 * This file is part of converter.
 *
 * Created by HyanCat.
 *
 * Copyright (C) HyanCat. All rights reserved.
 */

if (! function_exists('convert')) {
    function convert($data, $type)
    {
        $method = $type . 'Val';

        return app('ruogoo.converter')->$method($data);
    }
}
