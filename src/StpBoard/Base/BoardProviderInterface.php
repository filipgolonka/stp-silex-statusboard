<?php

namespace StpBoard\Base;

interface BoardProviderInterface
{
    /**
     * Returns route prefix, starting with "/"
     *
     * @return string
     */
    public static function getRoutePrefix();
}
