<?php

namespace SergeiK\VladAuto33Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use SergeiK\VladAuto33Bundle\Form\PricesWithoutDriverType;

class CarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array(
                'label'     => 'Марка, модель: ',
                'required'  => true,
                'read_only' => false
        ))
            ->add('pricesWithoutDriver', new PricesWithoutDriverType(), array(
                'label'     => 'Cтоимость аренды автомобиля без водителя'
        ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SergeiK\VladAuto33Bundle\Entity\Car'
        ));
    }

    public function getName()
    {
        return 'sergeik_vladauto33bundle_cartype';
    }
}
