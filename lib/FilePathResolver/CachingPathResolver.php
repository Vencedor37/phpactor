<?php

namespace Phpactor\FilePathResolver;

class CachingPathResolver implements PathResolver
{
    private PathResolver $innerPathResolver;

    private array $cache = [];

    public function __construct(PathResolver $innerPathResolver)
    {
        $this->innerPathResolver = $innerPathResolver;
    }

    public function resolve(string $path): string
    {
        if (isset($this->cache[$path])) {
            return $this->cache[$path];
        }

        $this->cache[$path] = $this->innerPathResolver->resolve($path);

        return $this->cache[$path];
    }
}
