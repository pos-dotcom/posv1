<?php

namespace ComprasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ComprasDetType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('producto',EntityType::class,
                       array('class'=>'MantenimientosBundle\Entity\Productos',
                    'choice_value'=>'codigoProducto',
                    'choice_label'=> function(\MantenimientosBundle\Entity\Productos $prod)
                                     {
                                        $codigo= $prod->getCodigoArticulo();
                                        $nom   =   $prod->getNombre();
                                        return $codigo ." - ".$nom; 
                                     },'attr'=>array('class'=>'form-control select2')))
                ->add('codigoCompraEnc', HiddenType::class)
                ->add('cantidad',TextType::class,array('label'=>"Cantidad",'required'=>true))
                ->add('bDocena',CheckboxType::class,array('label'=>"Docena",'required'=>False,'attr'=>array('style'=>"width: 20px; height:20px;padding-top: 6px; padding-bottom: 6px;alignment-baseline: middle")))
                ->add('costo');                
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ComprasBundle\Entity\ComprasDet'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'comprasbundle_comprasdet';
    }


}
