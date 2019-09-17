<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Material extends Model
{
    protected $table    = 'material';
    protected $fillable = ['name', 'code', 'unit_of_measure', 'material_group'];

    public function setter(string $name, string $unit, string $code, string $materialGroup)
    {
        DB::table('material')->insert(
            [
                'name' => $name,  'code' => $code, 'unit_of_measure' => $unit, 'material_group' => $materialGroup
            ]
        );
    }

    public function getter()
    {
        $sql = DB::table('material')->get();

        return $sql;
    }

    public function updateRow(int $material_id, string $name, string $unit, string $code, string $materialGroup)
    {
        $sql = DB::table('material')
                 ->where('id', $material_id)
                 ->update(['name' => $name, 'code' => $code, 'unit_of_measure' => $unit, 'material_group' => $materialGroup]);

        return $sql;
    }
}
