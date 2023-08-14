<?php
/**
 * Copyright (C) Vincy - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Vincy <vincy@phppot.com>
 */
namespace Phppot;

require_once __DIR__ . '/../config/Config.php';

class Product
{

    private $dbConn;

    public function __construct()
    {
        require_once __DIR__ . '/../config/DataSource.php';
        $this->dbConn = new DataSource();
    }

    function getProductByKeyword($serach, $limit)
    {
        $query = "SELECT * FROM tbl_product WHERE name like ? OR description like ? ORDER BY name LIMIT $limit";

        $paramType = "ss";
        $paramValue = array(
            $serach,
            $serach
        );
        $productResult = $this->dbConn->select($query, $paramType, $paramValue);
        return $productResult;
    }

    function getFeaturedProductByKeyword($serach, $featured, $limit)
    {
        $query = "SELECT * FROM tbl_product WHERE (name like ? OR description like ?) AND  (featured =?) ORDER BY name LIMIT $limit";
        $paramType = "ssi";
        $paramValue = array(
            $serach,
            $serach,
            $featured
        );
        $featuredProductResult = $this->dbConn->select($query, $paramType, $paramValue);
        return $featuredProductResult;
    }

    function getProductCategoryByKeyword($serach, $limit)
    {
        $query = "SELECT * FROM tbl_category WHERE name like ?  ORDER BY name LIMIT $limit";
        $paramType = "s";
        $paramValue = array(
            $serach
        );
        $categoryResult = $this->dbConn->select($query, $paramType, $paramValue);
        return $categoryResult;
    }
}
?>