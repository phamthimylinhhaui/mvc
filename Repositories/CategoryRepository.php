<?php


class CategoryRepository
{
    public function getAllCategory(){
        return (new Category())->getListCategory([]);

    }
}