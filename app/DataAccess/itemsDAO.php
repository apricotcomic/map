<?php

namespace App\DataAccess;

use DB;

class itemsDAO
{
    /**
     *
     *
     *
     */
    public function getItemName($id)
    {
        $sql = 'select a.id as id,a.itemName as itemName,a.attribute as attribute '
            . 'from items as a,binditems as b '
            . 'where b.facility_id = ? and a.id = b.itemId';
        $result = DB::select($sql, [$id]);
        return $result;
    }
}
