<?php
namespace Interop\Lenient\Aop\Annotation;

/**
* The annotated method will be used as advice.
*
* @Annotation
* @Target({ METHOD })
*/
interface AfterReturning extends AbstractAdvice
{
    /*
     * Pointcut string
     *
    public $value;

    **
     * Pointcut name
     *
    public $pointcut;

    */
}