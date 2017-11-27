<?php

namespace ComprasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ComprasBundle\Form\ComprasEncType;
use ComprasBundle\Entity\ComprasEnc;
use ComprasBundle\Form\ComprasDetType;
use ComprasBundle\Entity\ComprasDet;
use ProductosBundle\Entity\Kardex;

class ComprasController extends Controller {

    public function indexAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $datos = $this->getDoctrine()
                    ->getRepository('ComprasBundle:ComprasEnc')
                    ->findAll();
            return $this->render('ComprasBundle:Default:ComprasLista.html.twig', compact("datos"));
            //return $this->render('ComprasBundle:Default:bTemplate.html.twig',compact("datos"));
        } else {
            $this->get('session')->getFlashBag()->add('Mensaje', 'Debe estar logueado para mostrar este contenido');
            return $this->redirect($this->generateUrl('login'));
        }

        return $this->render('ComprasBundle:Default:index.html.twig');
    }

    public function verCompraAction($codigoCompraEnc) {
        //$session = $request->getSession();
        //if ($session->has("id")) {

        $datoscompra = $this->getDoctrine()
                ->getRepository('ComprasBundle:ComprasDet')
                ->findBy(array('codigoCompraEnc' => $codigoCompraEnc));
        return $this->render('ComprasBundle:Default:verDetalleCompra.html.twig', compact("datoscompra"));
        //  return $this->render('ComprasBundle:Default:remTemplate.html.twig',compact("datoscompra"));
        // } else {
        //     $this->get('session')->getFlashBag()->add('Mensaje', 'Debe estar logueado para mostrar este contenido');
        //     return $this->redirect($this->generateUrl('login'));
        // }  
    }

    public function addAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) 
        {
            $compra = new ComprasEnc();
            $fecha = new \DateTime('today');
            $compra->setFechaIngreso($fecha);
            $compra->setTotal(0.00);
            $compra->setCodigoEmpleado($session->get('id'));  
            
            $form = $this->createForm(ComprasEncType::class, $compra);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) 
            {
                       
                $em = $this->getDoctrine()->getManager();
                $em->persist($compra);
                $em->flush();

                return $this->redirect($this->generateUrl('editcompra', array('codigoCompraEnc' => $compra->getCodigoCompraEnc())));
            }

            return $this->render('ComprasBundle:Default:addCompra.html.twig', array("form" => $form->createView()));
        } else {
            $this->get('session')->getFlashbag()->add('Mensaje', 'Debe estar logueado para mostrar este contenido');
            return $this->redirect($this->generateUrl('login'));
        }
    }

    public function addcompraencAction(Request $request) {
        /* $session = $request -> getSession();
          if ($session->has("id"))
          {
          $compra=new ComprasEnc();
          $form = $this->createForm(ComprasEncType::class,$compra,array('action'=>$this->generateUrl('addcompra'),'method'=>'POST'));
         */
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($compra);
            $em->flush();

            //return $this->redirect($this->generateUrl('editcompra',array('codigoCompraEnc'=>$compra->getCodigoCompraEnc())));                 
        }

        return $this->render('ComprasBundle:Default:addCompra.html.twig', array("form" => $form->createView()));

        //}
        /* else
          {
          $this->get('session')->getFlashbag()->add('Mensaje','Debe estar logueado para mostrar este contenido');
          return $this->redirect($this->generateUrl('login'));

          }
         */
    }

    public function editAction($codigoCompraEnc, Request $request) {
        $compraEnc = New ComprasEnc();
        $compraenc = $this->getDoctrine()
                ->getRepository('ComprasBundle:ComprasEnc')
                ->findBy(array('codigoCompraEnc' => $codigoCompraEnc));
        if (!$compraenc) {
            throw $this->createNotFoundException('No existe compra con valor ' . $codigoCompraEnc);
        } else {
            //$compradet=new ComprasDet();
            //$compraDet->setCodigoCompraEnc($codigoCompraEnc);
            $compradet = $this->getDoctrine()
                    ->getRepository('ComprasBundle:ComprasDet')
                    ->findBy(array('codigoCompraEnc' => $codigoCompraEnc));

            /*
              $form = $this->createForm(ComprasDetType::class,$compradet);
              $form->handleRequest($request);
              if($form->isSubmitted() && $form->isValid())
              {
              $em=$this->getDoctrine()->getManager();
              $em->persist($compradet);
              $em->flush();
              // return $this->render('ComprasBundle:Default:ComprasDet.html.twig', compact("datos"),array("form" => $form->createView()));
              } */
            //return $this->render('ComprasBundle:Default:ComprasDet.html.twig',array('data'=>$datos,'formDet'=>$form->createView())); 
            return $this->render('ComprasBundle:Default:ComprasDet.html.twig', array('CompraEnc' => $compraenc, 'CompraDet' => $compradet));
            // array("data"=>compact("datos"),"formDet"=>$form->createView()));//array("data"=>compact("datos"),"form" => $form->createView()));            
        }
    }

    public function addproductocompraAction($codigoCompraEnc, Request $request) {
        $session = $request->getSession();
        $compraDet = New ComprasDet();
        $compraDet->setCodigoCompraEnc($codigoCompraEnc);
        $datos = $this->getDoctrine()
                ->getRepository('ComprasBundle:ComprasEnc')
                ->findBy(array('codigoCompraEnc' => $codigoCompraEnc));

        $form = $this->createForm(ComprasDetType::class, $compraDet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            $prod=$compraDet->getProducto();
            //$prod=$compraDet->getCodigoProducto();
            $kardexold = $em->getRepository('ProductosBundle:Kardex')->findBy(array('codigoProducto'=>$prod->getCodigoProducto()));
            $compraEnc = $em->getRepository('ComprasBundle:ComprasEnc')->find($codigoCompraEnc);
            
            $total = $compraEnc->GetTotal();
            $total = $total + ($compraDet->getCantidad() * $compraDet->getCosto());
            
            $em->persist($compraDet);
            $em->flush();

            $compraEnc->SetTotal($total);
            $em->persist($compraEnc);
            $em->flush();
            //$compraEnc= $em->getRepository('ComprasBundle:ComprasEnc')->find($codigoCompraEnc);
            
            if (!$kardexold) {
                $kardex = new Kardex();
                $kardex->setCodigoMovimiento('I');
                $fecha = new \DateTime('today');

                $kardex->setFechaMovimiento($fecha);
                $kardex->setCodigoProducto($prod->getCodigoProducto());
                $saldoA = 0;//$kardex->getSaldoFinal($compraDet->getCodigoProducto());
                if ($compraDet->getBDocena() == 1) 
                {
                    $saldoF = $compraDet->getCantidad() * 12;//$saldoA + ($compraDet->getCantidad() * 12);
                } else {
                    $saldoF = $compraDet->getCantidad();//$saldoA + $compraDet->getCantidad();
                }
                $totalF = $compraDet->getCosto() * $saldoF;
                $totalA = 0;//$kardex->getTotalFinal($compraDet->getCodigoProducto());
                $kardex->setSaldoAnterior($totalA);
                $kardex->setSaldoFinal($saldoF);
                $kardex->setSalida(0);
                $kardex->setPrecioSalida(0);
                $kardex->setIngreso($saldoF);
                $kardex->setPrecioIngreso($compraDet->getCosto());
                $kardex->setTotalAnterior(0);
                $kardex->setTotalFinal($totalF);
                $kardex->setCodigoEmpleado($session->get('id'));
                $kardex->setcodigoCompra($codigoCompraEnc);
                $em->persist($kardex);
                $em->flush();
                
                
                
                
                
                
            }
            /*
            else
            {
             $saldoA=$kardexold->getSaldoFinal();
             $totalA=$kardexold->getTotalAnterior();
             
             $kardex = new Kardex();
             $kardex->setCodigoMovimiento('S');
             $fecha = new \DateTime('today');
                
            }
            */

            //return $this->redirect($this->generateUrl('editcompra',array('codigoCompraEnc'=>$compra->getCodigoCompraEnc()))); 
            //return $this->render('ComprasBundle:Default:ComprasDet.html.twig',array('data'=>$datos,'datadet'=>$compraDet)); 
            return $this->redirect($this->generateUrl('editcompra', array('codigoCompraEnc' => $compraDet->getCodigoCompraEnc())));
        }
        return $this->render('ComprasBundle:Default:addDetCompra.html.twig', array("data" => $datos, "form" => $form->createView()));
    }

    public function adddetcompraAction($codigoCompraEnc, Request $request) {
        $compraEnc = New ComprasEnc();
        $datos = $this->getDoctrine()
                ->getRepository('ComprasBundle:ComprasEnc')
                ->findBy(array('codigoCompraEnc' => $codigoCompraEnc));
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($adddetcompra);
            $em->flush();
            // return $this->redirect($this->generateUrl('editcompra',array('codigoCompraEnc'=>$compra->getCodigoCompraEnc()))); 
        }
        // return $this->render('ComprasBundle:Default:addDetCompra.html.twig', array("form" => $form->createView()));   
    }

}
