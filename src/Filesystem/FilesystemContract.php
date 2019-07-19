<?php

namespace Indicio\Foundation\Filesystem;

interface FilesystemContract
{
    /**
     * Checks if specific path exists
     *
     * @param string $path
     *
     * @return bool
     */
    public function exists($path);

    /**
     * Get the contents of a file.
     *
     * @param string $path
     *
     * @return string
     */
    public function get($path);

    /**
     * Write the contents of a file.
     *
     * @param string $path
     * @param  string|resource  $contents
     * @param  string  $visibility
     *
     * @return bool
     */
    public function put($path, $contents);
}
