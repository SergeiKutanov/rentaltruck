<?php

namespace SergeiK\VladAuto33Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PricesWithoutDriverType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('day', 'money', array(
                'label'     => 'За сутки',
                'currency'  => 'RUB',
                'divisor'   => 100,
                'precision' => 2
        ))
            ->add('threeDays', 'money', array(
                'label'     => 'От трёх до пяти суток',
                'currency'  => 'RUB',
                'divisor'   => 100,
                'precision' => 2
        ))
            ->add('week', 'money', array(
                'label'     => 'За неделю',
                'currency'  => 'RUB',
                'divisor'   => 100,
                'precision' => 2
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SergeiK\VladAuto33Bundle\Entity\PricesWithoutDriver'
        ));
    }

    public function getName()
    {
        return 'sergeik_vladauto33bundle_priceswithoutdrivertype';
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'SergeiK\VladAuto33Bundle\Entity\PricesWithoutDriver'
        );
    }
}
