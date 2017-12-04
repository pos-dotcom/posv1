<?php

namespace VentasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VentasEncType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('codigoVentaEnc')
                ->add('numFactura')
                ->add('vendedor',EntityType::class,
                        array('class'=>'MantenimientosBundle\Entity\Empleados',
                            'choice_value'=>'codigoEmpleado',
                            'choice_label'=>'nombres'))
                ->add('fechaVenta', TextType::class,array('attr'=>array('class'=>"form-control pull-right")))
                ->add('tipoVenta')
                ->add('montoTotal')
                ->add('gananciaTotal')
                ->add('agencia',EntityType::class,
                        array('class'=>'MantenimientoBundle\Entity\Agencia',
                            'choice_value'=>'codigoAgencia',
                            'choice_label'=>'nombreAgencia'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VentasBundle\Entity\VentasEnc'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ventasbundle_ventasenc';
    }


}
