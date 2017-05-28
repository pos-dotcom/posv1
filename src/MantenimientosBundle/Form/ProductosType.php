<?php

namespace MantenimientosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
\Symfony\Component\Form\Extension\Core\Type\DateType;

class ProductosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('codigoArticulo',TextType::class,array("required"=>true))
                ->add('codigoCategoria',EntityType::class,
                       array('class'=>'MantenimientosBundle\Entity\Categorias',
                    'choice_value'=>'codigoCategoria','choice_label'=>'nombreCategoria'))
                ->add('nombre',TextType::class,array("required"=>true))
                ->add('precioCosto')
                ->add('precioVenta')
                ->add('precioFacturado')
                ->add('ganancia')
                ->add('existencia',TextType::class,array("required"=>true))
                ->add('existenciaPrevia',TextType::class,array("required"=>true))
                ->add('ultimaCompra',DateType::class,array("required"=>true))
                ->add('ultimaVenta',DateType::class,array("required"=>true))
                ->add('docena',TextType::class,array("required"=>true))
                ->add('bPrecioDocena',TextType::class,array("required"=>true))
                ->add('bActivo',TextType::class,array("required"=>true))
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
