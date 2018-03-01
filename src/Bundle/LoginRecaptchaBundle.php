<?php

/*
 * This file is part of the Login Recaptcha Bundle.
 *
 * (c) Gabriel Caruana <gabb1995@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Bundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * LoginRecaptchaBundle
 */
class LoginRecaptchaBundle extends Bundle
{
    /**
     * {@inheritDoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    }
}