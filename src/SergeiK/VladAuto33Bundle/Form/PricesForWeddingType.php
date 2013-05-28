<?php

namespace SergeiK\VladAuto33Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PricesForWeddingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('hour', 'money', array(
                'label'     => 'За час',
                'currency'  => 'RUB',
                'precision' => 2
        ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SergeiK\VladAuto33Bundle\Entity\PricesForWedding'
        ));
    }

    public function getName()
    {
        return 'sergeik_vladauto33bundle_pricesforweddingtype';
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'SergeiK\VladAuto33Bundle\Entity\PricesForWedding'
        );
    }
}
