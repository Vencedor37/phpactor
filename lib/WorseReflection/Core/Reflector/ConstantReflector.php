<?php

namespace Phpactor\WorseReflection\Core\Reflector;

use Phpactor\WorseReflection\Core\Reflection\ReflectionDeclaredConstant;
use Phpactor\WorseReflection\Core\Name;
use Phpactor\WorseReflection\Core\SourceCode;

interface ConstantReflector
{
    /**
     * @param string|Name $name
     */
    public function reflectConstant($name): ReflectionDeclaredConstant;

    /**
     * @param string|Name $name
     */
    public function sourceCodeForConstant($name): SourceCode;
}
