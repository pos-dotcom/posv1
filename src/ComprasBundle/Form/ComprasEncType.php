<?php

namespace ComprasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ComprasEncType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('numFactura',  TextType::class,array('label'=>'Numero Factura:'))
                ->add('fechaCompra',  DateType::class,array('label'=>'Fecha Compra:'))
                //->add('codigoProveedor')
                ->add('observacion',TextareaType::class,array('label'=>'Observación:'))
                
                ->add('empleado',EntityType::class,
                       array('class'=>'MantenimientosBundle\Entity\Empleados',
                    'choice_value'=>'codigoEmpleado','choice_label'=>'nombres'))
                ->add('proveedor',EntityType::class,
                       array('class'=>'MantenimientosBundle\Entity\Proveedor',
                    'choice_value'=>'codigoProveedor','choice_label'=>'nombreProveedor'));
               // ->add('save',SubmitType::class, array('label' => 'GUARDAR','attr'=>array('id'=>'submitForm')));
                //->add('proveedor');
    } 
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ComprasBundle\Entity\ComprasEnc'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'comprasbundle_comprasenc';
    }


}
