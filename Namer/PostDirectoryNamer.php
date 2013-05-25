<?php
/**
 * TODO add a file description
 */
 namespace Belsym\MediaBundle\Namer;
 use Vich\UploaderBundle\Naming\DirectoryNamerInterface;

 /**
 * Class DirectoryNamer
 * 
 * TODO add a class description
 * 
 * @package Belsym\MediaBundle\Namer
 * @author:    Matt Keeble <matt.keeble@gmail.com>
 * @copyright: (c) 2013 Beldougie Ltd
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
class PostDirectoryNamer implements DirectoryNamerInterface
{
    /**
     * Creates a directory name for the file being uploaded.
     *
     * @param object $obj The object the upload is attached to.
     * @param string $field The name of the uploadable field to generate a name for.
     * @param string $uploadDir The upload directory set in config
     * @return string The directory name.
     */
    public function directoryName($obj, $field, $uploadDir)
    {
        return $obj->getPost()->getSlug();
    }


}
