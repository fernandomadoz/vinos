<?php

namespace App\Http\Controllers;
use App\Publicidad;
use App\Noticia;
use App\Varietal;
use App\Slider;
use App\Producto;
use App\Imagen_de_producto;
use App\Pedido;
use App\Seccion;
use App\Linea_de_pedido;
use App\User;

use Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ExtController;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {   
        $Destacados = Producto::where('sino_es_destacado', 'SI')->get();
        $Nuevos = Producto::where('sino_es_nuevo', 'SI')->get();
        $Ofertas = Producto::where('sino_es_oferta', 'SI')->get();
        $Noticias = Noticia::where('sino_es_destacada', 'SI')->get();

        $MasVendidos = DB::table('productos as p')
            ->select(DB::Raw('p.id, p.titulo_del_producto, p.moneda_importe, p.file_imagen_principal, COUNT(lp.id) cant'))
            ->leftjoin('lineas_de_pedido as lp', 'p.id', '=', 'lp.producto_id')
            ->orderBy('cant', 'desc')
            ->groupBy('p.id')
            ->limit(9)
            ->get();

        $Slider = Slider::whereRaw('sino_es_combo IS NULL or sino_es_combo = "NO"')->orderBy('orden')->get();
        $Combo = Slider::where('sino_es_combo', 'SI')->get();

        $varshome = $this->varshome();


        return View('welcome')
        ->with('Destacados', $Destacados)
        ->with('Nuevos', $Nuevos)
        ->with('Ofertas', $Ofertas)
        ->with('MasVendidos', $MasVendidos)
        ->with('Noticias', $Noticias)
        ->with('Slider', $Slider)
        ->with('Combo', $Combo)
        ->with('varshome', $varshome);
    }

    public function backEndHome()
    {   
        //$Solicitudes = Solicitud::all();

        return View('welcome-back-end');
    }



    public function miCuenta()
    {   
        $user_id = Auth::user()->id;
        $User = User::find($user_id);

        return View('mi-cuenta')
        ->with('User', $User);
    }


    public function verNoticia($noticia_id)
    {   

        $Noticia = Noticia::find($noticia_id);

        //$Imagenes_de_producto = Imagen_de_producto::where('producto_id', $producto_id)->get();

        $varshome = $this->varshome();

        return View('frontend.ver-noticia')
        ->with('Noticia', $Noticia)
        ->with('varshome', $varshome);

    }


    public function verVarietal($id)
    {   

        $Productos = Producto::where('varietal_id', $id)->get();

        $Varietal = Varietal::find($id);

        if ($Varietal->file_imagen == '') {
            $file_imagen = ENV('PATH_PUBLIC').'images/shop/banner_shop.jpg';
        }
        else {
            $file_imagen = ENV('PATH_PUBLIC').'storage/'.$Varietal->file_imagen;
        }

        $titulo = $Varietal->varietal;
        $varshome = $this->varshome();

        return View('frontend.list-productos')
        ->with('Productos', $Productos)
        ->with('file_imagen', $file_imagen)
        ->with('titulo', $titulo)
        ->with('varshome', $varshome);
    }



    public function verProducto($producto_id)
    {   

        $Producto = Producto::find($producto_id);

        $Imagenes_de_producto = Imagen_de_producto::where('producto_id', $producto_id)->get();

        $varshome = $this->varshome();

        return View('frontend.ver-producto')
        ->with('Producto', $Producto)
        ->with('Imagenes_de_producto', $Imagenes_de_producto)
        ->with('varshome', $varshome);
    }


    public function blog()
    {   

        $Noticias = Noticia::all();
        $varshome = $this->varshome();

        return View('frontend.noticias')
        ->with('Noticias', $Noticias)
        ->with('varshome', $varshome);
    }

    public function contacto()
    {   

        $varshome = $this->varshome();

        return View('frontend.contacto')
        ->with('varshome', $varshome);
    }



    public function verSeccion($id)
    {   


        $Productos = DB::table('productos as p')
            ->select(DB::Raw('p.*'))
            ->leftjoin('varietales as v', 'v.id', '=', 'p.varietal_id')
            ->where('v.seccion_id', $id)
            ->get();

        $Seccion = Seccion::find($id);

        if ($Seccion->file_imagen == '') {
            $file_imagen = ENV('PATH_PUBLIC').'images/shop/banner_shop.jpg';
        }
        else {
            $file_imagen = ENV('PATH_PUBLIC').'storage/'.$Seccion->file_imagen;
        }

        $titulo = $Seccion->seccion;
        $varshome = $this->varshome();

        return View('frontend.list-productos')
        ->with('Productos', $Productos)
        ->with('file_imagen', $file_imagen)
        ->with('titulo', $titulo)
        ->with('varshome', $varshome);
    }


    public function resBusqueda()
    {   

        $criterio = $_POST['criterio'];
        $Productos = Producto::whereRaw("titulo_del_producto like '%$criterio%'")->get();

        $file_imagen = '';
        $titulo = 'Resultados de Búsqueda: '.$criterio;

        $varshome = $this->varshome();

        return View('frontend.list-productos')
        ->with('Productos', $Productos)
        ->with('file_imagen', $file_imagen)
        ->with('titulo', $titulo)
        ->with('varshome', $varshome);
    }

    public function cartList()
    {   
        $infoList = $this->infoList();

        $sesion_id = $infoList['sesion_id'];
        $titulo = $infoList['titulo'];
        $Lineas_de_pedido = $infoList['Lineas_de_pedido'];

        $varshome = $this->varshome();

        return View('frontend.cart-list')
        ->with('Lineas_de_pedido', $Lineas_de_pedido)
        ->with('titulo', $titulo)
        ->with('varshome', $varshome);

    }


    public function delItem($id)
    {   
        Linea_de_pedido::where('id', $id)->delete();

        $infoList = $this->infoList();

        $sesion_id = $infoList['sesion_id'];
        $titulo = $infoList['titulo'];
        $Lineas_de_pedido = $infoList['Lineas_de_pedido'];

        $varshome = $this->varshome();

        return View('frontend.cart-list')
        ->with('Lineas_de_pedido', $Lineas_de_pedido)
        ->with('titulo', $titulo)
        ->with('varshome', $varshome);

    }

    public function infoList()
    {   
        $sesion_id = Session()->get('sesion_id');
        $Lineas_de_pedido = DB::table('productos as p')
            ->select(DB::Raw('lp.id, lp.producto_id, p.titulo_del_producto, lp.moneda_importe, lp.moneda_importe_total, lp.cantidad, p.file_imagen_principal, v.varietal, s.seccion'))
            ->leftjoin('varietales as v', 'v.id', '=', 'p.varietal_id')
            ->leftjoin('secciones as s', 's.id', '=', 'v.seccion_id')
            ->leftjoin('lineas_de_pedido as lp', 'p.id', '=', 'lp.producto_id')
            ->leftjoin('pedidos as pe', 'pe.id', '=', 'lp.pedido_id')
            ->where('pe.sesion_id', $sesion_id)
            ->get();


        $titulo = 'Carro de Pedido';
        $cantCarrito = $this->cantCarrito();


        $valores = [
            'cantCarrito' => $cantCarrito,
            'titulo' => $titulo,
            'sesion_id' => $sesion_id,
            'Lineas_de_pedido' => $Lineas_de_pedido
        ];

        return $valores;


    }

    public function varshome()
    {   

        $MasVendidos_3 = DB::table('productos as p')
            ->select(DB::Raw('p.id, p.titulo_del_producto, p.moneda_importe, p.file_imagen_principal, p.cantidad_de_estrellas, COUNT(lp.id) cant'))
            ->leftjoin('lineas_de_pedido as lp', 'p.id', '=', 'lp.producto_id')
            ->orderBy('cant', 'desc')
            ->groupBy('p.id')
            ->limit(3)
            ->get();
        
        $RecienLlegados = Producto::orderBy('id', 'desc')
            ->limit(3)
            ->get();

        $Popular = Producto::where('sino_es_popular_destacado', 'SI')
            ->limit(1)
            ->get();

        $cantCarrito = $this->cantCarrito();

        $varshome = [
            'carro_cant' => $cantCarrito['carro_cant'],
            'carro_importe' => $cantCarrito['carro_importe'],
            'RecienLlegados' => $RecienLlegados,
            'MasVendidos_3' => $MasVendidos_3,
            'Popular' => $Popular
        ];

        return $varshome;
    }


    public function cantCarrito()
    {   

        $sesion_id = Session()->get('sesion_id');
        $cant_pedido = Pedido::where('sesion_id', $sesion_id)->count();
        if ($cant_pedido > 0) {
            $Pedido = Pedido::where('sesion_id', $sesion_id)->get();
            $Lineas_de_pedido = Linea_de_pedido::where('pedido_id', $Pedido[0]->id)->get();
            $carro_cant = Linea_de_pedido::where('pedido_id', $Pedido[0]->id)->count();
            $carro_importe = 0;
            foreach ($Lineas_de_pedido as $linea) {
                $carro_importe = $carro_importe + $linea->moneda_importe_total;
            }
        } 
        else {
            $carro_cant = 0;
            $carro_importe = 0;

        }

        $cantCarrito = [
            'carro_cant' => $carro_cant,
            'carro_importe' => $carro_importe
            ];

        return $cantCarrito;
    }

    public function enviarPedido()
    {   
        $sesion_id = Session()->get('sesion_id');
        $Lineas_de_pedido = DB::table('productos as p')
            ->select(DB::Raw('lp.id, lp.producto_id, p.titulo_del_producto, lp.moneda_importe, lp.moneda_importe_total, lp.cantidad, p.file_imagen_principal, v.varietal, s.seccion'))
            ->leftjoin('varietales as v', 'v.id', '=', 'p.varietal_id')
            ->leftjoin('secciones as s', 's.id', '=', 'v.seccion_id')
            ->leftjoin('lineas_de_pedido as lp', 'p.id', '=', 'lp.producto_id')
            ->leftjoin('pedidos as pe', 'pe.id', '=', 'lp.pedido_id')
            ->where('pe.sesion_id', $sesion_id)
            ->get();

        $texto_inicio = 'Hola Guillermo quiero hacer un pedido a LBVinos (Pedido #'.$sesion_id.")\n"."\n";
        $texto_productos = '';
        $total = 0;
        foreach ($Lineas_de_pedido as $Linea) {
            $texto_productos .= $Linea->cantidad.' '.$Linea->titulo_del_producto."\n";
            $total = $total+$Linea->moneda_importe_total;
        }

        
        $texto_final = "\n".'*Total: $ '.$total.'*';
        $texto = $texto_inicio.$texto_productos.$texto_final;
        $texto_encode = urlencode($texto);


        $url = 'https://api.whatsapp.com/send?phone=5493462563034&text='.$texto_encode;
        $Pedido = Pedido::where('sesion_id', $sesion_id)->get();
        $Pedido = $Pedido[0];
        $Pedido->moneda_importe_total = $total;
        $Pedido->sino_solicitado = 'SI';        
        $Pedido->save();


        $titulo = '';
        $varshome = $this->varshome();

        return View('frontend.enviar-pedido')
        ->with('url', $url)
        ->with('Pedido', $Pedido)
        ->with('titulo', $titulo)
        ->with('varshome', $varshome);

        return redirect($url);

    }





    public function bodyProductView()
    {   

        $producto_id = $_POST['producto_id'];

        $Producto = Producto::find($producto_id);

        $Imagenes_de_producto = Imagen_de_producto::where('producto_id', $producto_id)->get();

        return View('frontend.body-modal-product-view')
        ->with('Producto', $Producto)
        ->with('Imagenes_de_producto', $Imagenes_de_producto);
    }



}
