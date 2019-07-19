<?php

namespace Indicio\Foundation\Session;

use WHMCS\Session;

class WhmcsSession implements SessionContract
{
    /**
     * @param $key
     * @return mixed|string
     */
    public function get($key)
    {
        return Session::get($key);
    }

    /**
     * @param $key
     * @param string $value
     * @return void
     */
    public function set($key, $value = '')
    {
        Session::set($key, $value);
    }

    /**
     * @param $key
     * @return void
     */
    public function remove($key)
    {
        Session::delete($key);
    }
}
