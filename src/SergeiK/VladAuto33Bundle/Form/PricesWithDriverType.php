<?php

namespace SergeiK\VladAuto33Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PricesWithDriverType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('day', 'money', array(
                'label'     => 'За сутки',
                'currency'  => 'RUB',
                'precision' => 2
        ))
            ->add('threeDays', 'money', array(
            'label'     => 'От трех до пяти суток',
            'currency'  => 'RUB',
            'precision' => 2
        ))
            ->add('week', 'money', array(
            'label'     => 'За неделю',
            'currency'  => 'RUB',
            'precision' => 2
        ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SergeiK\VladAuto33Bundle\Entity\PricesWithDriver'
        ));
    }

    public function getName()
    {
        return 'sergeik_vladauto33bundle_priceswithdrivertype';
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'SergeiK\VladAuto33Bundle\Entity\PricesWithDriver'
        );
    }
}
