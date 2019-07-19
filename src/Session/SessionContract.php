<?php

namespace Indicio\Foundation\Session;

interface SessionContract
{
    /**
     * @param $key
     * @return mixed
     */
    public function get($key);

    /**
     * @param $key
     * @param string $value
     * @return void
     */
    public function set($key, $value = '');

    /**
     * @param $key
     * @return void
     */
    public function remove($key);
}
