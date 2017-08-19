<?php

namespace MantenimientosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ProductosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('codigoArticulo',TextType::class,array('label'=>"Codigo"))
                ->add('categorias',EntityType::class,
                       array('class'=>'MantenimientosBundle\Entity\Categorias',
                    'choice_value'=>'codigoCategoria','choice_label'=>'nombreCategoria'))
                ->add('nombre',TextType::class,array('label'=>"Nombre"))
                ->add('precioVenta',TextType::class,array('label'=>"Precio Venta",'required'=>False))
                ->add('precioCosto',TextType::class,array('label'=>"Costo",'required'=>False))
                ->add('ganancia',TextType::class,array('label'=>"Ganancias",'required'=>False))
                ->add('existencia',TextType::class,array('label'=>"Unidades",'required'=>False))
                ->add('docena',TextType::class,array('label'=>"Docena",'required'=>False))
                ->add('bPrecioDocena',CheckboxType::class,array('label'=>"Precio Docena",'required'=>False,'attr'=>array('style'=>"width: 20px; height:20px;padding-top: 6px; padding-bottom: 6px;alignment-baseline: middle")))
                ->add('save', SubmitType::class, array('label' => 'GUARDAR'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MantenimientosBundle\Entity\Productos'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'mantenimientosbundle_productos';
    }


}
