<?php
/**
 * @author Nicolas CARPi <nicolas.carpi@curie.fr>
 * @copyright 2012 Nicolas CARPi
 * @see https://www.elabftw.net Official website
 * @license AGPL-3.0
 * @package elabftw
 */
declare(strict_types=1);

namespace Elabftw\Elabftw;

/**
 * Define extensions groups
 */
final class Extensions
{
    /** @var array 3DMOL list of extensions understood by 3Dmol.js see http://3dmol.csb.pitt.edu/doc/types.html */
    public const MOLECULE = array(
        'cdjson',
        'cif',
        'cube',
        'gro',
        'json',
        'mcif',
        'mmtf',
        'mol2',
        'pdb',
        'pqr',
        'prmtop',
        'sdf',
        'vasp',
        'xyz',
    );

    /** @var array ARCHIVE archive files */
    public const ARCHIVE = array(
        'zip',
        'rar',
        'xz',
        'gz',
        'tgz',
        '7z',
        'bz2',
        'tar',
    );

    /** @var array ARCHIVE archive files */
    public const CODE = array(
        'py',
        'jupyter',
        'js',
        'm',
        'r',
        'R',
    );

    /** @var array ARCHIVE archive files */
    public const SPREADSHEET = array(
        'xls',
        'xlsx',
        'ods',
        'csv',
    );

    /** @var array ARCHIVE archive files */
    public const PRESENTATION = array(
        'ppt',
        'pptx',
        'pps',
        'ppsx',
        'odp',
    );

    /** @var array ARCHIVE archive files */
    public const VIDEO = array(
        'mov',
        'avi',
        'mp4',
        'wmv',
        'mpeg',
        'flv',
    );

    /** @var array ARCHIVE archive files */
    public const DOCUMENT = array(
        'doc',
        'docx',
        'odt',
    );
}
