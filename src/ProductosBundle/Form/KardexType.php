<?php

namespace ProductosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class KardexType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('codigoMovimiento')
                ->add('codigoAgencia')
                ->add('saldoAnterior')
                ->add('precioAnterior')
                ->add('totalAnterior')
                ->add('salida')
                ->add('precioSalida')
                ->add('ingreso')
                ->add('precioIngreso')
                ->add('saldoFinal')
                ->add('totalFinal')
                ->add('fechaMovimiento')
                ->add('codigoEmpleado');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProductosBundle\Entity\Kardex'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'productosbundle_kardex';
    }


}
