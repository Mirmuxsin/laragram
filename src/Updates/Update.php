<?php

namespace Milly\Laragram\Updates;


class Update {

    /**
     * Get telegram updates from request
     *
     * @return |request|
     */
    public static function get() {
            $request =  \request();
            return self::filterUpdate($request);
    }

    /**
     * Filter update
     *
     * @param $update
     * @return mixed |update
     */
    private static function filterUpdate ($update) {
        $update->validate([
            'update_id' => 'required|int',
        ]);
        return $update;
    }
}
