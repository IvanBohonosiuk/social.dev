<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;

class TraitMakeCommand extends GeneratorCommand
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $name = 'make:trait';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Create a new trait';

	/**
	 * The type of class being generated.
	 *
	 * @var string
	 */
	protected $type = 'Trait';

	/**
	 * Build the class with the given name.
	 *
	 * @param  string  $name
	 * @return string
	 */
	protected function buildClass($name)
	{
		$stub = parent::buildClass($name);

		$function = $this->option('function');

		return $function ? $this->replaceFunction($stub, $function) : $stub;
	}

	/**
	 * Replace the function for the given stub.
	 *
	 * @param  string  $stub
	 * @param  string  $function
	 * @return string
	 */
	protected function replaceFunction($stub, $function)
	{
		$function = trim($function, '=');
		//
		return str_replace('DummyFunction', $function, $stub);
		//
		//        $stub = str_replace('dummyModelName', Str::camel($function), $stub);

		//        return str_replace('DummyFunction', Str::camel($function), $stub);
	}

	/**
	 * Get the stub file for the generator.
	 *
	 * @return string
	 */
	protected function getStub()
	{
		if ($this->option('function')) {
			return __DIR__.'/stubs/trait.func.stub';
		} else {
			return __DIR__.'/stubs/trait.stub';
		}
	}

	/**
	 * Get the default namespace for the class.
	 *
	 * @param  string  $rootNamespace
	 * @return string
	 */
	protected function getDefaultNamespace($rootNamespace)
	{
		return $rootNamespace.'\Traits';
	}


	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return [
			['function', 'f', InputOption::VALUE_OPTIONAL, 'Create a new function into the trait.'],
		];
	}
}
