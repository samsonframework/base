<?php declare(strict_types=1);
namespace samsonframework\i18n;

/**
 * Internalization(i18n) interface.
 *
 * @author  Vitaly Egorov <egorov@samsonos.com>
 */
interface I18nInterface
{
    /**
     * Translate key with pluralization.
     *
     * @param string      $key Translatable key
     * @param int         $count Key count
     * @param string|null $locale Translation locale
     *
     * @return string Translated and pluralized key
     */
    public function plural(string $key, int $count, string $locale = null) : string;

    /**
     * Translate key.
     *
     * @param string      $key Translatable key
     * @param string|null $locale Translation locale
     *
     * @return string Translated key
     */
    public function translate(string $key, string $locale = null) : string;
}
