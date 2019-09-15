<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\DB;
    use phpDocumentor\Reflection\Types\Object_;

    class Unit_of_mesure extends Model
    {
        protected $table    = 'unit_of_measure';
        protected $fillable = ['name', 'short_name'];

        public function setter(string $name, string $short)
        {
            DB::table('unit_of_measure')->insert(
                [
                    'name' => $name, 'short_name' => $short
                ]
            );
        }

        public function getter()
        {
            $sql = DB::table('unit_of_measure')->get();

            return $sql;
        }

        public function updateRow(int $unit_id, string $name, string $short)
        {
            $sql = DB::table('unit_of_measure')
                     ->where('id', $unit_id)
                     ->update(['name' => $name, 'short_name' => $short]);

            return $sql;
        }
    }
