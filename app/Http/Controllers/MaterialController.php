<?php

    namespace App\Http\Controllers;

    use App\Material;
    use App\Material_group;
    use App\Unit_of_mesure;
    use Illuminate\Http\Request;

    class MaterialController extends Controller
    {
        protected $materialObject;
        protected $materialGroupObject;
        protected $unitObject;

        public function __construct()
        {
            $this->materialObject      = new Material();
            $this->materialGroupObject = new Material_group();
            $this->unitObject          = new Unit_of_mesure();
        }

        public function index(Request $request)
        {
            $materialList = $this->materialObject->getter();

            return view('material.index', compact('materialList'));
        }

        public function new(Request $request)
        {
            $materialGroupList = $this->materialGroupObject->getter();
            $unitList          = $this->unitObject->getter();

            return view('material.new', compact('materialGroupList', 'unitList'));
        }

        public function new_save(Request $request)
        {
            $name          = $request->get('name');
            $unit          = $request->get('unit');
            $code          = $request->get('code');
            $materialGroup = $request->get('materialGroup');
            $this->materialObject->setter($name, $unit, $code, $materialGroup);

            return redirect(route('material'));
        }

        public function edit(Request $request, int $material_id = 0)
        {
            $materialGroupList = $this->materialGroupObject->getter();
            $unitList          = $this->unitObject->getter();


            return view('material.edit', compact('materialGroupList', 'unitList', 'material_id'));
        }

        public function edit_update(Request $request, int $material_id = 0)
        {
            $name          = $request->get('name');
            $unit          = $request->get('unit');
            $code          = $request->get('code');
            $materialGroup = $request->get('materialGroup');
            $this->materialObject->updateRow($material_id, $name, $unit, $code, $materialGroup);

            return redirect(route('material'));
        }
    }
