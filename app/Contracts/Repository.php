<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 1/10/19
 * Time: 9:14 PM
 */

namespace App\Contracts;

/**
 * Interface Repository
 *
 * @package App\Contracts
 */
interface Repository
{
    /**
     * @param $limit
     * @param $offset
     *
     * @return mixed
     */
    public function get($limit = 10, $offset = 0);

    /**
     * @param array $data
     *
     * @return mixed
     */
    public function create(array $data = []);

    /**
     * @param       $id
     * @param array $data
     *
     * @return mixed
     */
    public function update($id, array $data = []);

    /**
     * @param $id
     *
     * @return mixed
     */
    public function delete($id);

    /**
     * @param $id
     *
     * @return mixed
     */
    public function getById($id);
}