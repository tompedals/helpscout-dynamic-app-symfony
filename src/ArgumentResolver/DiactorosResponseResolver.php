<?php

namespace App\ArgumentResolver;

use Psr\Http\Message\ResponseInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
use Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use Zend\Diactoros\Response;

class DiactorosResponseResolver implements ArgumentValueResolverInterface
{
    public function supports(Request $request, ArgumentMetadata $argument)
    {
        return $argument->getType() === ResponseInterface::class;
    }

    public function resolve(Request $request, ArgumentMetadata $argument)
    {
        yield new Response();
    }
}