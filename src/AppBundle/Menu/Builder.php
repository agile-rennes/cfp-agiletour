<?php
/**
 * Created by PhpStorm.
 * User: serge
 * Date: 10/11/17
 * Time: 22:48.
 */

namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;

class Builder
{
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function getTopLevelMenu(array $options)
    {
        return $this->factory->createItem('Accueil', ['route' => 'homepage']);
    }
}
