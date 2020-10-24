<?php namespace Qbittech\LaravelXunSearch\Model;

/**
 * Interface Searchable
 *
 * @author davin.bao
 * @package Qbittech\LaravelXunSearch\Model
 */
interface SearchableInterface
{
    /**
     * Get id list for all searchable models.
     *
     * @return integer[]
     */
    public static function searchableIds();
}
