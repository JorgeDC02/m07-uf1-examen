<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 19/11/15
 * Time: 18:41
 */

namespace AppBundle\Controller;

use AppBundle\Service\CadenaService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class CadenaController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/UpperCase", name="upperCase")
     */
    public function upperCaseAction()
    {
        $action='doUpperCase';
        return $this->render(':cadenas:form.html.twig',['action'=>$action]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/doUpperCase", name="doUpperCase")
     */
    public function doUpperCase(Request $request)
    {
        $txt1=$request->request->get('inp1');
        $txt2=$request->request->get('inp2');

        $serv=$this->container->get('app.service.cadena_service');

        $serv->setCampo1($txt1);
        $serv->setCampo2($txt2);
        $serv->mayuscula();
        $result=$serv->getResultado();

        return $this->render(':cadenas:resultado.html.twig',['result'=>$result]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/minuscula", name="minuscula")
     */
    public function minuscula()
    {
        $action='doMinuscula';
        return $this->render(':cadenas:form.html.twig',['action'=>$action]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/doMinuscula", name="doMinuscula")
     */
    public function doMinuscula(Request $request)
    {
        $txt1=$request->request->get('inp1');
        $txt2=$request->request->get('inp2');

        $serv=$this->container->get('app.service.cadena_service');

        $serv->setCampo1($txt1);
        $serv->setCampo2($txt2);
        $serv->minuscula();
        $result=$serv->getResultado();

        return $this->render(':cadenas:resultado.html.twig',['result'=>$result]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/longitud", name="longitud")
     */
    public function longitud()
    {
        $action='doLongitud';
        return $this->render(':cadenas:form.html.twig',['action'=>$action]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/doLongitud", name="doLongitud")
     */
    public function doLongitud(Request $request)
    {
        $txt1=$request->request->get('inp1');
        $txt2=$request->request->get('inp2');

        $serv=$this->container->get('app.service.cadena_service');

        $serv->setCampo1($txt1);
        $serv->setCampo2($txt2);
        $serv->longitud();
        $result=$serv->getResultado();

        return $this->render(':cadenas:resultado.html.twig',['result'=>$result]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/concatena", name="concatena")
     */
    public function concatena()
    {
        $action='doConcatena';
        return $this->render(':cadenas:form.html.twig',['action'=>$action]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/doConcatena", name="doConcatena")
     */
    public function doConcatena(Request $request)
    {
        $txt1=$request->request->get('inp1');
        $txt2=$request->request->get('inp2');

        $serv=$this->container->get('app.service.cadena_service');

        $serv->setCampo1($txt1);
        $serv->setCampo2($txt2);
        $serv->concatena();
        $result=$serv->getResultado();

        return $this->render(':cadenas:resultado.html.twig',['result'=>$result]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/caracterUbicacion", name="caracterUbicacion")
     */
    public function caracterUbicacion()
    {
        $action='doCaracterUbicacion';
        return $this->render(':cadenas:form.html.twig',['action'=>$action]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/doCaracterUbicacion", name="doCaracterUbicacion")
     */
    public function doCaracterUbicacion(Request $request)
    {
        $txt1=$request->request->get('inp1');
        $txt2=$request->request->get('inp2');

        $serv=$this->container->get('app.service.cadena_service');

        $serv->setCampo1($txt1);
        $serv->setCampo2($txt2);
        $serv->caracterUbicacion();
        $result=$serv->getResultado();

        return $this->render(':cadenas:resultado.html.twig',['result'=>$result]);
    }
}