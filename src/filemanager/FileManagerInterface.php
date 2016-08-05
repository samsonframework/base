<?php
/**
 * Created by Vitaly Iegorov <egorov@samsonos.com>.
 * on 10.07.16 at 15:56
 */
namespace samsonframework\filemanager;

/**
 * File manager interface.
 * @author  Vitaly Iegorov <egorov@samsonos.com>
 */
interface FileManagerInterface
{
    /**
     * Read file.
     *
     * @param string $file Full path to file
     *
     * @return string Asset content
     */
    public function read($file);

    /**
     * Write file with folder structure creation.
     *
     * @param string $asset   Full path to file
     *
     * @param string $content Asset content
     */
    public function write($asset, $content);

    /**
     * Create folder with path structure.
     *
     * @param string $path Full path to asset
     */
    public function mkdir($path);

    /**
     * If path(file or folder) exists.
     *
     * @param string $path Path for validating existence
     *
     * @return bool True if path exists
     */
    public function exists($path);

    /**
     * Touch file.
     *
     * @param string $asset     Full path to file
     * @param int    $timestamp Timestamp
     */
    public function touch($asset, $timestamp);

    /**
     * Remove path/file recursively.
     *
     * @param string $path Path to be removed
     */
    public function remove($path);

    /**
     * Get last file modification timestamp.
     *
     * @param string $file Path to file
     *
     * @return int File modification timestamp
     */
    public function lastModified($file);

    /**
     * Recursively scan collection of paths to find files with passed
     * extensions. Method is based on linux find command so this method
     * can face difficulties on other OS.
     *
     *
     * @param array $paths          Paths for files scanning
     * @param array $extensions     File extension filter
     * @param array $excludeFolders Path patterns for excluding
     *
     * @return array Found files
     */
    public function scan(array $paths, array $extensions, array $excludeFolders = []);
}
