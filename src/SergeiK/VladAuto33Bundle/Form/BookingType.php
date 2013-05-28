<?php

namespace SergeiK\VladAuto33Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BookingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array(
                'label'     => 'Ваше имя: ',
                'required'  => true
        ))
            ->add('start_date', 'date', array(
                'label'         => 'Дата выдачи авто: ',
                'widget'        => 'choice',
                'required'      => true,
                'empty_value'   => array(
                    'year'  => '--Год--',
                    'month' => '--Месяц--',
                    'day'   => '--День--'
                ),
                'years'      => range(date('Y'), date('Y')+1),
                'format'    => 'y-MMMM-d'
        ))
            ->add('over_date', 'date', array(
                'label'         => 'Дата сдачи авто: ',
                'widget'        => 'choice',
                'required'      => true,
                'empty_value'   => array(
                    'year'  => '--Год--',
                    'month' => '--Месяц--',
                    'day'   => '--День--'
                ),
                'years'      => range(date('Y'), date('Y')+1),
                'format'    => 'y-MMMM-d'
        ))
            ->add('phone', 'text', array(
                'label'     => 'Номер телефона: ',
                'required'  => true
        ))
           ->add('email', 'email', array(
                'label'     => 'Email: ',
                'required'  => true
        ))
            ->add('car', 'entity', array(
                'label'     => 'Выберите автомобиль',
                'class'     => 'SergeiKVladAuto33Bundle:Car',
                'property'  => 'name',
                'query_builder' => function(\Doctrine\ORM\EntityRepository $er)
                {
                    return $er->createQueryBuilder('u')
                        ->where('u.published = :pub')
                        ->setParameter('pub', '1')
                        ->orderBy('u.name', 'ASC');
                },
                'multiple'  => false,
                'expanded'  => true,
                'empty_value'   => '--Укажите автомобиль--'
        ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SergeiK\VladAuto33Bundle\Entity\Booking'
        ));
    }

    public function getName()
    {
        return 'sergeik_vladauto33bundle_bookingtype';
    }
}
