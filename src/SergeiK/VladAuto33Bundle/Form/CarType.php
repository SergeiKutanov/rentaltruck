<?php

namespace SergeiK\VladAuto33Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use SergeiK\VladAuto33Bundle\Form\PricesWithoutDriverType;
use SergeiK\VladAuto33Bundle\Form\PricesWithDriverType;
use SergeiK\VladAuto33Bundle\Form\PricesForWeddingType;
use SergeiK\VladAuto33Bundle\Form\PhotoType;
use SergeiK\VladAuto33Bundle\Entity\Car;
use SergeiK\VladAuto33Bundle\Form\AdditionsType;

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
            ->add('vin', 'text', array(
                'label'     => 'VIN: ',
                'required'  => false
        ))
            ->add('engineId', 'text', array(
                'label'     => 'Номер двигателя: ',
                'required'  => false
        ))
            ->add('pts', 'text', array(
                'label'     => 'ПТС: ',
                'required'  => false
        ))
            ->add('sts', 'text', array(
                'label'     => 'CТС: ',
                'required'  => false
        ))
            ->add('plate', 'text', array(
                'label'     => 'Рег. знак: ',
                'required'  => false
        ))
            ->add('osago', 'text', array(
                'label'     => 'Полис ОСАГО, №: ',
                'required'  => false
        ))
            ->add('osago_date', null, array(
                'label'     => 'Дата выдачи полиса: ',
                'required'  => false
        ))
            ->add('year', 'date', array(
                'label'         => 'Год выпуска: ',
                'widget'        => 'choice',
                'empty_value'   => '--Год выпуска--',
                'years'         => range(1980, date('Y'))
        ))
            ->add('transmission', 'choice', array(
                'label'         => 'Тип КПП: ',
                'expanded'      => false,
                'multiple'      => false,
                'required'      => true,
                'empty_value'   => '--Выберитре тип КПП--',
                'choices'       => array(
                    Car::MANUAL     => Car::getTransmissionName(Car::MANUAL),
                    Car::AUTOMATIC  => Car::getTransmissionName(Car::AUTOMATIC),
                    Car::VARIATOR   => Car::getTransmissionName(Car::VARIATOR),
                    Car::ROBOT      => Car::getTransmissionName(Car::ROBOT)
                )
        ))
            ->add('consumption', 'number', array(
                'label'     => 'Средний расход: ',
                'precision' => 1,
                'required'  => true
        ))
            ->add('seats', 'number', array(
                'label'     => 'Колличество посадочных мест: ',
                'required'  => true
        ))
            ->add('height', 'number', array(
                'label'     => 'Высота грузового отделения (см): ',
                'required'  => false
        ))
            ->add('width', 'number', array(
                'label'     => 'Ширина грузового отделения (см): ',
                'required'  => false
        ))
            ->add('depth', 'number', array(
            'label'     => 'Глубина грузового отделения (см): ',
            'required'  => false
        ))
            ->add('capacity', 'number', array(
            'label'     => 'Грузоподъёмность (кг): ',
            'required'  => false
        ))
            ->add('deposit', 'money', array(
                'label'     => 'Стоимость залога: ',
                'currency'  => 'RUB',
                'precision' => 2
        ))
            ->add('additions', new AdditionsType(), array(
                'label'     => 'Комплектация'
        ))
            ->add('pricesWithoutDriver', new PricesWithoutDriverType(), array(
                'label'     => 'Cтоимость аренды автомобиля без водителя'
        ))
            ->add('pricesWithDriver', new PricesWithDriverType(), array(
                'label'     => 'Стоимость аренды автомобиля с водителем'
        ))
            ->add('pricesForWedding', new PricesForWeddingType(), array(
                'label'     => 'Стоимость аренды автомобиля за час'
        ))
            ->add('photos', 'collection', array(
                'label'         => 'Фотографии',
                'type'          => new PhotoType(),
                'allow_add'     => true,
                'allow_delete'  => true,
                'by_reference'  => false
        ))
            ->add('info', 'textarea', array(
                'label'         => 'Дополнительная информация:',
                'required'      => false
        ))
            ->add('published', 'checkbox', array(
                'label'         => 'Опубликовать',
                'required'      => false
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
