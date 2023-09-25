<?php

namespace App\Helpers;

class Helpers {

    public static function UpperCase($str) {
        return strtoupper($str);
    }

    public static function helper_migration($table, array $fks = [],$comment) {
        if(count($fks) !== 0) {
            foreach ($fks as $key => $val) {
                $table->unsignedBigInteger($val[0])->nullable($val[1]);
                $table->foreign($val[0])->references("id")->on($val[2]);
            }
        }

        $table->timestamps();
        $table->softDeletes();

        $table->engine = "InnoDB";

        $table->integer('user_created')->unsigned()->nullable();
        $table->integer('user_updated')->unsigned()->nullable();
        $table->integer('user_deleted')->unsigned()->nullable();

        $table->comment($comment);
    }

    public static function helper_command_migration($argumentType, $argumentFolder, $param = null) {
        $folder = explode("_", $argumentFolder);
        $migration = $argumentFolder;

        $nameType = "create";

        if($argumentType) {
            switch ($argumentType) {
                case 'add':
                    $nameType = "add_".$param."_to";
                    break;
                case 'remove':
                    $nameType = "remove_".$param."_from";
                    break;
                case 'change':
                    $nameType = "change_".$param."_type_in";
                    break;
                default:
                    $nameType = $argumentType;
                    break;
            }
        }

        $folder = count($folder) == 1 ? $folder[0] : implode("" , array_map(function($item) {
            if($item == "d" || $item == "D") return "Detalle";

            return ucfirst($item);
        }, $folder));

        return [
            "folder" => $folder,
            "name" => $nameType . "_" . $migration . "_table",
        ] ;
    }
}
