<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke(Request $request) // por ele ser do tipo invokeblae já cai no método invoke 
    {
        $parceiros = [
            'simple_organic'    => 'https://mma.prnewswire.com/media/1601220/Simply_Organic_Beauty_Logo.jpg',
            'boca_rosa_beauty'  => 'https://cdn.dooca.store/4828/brands/logo-boca-rosa.png',
            'mari_maria'        => 'https://s.zst.com.br/prod/cupons/long-term-cached-logos/2021-11-1_13:21:34-18822-Logo-200x200.png',
            'nina_secrets'      => 'https://i0.wp.com/multilist.com.br/wp-content/uploads/2020/11/logo-niina-e1605748663596.png',
            'eudora'            => 'https://pbs.twimg.com/profile_images/1496571967843049479/zbuNsD6v_400x400.png',
            'mac_makeup'        => 'https://1000logos.net/wp-content/uploads/2021/04/MAC-Cosmetics-logo.png',
        ];
        
        // o col do mdb é em 12, então é dividido 12 pelo valor do array
        // exemplo, 12 dividido por 6, o col_value é igual a 2
        // e a div é montada com base nisso
        $valor_coluna = ceil((12 / count($parceiros)));


        return view('site.about.index', ['parceiros' => $parceiros, 'valor_coluna' => $valor_coluna]); // retornar uma view que criamos a Index
    }
}
