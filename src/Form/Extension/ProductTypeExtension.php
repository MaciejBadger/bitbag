<?php

declare(strict_types=1);

namespace App\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('colors', ChoiceType::class, [
            'red' => 'red',
            'blue' => 'blue',
            'green' => 'green'
        ]);
    }

    public static function getExtendedTypes(): iterable
    {
        return [\Sylius\Bundle\CoreBundle\Form\Extension\ProductTypeExtension::class];
    }
}
