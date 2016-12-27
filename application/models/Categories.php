<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Categories
 */
class Categories extends Eloquent
{
    /**
     * Specify the database connection.
     * @var string
     */
    // protected $connection = '';

    /**
     * Database table.
     *
     * @var string
     */
    protected $table = 'sys_categories';

    /**
     * Mass-assign fields.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];

    /**
     * Disable timestamps.
     *
     * @var bool
     */
    public $timestamps = false;
}