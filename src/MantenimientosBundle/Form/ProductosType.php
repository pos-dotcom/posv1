<?php

namespace MantenimientosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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
        $builder->add('codigoArticulo',TextType::class,array('label'=>"Codigo","required"=>true))
                ->add('codigoCategoria',EntityType::class,
                       array('class'=>'MantenimientosBundle\Entity\Categorias',
                    'choice_value'=>'codigoCategoria','choice_label'=>'nombreCategoria','label'=>"Categoria"))
                ->add('nombre',TextType::class,array('label'=>"Nombre"))
                ->add('precioCosto',TextType::class,array('label'=>"Costo"))
                ->add('precioVenta',TextType::class,array('label'=>"Precio Venta"))
                ->add('precioFacturado',TextType::class,array('label'=>"Precio Facturado"))
                ->add('ganancia',TextType::class,array('label'=>"Ganancia"))
                ->add('existencia',TextType::class,array('label'=>"Unidades"))
                ->add('existenciaPrevia',TextType::class,array('label'=>"Existencia Previa"))
                ->add('ultimaCompra',DateType::class,array('label'=>"Ultima Compra"))
                ->add('ultimaVenta',DateType::class,array('label'=>"Ultima Venta"))
                ->add('docena',TextType::class,array('label'=>"Docena"))
                ->add('bPrecioDocena',CheckboxType::class,array('label'=>"Precio Docena"))
                ->add('bActivo',CheckboxType::class)
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
