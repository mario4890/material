<?php

    namespace App\Http\Controllers;

    use App\Material_group;
    use Illuminate\Http\Request;

    class MaterialGroupController extends Controller
    {
        protected $materialGroupObject;

        public function __construct()
        {
            $this->materialGroupObject = new Material_group();
        }

        public function index(Request $request)
        {
            $materialGroupList = $this->materialGroupObject->getter();

            return view('material_group.index', compact('materialGroupList'));
        }

        public function new(Request $request)
        {
            $materialGroupList = $this->materialGroupObject->getter();

            return view('material_group.new', compact('materialGroupList'));
        }

        public function new_save(Request $request)
        {
            $parent_group_id = $request->get('parent_group_id');
            $name            = $request->get('name');
            $this->materialGroupObject->setter($name, $parent_group_id);

            return redirect(route('materialGroup'));
        }

        public function edit(Request $request, $material_id = 0)
        {
            $materialGroupList = $this->materialGroupObject->getter();

            return view('material_group.edit', compact('materialGroupList', 'material_id'));
        }

        public function edit_update(Request $request, $material_group_id = 0)
        {
            $parent_group_id = $request->get('parent_group_id');
            $name      = $request->get('name');
            $this->materialGroupObject->updateRow($material_group_id, $name, $parent_group_id);

            return redirect(route('materialGroup'));
        }
    }
