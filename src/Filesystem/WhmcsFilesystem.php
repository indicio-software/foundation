<?php

namespace Indicio\Foundation\Filesystem;

use WHMCS\File;

class WhmcsFilesystem implements FilesystemContract
{
    /**
     * @var File[]
     */
    protected $managers = [];

    /**
     * @param string $path
     *
     * @return File
     */
    protected function getManager($path)
    {
        if(! isset($this->managers[$path])) {
            $this->managers[$path] = new File($path);
        }

        return $this->managers[$path];
    }

    /**
     * @param string $path
     * @return bool
     */
    public function exists($path)
    {
        return $this->getManager($path)->exists();
    }

    /**
     * @param string $path
     * @return bool|string
     */
    public function get($path)
    {
        return $this->getManager($path)->contents();
    }

    /**
     * @param string $path
     * @param resource|string $contents
     * @return bool|void
     * @throws \WHMCS\Exception\File\NotCreated
     */
    public function put($path, $contents)
    {
        $this->getManager($path)->create($contents);
    }

}
