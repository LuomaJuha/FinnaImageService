<?php
/**
 * HTTP service for converting first page of a PDF document to a JPG image
 * using Ghostscript.
 *
 * PHP version 8
 *
 * Copyright (C) The National Library of Finland 2019-2021.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License version 2,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category VuFind
 * @package  PDF
 * @author   Samuli Sillanpää <samuli.sillanpaa@helsinki.fi>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     https://vufind.org/wiki/configuration:external_content Wiki
 */
require_once __DIR__ . '/vendor/autoload.php';

spl_autoload_register(
    function ($class) {
        include_once 'src/' . $class . '.php';
    }
);

$service = new \ImageService();
$service->handleRequest();
?>
