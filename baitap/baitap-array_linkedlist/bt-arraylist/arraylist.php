<?php


class MyList
{
    public $elements = [];
    public $size;

    public function ArrayList($arr = "")
    {
        if (is_array($arr) == true)
            $this->elements = $arr;
        else
            $this->elements = array();
    }

    /**
     * Them vao 1 phan tu vao mang voi vi tri index
     * @param $index , $obj
     **/
    public function insert($index, $obj)
    {
        array_splice($this->elements, $index, 0, [$obj]);
    }

    /**
     * Thêm một phần tử vào cuối danh sách này.
     * @param $obj
     **/
    public function add($obj)
    {
        array_push($this->elements, $obj);
    }

    /**
     * Loại bỏ phần tử ở vị trí đã chỉ định trong danh sách này.
     * @param $index
     **/
    public function remove($index)
    {
        if ($this->isInteger($index)) {
            $newArrayList = array();

            for ($i = 0; $i < $this->size(); $i++)
                if ($index != $i) $newArrayList[] = $this->get($i);

            $this->elements = $newArrayList;
        } else {
            die("ERROR in ArrayList.remove <br> Integer value required");
        }
    }

    /**
     * Trả về phần tử tại vị trí đã chỉ định trong danh sách này
     * @param $index
     **/
    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->elements[$index];

        } else {
            die("ERROR in ArrayList.get");
        }
    }

    /**
     * Xóa tất cả các phần tử khỏi danh sách này.
     **/
    public function clear()
    {
        $this->elements = array();
    }

    public function addAll($arr)
    {
        $this->elements = array_merge($this->elements, $arr);
    }

    public function indexOf($obj)
    {
        foreach ($this->elements as $key => $value) {
            if ($value == $obj) {
                return $key;
            }
        }
    }

    /**
     * Kiểm tra nếu danh sách này không có phần tử nào.
     * @return boolean
     **/
    public function isEmpty()
    {
        if (count($this->elements) == 0) {
            return true;
        }
        return false;
    }

    /**
     * Sắp xếp danh sách theo thứ tự bảng chữ cái.
     **/
    public function sort()
    {
        sort($this->elements);
    }

    public function reset()
    {
        return reset($this->elements);
    }

    /**
     * Trả về số phần tử trong danh sách này.
     * @return integer
     **/
    public function size()
    {
        return count($this->elements);
    }

    /**
     * Trả về một mảng chứa tất cả các phần tử trong danh sách này theo đúng thứ tự.
     * @return array
     **/
    public function toArray()
    {
        return $this->elements;
    }

    /**
     * Trả về true nếu tham số chứa một giá trị số nguyên
     * @return boolean
     **/
    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

}
