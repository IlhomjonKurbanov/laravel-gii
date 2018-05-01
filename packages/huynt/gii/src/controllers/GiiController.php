<?php

namespace Huynt\Gii\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
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

	public function generateClassName($table)
	{
		$name = Str::singular(ucfirst(Str::camel($table)));
		return $name;
	}


	public function generateModels()
	{
		$tables = $this->sm->listTableNames();

		foreach ($tables as $table)
		{
			$className = $this->generateClassName($table);
			$fillable = $this->generateFillable($table);
			$table = 'protected $table = "'.$table.'";';
			$primaryKey = $this->generatePrimaryKey($table);

			if(file_exists(app_path('Models/'.$className.'.php')))
			{
				unlink(app_path('Models/'.$className.'.php'));
			}

			$generator = new StubGenerator(__DIR__ . '/stubs/model.stub',
				app_path('Models/'.$className.'.php'));

			$generator->render([
				'CLASS_NAME' => $className,
				'FILLABLE' => $fillable,
				'PRIMARY_KEY' => $primaryKey,
				'TABLE' => $table,
			]);
		}
	}

	public function generatePrimaryKey($table)
	{
		$retVal = 'protected $primaryKey = [';
		$indexes = $this->sm->listTableIndexes($table);
		foreach ($indexes as $index)
		{
			if($index->getName() == 'PRIMARY')
			{
				$columns = $index->getColumns();
				foreach ($columns as $column)
				{
					$retVal .= "'" . $column . "', ";
				}
			}
		}

		$retVal = $this->trimLast($retVal);
		$retVal .= '];';

		return $retVal;
	}

	public function generateFillable($table)
	{
		$columns = $this->sm->listTableColumns($table);

		$retVal = 'protected $fillable = [';

		foreach ($columns as $column)
		{
			if(!$column->getAutoIncrement()) {
				$retVal .= "'" . $column->getName() . "', ";
			}
		}

		$retVal = $this->trimLast($retVal);
		$retVal .= '];';

		return $retVal;
	}

	public function trimLast($string)
	{
		$string = trim($string);
		$string = rtrim($string, ',');
		return $string;
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
