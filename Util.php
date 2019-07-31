<?php


class Util
{
    public function arrayUnique($data)
    {
        $ret = [];
        for ($i = 0; $i < count($data); $i++) {
            if (!in_array($data[$i], $ret)){
                $ret[] = $data[$i];
            }

        }
        return $ret;
    }
}
