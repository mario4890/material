<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Material_group extends Model
{
    protected $table    = 'material_group';
    protected $fillable = ['name', 'parent_group_id'];

    public function setter(string $name, int $parent_group_id)
    {
        DB::table('material_group')->insert(
            [
                'name' => $name, 'parent_group_id' => $parent_group_id
            ]
        );
    }

    public function getter()
    {
        $sql = DB::table('material_group')->get();

        return $sql;
    }

    public function updateRow(int $material_group_id, string $name, string $short)
    {
        $sql = DB::table('material_group')
                 ->where('id', $material_group_id)
                 ->update(['name' => $name, 'parent_group_id' => $short]);

        return $sql;
    }
}
