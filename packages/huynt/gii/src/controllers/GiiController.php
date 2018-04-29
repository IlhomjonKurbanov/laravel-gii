<?php

namespace Huynt\Gii\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use SebastiaanLuca\StubGenerator\StubGenerator;
use Symfony\Component\VarDumper\Cloner\Stub;

class GiiController extends Controller
{
    //
	protected $sm;

	public function __construct() {
		$this->sm = \DB::getDoctrineSchemaManager();
	}

	public function index()
	{


		return view('gii::index');
	}

	public function getTableNames()
	{
		return $this->sm->listTableNames();
	}

	public function generateModels()
	{
		$tables = $this->getTableNames();

		foreach ($tables as $table)
		{
			$generator = new StubGenerator(__DIR__ . '/stubs/model.stub',
				app_path('Models/'.$table.'.php'));

			$generator->render([
				':CLASS_NAME:' => 'huytest'
			]);
		}
	}

	public function generateTables()
	{
		$columns = [];
		$tables =  $this->sm->listTableNames();

		if(is_array($tables))
		{
			foreach ($tables as $table) {
				dd($this->sm->listTableDetails($table));
			}
		}

		return $columns;
	}
}
