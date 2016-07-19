<?php

namespace Cars\Http\ViewComposers;

use Cars\Models\Region;
use Cars\Models\Provincia;
use Cars\Models\Distrito;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;

class UbigeoModelForm
{

	public function compose(View $view)
	{
		/**
		 * Este only es practica pues si no recibe el valor de idregion,idprovincia,iddistrito
		 * lo llenara automaticamente con null
		 */

		$ubigeoForm = Request::only('idregion','idprovincia','iddistrito');

		$region = Region::orderBy('nombre','ASC')->lists('nombre','id')->toArray();
		$provincia = $distrito = array();

		if ($ubigeoForm['idregion']!=null) {
			$provincia = Provincia::where('idregion',$ubigeoForm['idregion'])
									->orderBy('nombre','ASC')
									->lists('nombre','id')
									->toArray();
			if ($ubigeoForm['idprovincia']!=null) {
				$distrito = Distrito::where('idprovincia',$ubigeoForm['idprovincia'])
									->orderBy('nombre','ASC')
									->lists('nombre','id')
									->toArray();
			}
		}
		$view->with(compact('ubigeoForm','region','provincia','distrito'));

	}
}