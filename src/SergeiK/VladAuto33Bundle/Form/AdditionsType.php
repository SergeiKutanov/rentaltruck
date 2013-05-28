<?php

namespace SergeiK\VladAuto33Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use SergeiK\VladAuto33Bundle\Entity\Additions;

class AdditionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('abs', 'checkbox', array(
                'label'         => 'АБС: ',
                'required'      => false
        ))
            ->add('antislip', 'checkbox', array(
                'label'         => 'Антипробуксовочная система: ',
                'required'      => false
        ))
            ->add('lightsensor', 'checkbox', array(
                'label'         => 'Датчик света: ',
                'required'      => false
        ))
            ->add('rainsensor', 'checkbox', array(
                'label'         => 'Датчик дождя: ',
                'required'      => false
        ))
            ->add('conditioner', 'choice', array(
                'label'         => 'Кондиционер',
                'expanded'      => false,
                'multiple'      => false,
                'required'      => false,
                'empty_value'   => '--Выберите--',
                'choices'       => array(
                    Additions::NO_CONDITIONER       => Additions::getConditionerName(Additions::NO_CONDITIONER),
                    Additions::AIRCOND              => Additions::getConditionerName(Additions::AIRCOND),
                    Additions::CLIMATE_ONE          => Additions::getConditionerName(Additions::CLIMATE_ONE),
                    Additions::CLIMATE_TWO          => Additions::getConditionerName(Additions::CLIMATE_TWO),
                    Additions::CLIMATE_MORE         => Additions::getConditionerName(Additions::CLIMATE_MORE)
                )
        ))
            ->add('warmseats', 'checkbox', array(
                'label'         => 'Обогрев сидений: ',
                'required'      => false
        ))
            ->add('power_steering', 'checkbox', array(
                'label'         => 'Усилитель руля: ',
                'required'      => false
        ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SergeiK\VladAuto33Bundle\Entity\Additions'
        ));
    }

    public function getName()
    {
        return 'sergeik_vladauto33bundle_additionstype';
    }
}
