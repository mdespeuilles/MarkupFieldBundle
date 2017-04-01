<?php
namespace Mdespeuilles\MarkupFieldBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MarkupType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'mapped' => false,
            'markup' => null
        ]);
    }
    
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['markup'] = $options['markup'];
    }
    
    public function getParent()
    {
        return TextType::class;
    }
}