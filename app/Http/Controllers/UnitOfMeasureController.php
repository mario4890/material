<?php

    namespace App\Http\Controllers;

    use App\Unit_of_mesure;
    use Illuminate\Http\Request;

    class UnitOfMeasureController extends Controller
    {
        protected $unitObject;

        public function __construct()
        {
            $this->unitObject = new Unit_of_mesure();
        }

        public function index(Request $request)
        {
            $unitList = $this->unitObject->getter();

            return view('unit-of-measure.index', compact('unitList'));
        }

        public function new(Request $request)
        {
            return view('unit-of-measure.new');
        }

        public function new_save(Request $request)
        {
            $shortName = $request->get('short_name');
            $name      = $request->get('name');
            $this->unitObject->setter($name, $shortName);

            return redirect(route('unitOfMeasure'));
        }

        public function edit(Request $request, $unit_id = 0)
        {
            return view('unit-of-measure.edit', compact('unit_id'));
        }

        public function edit_update(Request $request,  $unit_id = 0)
        {
            $shortName = $request->get('short_name');
            $name      = $request->get('name');
            $this->unitObject->updateRow($unit_id, $name, $shortName);

            return redirect(route('unitOfMeasure'));
        }
    }
