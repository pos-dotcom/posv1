<?php

namespace VentasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VentasDetType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('codigoVentaDet')->add('codigoVentaEnc')->add('numFactura')->add('fechaVenta')->add('codigoProducto')->add('cantidad')->add('monto')->add('ganancia')->add('codigoCategoria')->add('precioVenta')->add('descuento')->add('precioFacturado')->add('codigoAgencia');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VentasBundle\Entity\VentasDet'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ventasbundle_ventasdet';
    }


}
