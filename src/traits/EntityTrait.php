<?php
/**
 * @author Nicolas CARPi <nicolas.carpi@curie.fr>
 * @copyright 2012 Nicolas CARPi
 * @see https://www.elabftw.net Official website
 * @license AGPL-3.0
 * @package elabftw
 */
declare(strict_types=1);

namespace Elabftw\Traits;

use Elabftw\Elabftw\Db;
use Elabftw\Elabftw\Tools;
use Elabftw\Exceptions\IllegalActionException;
use Elabftw\Models\Users;

/**
 * For things that are used by experiments, database, status, item types, templates, …
 *
 */
trait EntityTrait
{
    /** @var Users $Users our user */
    public $Users;

    /** @var int|null $id Id of the entity */
    public $id;

    /** @var array $entityData content of entity */
    public $entityData = array();

    /** @var Db $Db SQL Database */
    protected $Db;

    /**
     * Check and set id
     *
     * @param int $id
     * @throws IllegalActionException
     * @return void
     */
    public function setId(int $id): void
    {
        if (Tools::checkId($id) === false) {
            throw new IllegalActionException('The id parameter is not valid!');
        }
        $this->id = $id;
        // prevent reusing of old data from previous id
        unset($this->entityData);
    }
}
